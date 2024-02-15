<?php

declare(strict_types=1);

namespace venndev\plugin\items;

use pocketmine\entity\Entity;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use venndev\plugin\item\Weapon;

class AssassinSword extends Weapon
{

    public function getName() : string
    {
        return TextFormat::RED . "Assassin Sword";
    }

    public function getRecipeName() : string
    {
        return "assassin_sword";
    }

    public function getNameVanilla() : string
    {
        return "diamond_sword";
    }

    public function getLore() : array
    {
        return [
            TextFormat::GRAY . "A sword for Assassins."
        ];
    }

    public function getBonusAttackSpeed(): float
    {
        return -1000.0;
    }

}