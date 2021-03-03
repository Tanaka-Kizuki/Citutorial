<?php 

require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');

$sawada = new Brave("さわだ");
$goblin = new Enemy("ゴブリン");

$turn = 1;

while($sawada->getHitPoint() > 0 && $goblin->getHitPoint() > 0){
     echo "**".$turn."ターン目**\n";
     // ステータス
     echo $sawada->getName() .":".$sawada->getHitPoint()."/".$sawada::MAX_HITPOINT."\n";
     echo $goblin->getName() .":".$goblin->getHitPoint()."/".$goblin::MAX_HITPOINT."\n";

     // 攻撃
     $sawada->doAttack($goblin);
     echo "\n";
     $goblin->doAttack($sawada);
     echo "\n";

     $turn++;
}

echo "★★★ 戦闘終了 ★★★\n\n";
echo $sawada->getName() . "　：　" . $sawada->getHitPoint() . "/" . $sawada::MAX_HITPOINT . "\n";
echo $goblin->getName() . "　：　" . $goblin->getHitPoint() . "/" . $goblin::MAX_HITPOINT . "\n\n";
?>