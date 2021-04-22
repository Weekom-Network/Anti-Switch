<?php

declare(strict_types=1);

namespace noxi69\event;

use noxi69\AntiSwitch;
use noxi69\EntityDamageEvent;

/**
 * Class EventHandler
 * @package noxi69\event
 */
class EventHandler
{

    public function execute(): void
    {
        # Entity
        AntiSwitch::getInstance()->getServer()->getPluginManager()->registerEvents(new EntityDamageEvent(), AntiSwitch::getInstance());
    }
}