<?php

class BlackMage extends Human
{
    const MAX_HITPOINT = 80;
    private $hitPoint = 80;
    private $attackPoint = 10;
    private $intelligence = 30;

    public function doAttack($enemy)
    {
        if (rand(1, 3) === 1) {
            echo "[" . $this->getName() . "]がスキルを発動した\n";
            echo "[ファイヤ]!!\n";
            echo $enemy->getName."に".$this->intelligence*1.5."のダメージ!!\n";
            $enemy->tookDamage($intelligence*1.5);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }
}
