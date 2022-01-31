# Anti Switch
##### This plugin check the modifier when EntityDamageEvent is called.
 
The modifier of damage `EntityDamageEvent::MODIFIER_PREVIOUS_DAMAGE_COOLDOWN` is called when the player damage another player with attackCooldown so the modifier is here to reduce the damage.

So my plugin check if **when EntityDamageEvent is called**, the modifier is here in the modifier array, then **the plugin cancel the event and cancel the fast knockback**.
