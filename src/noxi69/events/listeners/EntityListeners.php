<?php


namespace noxi69\events\listeners;


use pocketmine\entity\Living;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\Player;

class EntityListeners implements Listener{

    /**
     * @param EntityDamageEvent $event
     */
    public function onDamage(EntityDamageEvent $event): void{

        $victim = $event->getEntity();
        $modifiers = array_keys($event->getModifiers());

        if ($victim instanceof Player){

            if (in_array(EntityDamageEvent::MODIFIER_PREVIOUS_DAMAGE_COOLDOWN, $modifiers)){

                $event->setCancelled(true);

            }

        }

    }

}
