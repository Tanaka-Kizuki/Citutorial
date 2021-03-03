<?php 

require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');

$sawada = new Brave;
$goblin = new Enemy;

$sawada->name = "勇者";
$goblin->name = "ゴブリン";
$turn = 1;

echo $sawada->name .":".$sawada->hitPoint."/".$sawada::MAX_HITPOINT."\n";
echo $goblin->name .":".$goblin->hitPoint."/".$goblin::MAX_HITPOINT."\n";

while($sawada->hitPoint > 0 && $goblin->hitPoint > 0){


echo "**".$turn."ターン目**\n";
// ステータス
echo $sawada->name .":".$sawada->hitPoint."/".$sawada::MAX_HITPOINT."\n";
echo $goblin->name .":".$goblin->hitPoint."/".$goblin::MAX_HITPOINT."\n";

// 攻撃
$sawada->doAttack($goblin);
echo "\n";
$goblin->doAttack($sawada);
echo "\n";

$turn++;
}

echo "★★★ 戦闘終了 ★★★\n\n";
echo $sawada->name . "　：　" . $sawada->hitPoint . "/" . $sawada::MAX_HITPOINT . "\n";
echo $goblin->name . "　：　" . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n\n";
?>