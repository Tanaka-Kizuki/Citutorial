<?php 

require_once('./classes/Human.php');
require_once('./classes/Enemy.php');

$brave = new Human;
$goblin = new Enemy;

$brave->name = "勇者";
$goblin->name = "ゴブリン";
$turn = 1;

echo $brave->name .":".$brave->hitPoint."/".$brave::MAX_HITPOINT."\n";
echo $goblin->name .":".$goblin->hitPoint."/".$goblin::MAX_HITPOINT."\n";

while($brave->hitPoint > 0 && $goblin->hitPoint > 0){


echo "**".$turn."ターン目**\n";
// ステータス
echo $brave->name .":".$brave->hitPoint."/".$brave::MAX_HITPOINT."\n";
echo $goblin->name .":".$goblin->hitPoint."/".$goblin::MAX_HITPOINT."\n";

// 攻撃
$brave->doAttack($goblin);
echo "\n";
$goblin->doAttack($brave);
echo "\n";

$turn++;
}

echo "★★★ 戦闘終了 ★★★\n\n";
echo $brave->name . "　：　" . $brave->hitPoint . "/" . $brave::MAX_HITPOINT . "\n";
echo $goblin->name . "　：　" . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n\n";
?>