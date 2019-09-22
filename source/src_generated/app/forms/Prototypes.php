<?php
namespace app\forms;

use action\Collision;
use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXMouseEvent; 
use php\lib\Str; 
use php\util\Regex; 
use action\Animation; 
use game\Jumping; 


class Prototypes extends AbstractForm
{

    /**
     * @event player.globalKeyDown-Right 
     */
    function doPlayerGlobalKeyDownRight(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'ahead';

        
    }

    /**
     * @event player.globalKeyDown-Left 
     */
    function doPlayerGlobalKeyDownLeft(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'backward';

        
    }

    /**
     * @event player.globalKeyDown-Up 
     */
    function doPlayerGlobalKeyDownUp(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'up';

        
    }

    /**
     * @event player.globalKeyDown-Tab 
     */
    function doPlayerGlobalKeyDownTab(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'duck';

        
    }

    /**
     * @event player.globalKeyUp-Right 
     */
    function doPlayerGlobalKeyUpRight(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'default';

        
    }



    /**
     * @event player.globalKeyUp-Left 
     */
    function doPlayerGlobalKeyUpLeft(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'defaultago';

        
    }

    /**
     * @event player.globalKeyUp-Tab 
     */
    function doPlayerGlobalKeyUpTab(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'default';

        
    }

    /**
     * @event player.collision-zombie 
     */
    function doPlayerCollisionzombie(UXCollisionEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('LevelOneLose');

        
    }

    /**
     * @event image_key_1.collision-playerAlt 
     */
    function doImage_key_1CollisionobjectAlt(UXCollisionEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeOut($e->sender, 500, function () use ($e, $event) {
			$GLOBALS['key'] = 'true';
		});

        
    }

    /**
     * @event image_key_2.collision-playerAlt 
     */
    function doImage_key_2CollisionobjectAlt(UXCollisionEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2


		if ($GLOBALS['key'] != 'true')
			return $event->consume();
		Collision::bounce($e->sender, $event->normal, 8.0);
		$GLOBALS['key'] = 'false';
		Animation::fadeIn($e->sender, 500, function () use ($e, $event) {
			waitAsync(250, function () use ($e, $event) {
				$e->sender->sprite->currentAnimation = 'Two';
				waitAsync(250, function () use ($e, $event) {
					Animation::fadeOut($e->sender, 500, function () use ($e, $event) {
						$this->originForm('Screen')->reflection->phys->loadScene('Chest');
						return;
					});
				});
			});
		});

        
    }

    /**
     * @event zombieAlt.mouseDown-Left 
     */
    function doZombieAltMouseDownLeft(UXMouseEvent $event = null)
    {    
        Animation::fadeOut($event->sender, 300, function () use ($event) {
            $event->sender->free();
            });
    }

    /**
     * @event player.globalKeyDown-Space 
     */
    function doPlayerGlobalKeyDownSpace(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'newup';
		Animation::displace($e->sender, 150, 25.0, -50.0, function () use ($e, $event) {
			$e->sender->sprite->currentAnimation = 'default';
			Animation::displace($e->sender, 150, 25.0, 50.0, function () use ($e, $event) {
			});
		});

        
    }

    /**
     * @event player.globalKeyDown-Down 
     */
    function doPlayerGlobalKeyDownDown(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'default';

        
    }

    /**
     * @event playerAlt.globalKeyDown-Right 
     */
    function doPlayerAltGlobalKeyDownRight(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'ahead';

        
    }

    /**
     * @event playerAlt.globalKeyDown-Left 
     */
    function doPlayerAltGlobalKeyDownLeft(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'backward';

        
    }

    /**
     * @event playerAlt.globalKeyDown-Up 
     */
    function doPlayerAltGlobalKeyDownUp(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'newup';

        
    }

    /**
     * @event playerAlt.globalKeyDown-Tab 
     */
    function doPlayerAltGlobalKeyDownTab(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'duck';

        
    }

    /**
     * @event playerAlt.globalKeyUp-Right 
     */
    function doPlayerAltGlobalKeyUpRight(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'default';

        
    }

    /**
     * @event playerAlt.globalKeyUp-Left 
     */
    function doPlayerAltGlobalKeyUpLeft(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'defaultago';

        
    }

    /**
     * @event playerAlt.globalKeyUp-Tab 
     */
    function doPlayerAltGlobalKeyUpTab(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'default';

        
    }

    /**
     * @event playerAlt.globalKeyUp-Up 
     */
    function doPlayerAltGlobalKeyUpUp(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'default';

        
    }
}
