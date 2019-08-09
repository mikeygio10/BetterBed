<?php

namespace BetterBed;



use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\event\player\PlayerBedEnterEvent;
use pocketmine\event\player\PlayerBedLeaveEvent;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {
    public function onEnable()/* : void /* TODO: uncomment this for next major version */
    {
        $this->getLogger()->info(TextFormat::GREEN . "BetterBed succesfully started!");
    }

    public function onDisable()/* : void /* TODO: uncomment this for next major version */
    {
        $this->getLogger()->info(TextFormat::RED . "BetterBed stopped!");
    }

    public function BedRegen(PlayerBedLeaveEvent $bedLeave){

        $p = $bedLeave->getPlayer();
        $p->sendMessage(TextFormat::RED . "Succesfully regened!");
        $p->addEffect($effect);
        $effect = new EffectInstance(Effect::REGENERATION, 100, 4, false, false);
    }
}