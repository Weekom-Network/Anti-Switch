<?php

declare(strict_types=1);

namespace noxi69\event\entity;

use pocketmine\event\Listener;
use pocketmine\Player;

/**
 * Class EntityDamageEvent
 * @package noxi69
 */
class EntityDamageEvent implements Listener
{

    /**
     * @param \pocketmine\event\entity\EntityDamageEvent $event
     */
    public function handleDamage(\pocketmine\event\entity\EntityDamageEvent $event): void
    {
        $entity = $event->getEntity();

        if (!$entity instanceof Player) // TODO: Use other player class (extends core uhc)
            return;

        if (!$event->isCancelled() && $event->isApplicable($event::MODIFIER_PREVIOUS_DAMAGE_COOLDOWN))
            $event->setCancelled(true); # Force cancelled
    }
}