<?php

declare(strict_types=1);

namespace noxi69;

use noxi69\event\EventHandler;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TE;

/**
 * Class AntiSwitch
 * @package noxi69
 */
class AntiSwitch extends PluginBase
{

    /** @var AntiSwitch */
    private static AntiSwitch $instance;

    /** @var EventHandler */
    private static EventHandler $eventHandler;

    public function onLoad()
    {
        self::$instance = $this;
    }

    public function onEnable()
    {
        $this->getLogger()->info(TE::GREEN . 'AntiSwitch plugin has been enabled');

        # Handlers
        self::$eventHandler = new EventHandler();
        self::$eventHandler->execute();
    }

    public function onDisable()
    {
        $this->getLogger()->info(TE::RED . 'AntiSwitch plugin has been disabled');
    }

    /**
     * @return AntiSwitch
     */
    public static function getInstance(): AntiSwitch
    {
        return self::$instance;
    }
}