<?php
// ファイルのロード
require_once './classes/Lives.php';
require_once './classes/Human.php';
require_once './classes/Enemy.php';
require_once './classes/Brave.php';
require_once './classes/BlackMage.php';
require_once './classes/Message.php';
require_once './classes/WhiteMage.php';

// インスタンス化
$members = array();
$members[] = new Brave('ティーダ');
$members[] = new WhiteMage('ユウナ');
$members[] = new BlackMage('ルールー');

$enemies = array();
$enemies[] = new Enemy('ゴブリン', 20);
$enemies[] = new Enemy('ボム', 25);
$enemies[] = new Enemy('モルボル', 30);

$turn = 1;
$isFinishFlg = false;

$messageObjects = new Message;

// 終了条件の判定
function isFinish($objects)
{
    $deathCnt = 0; // HPが0以下の仲間の数
    foreach ($objects as $object) {
        // １人でもHPが０を超えていたらfalseを返す
        if ($object->getHitPoint() > 0) {
            return false;
        }
        $deathCnt++;
    }
    // 仲間の数が死亡数(HPが０以下の数)と同じであればtrueを返す
    if ($deathCnt === count($objects)) {
        return true;
    }
}

while (!$isFinishFlg) {
    echo "*** $turn ターン目 ***\n\n";

    // 仲間のステータス表示
    $messageObjects->displayStatusMessage($members);

    // 敵のステータスの表示
    $messageObjects->displayStatusMessage($enemies);

    // 攻撃
    // 仲間の攻撃
    $messageObjects->displayAttackMessage($members, $enemies);

    // 敵の攻撃
    $messageObjects->displayAttackMessage($enemies, $members);

    // 戦闘終了条件のチェック 仲間全員のHPが0 または、敵全員のHPが0
    $isFinishFlg = isFinish($members);
    if ($isFinishFlg) {
        $message = "GAME OVER ....\n\n";
        break;
    }

    $isFinishFlg = isFinish($enemies);
    if ($isFinishFlg) {
        $message = "♪♪♪ファンファーレ♪♪♪\n\n";
        break;
    }
    $turn++;

}
echo "★★★ 戦闘終了 ★★★\n\n";

echo $message;

// 仲間のステータス表示
$messageObjects->displayStatusMessage($members);

// 敵のステータスの表示
$messageObjects->displayStatusMessage($enemies);
