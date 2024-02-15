<?php

declare(strict_types=1);

namespace venndev\plugin\items;

use pocketmine\entity\Entity;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use venndev\plugin\item\tools\Pickaxe;
use venndev\plugin\item\Weapon;

class DrillDX extends Pickaxe
{

    public function getName() : string
    {
        return TextFormat::RED . "Drill DX";
    }

    public function getRecipeName() : string
    {
        return "drill_dx";
    }

    public function getNameVanilla() : string
    {
        return "prismarine_shard";
    }

    public function getLore() : array
    {
        return [
            TextFormat::GRAY . "A drill for mining."
        ];
    }

    public function getMiningSpeed(): float
    {
        return 500.0;
    }

}