<?php


namespace noxi69;


use noxi69\events\listeners\EntityListeners;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TE;

class AntiSwitch extends PluginBase{

    private static $instance;

    public function onLoad(){

        self::$instance = $this;

    }

    /**
     * @return AntiSwitch
     */
    public static function getInstance(): AntiSwitch{

        return self::$instance;

    }

    public function onEnable(){

        $this->getLogger()->info(TE::GREEN . "AntiSwitch plugin has been enabled");

        $this->registerListeners();

    }

    private function registerListeners(): void{

        $this->getServer()->getPluginManager()->registerEvents(new EntityListeners(), $this);

    }

    public function onDisable(){

        $this->getLogger()->info(TE::RED . "AntiSwitch plugin has been disabled");

    }

}
