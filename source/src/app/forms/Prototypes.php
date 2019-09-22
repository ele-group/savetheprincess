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


class Prototypes extends AbstractForm
{

    /**
     * @event player.globalKeyDown-Right 
     */
    function doPlayerGlobalKeyDownRight(UXKeyEvent $event = null)
    {    
        
    }

    /**
     * @event player.globalKeyDown-Left 
     */
    function doPlayerGlobalKeyDownLeft(UXKeyEvent $event = null)
    {    
        
    }

    /**
     * @event player.globalKeyDown-Up 
     */
    function doPlayerGlobalKeyDownUp(UXKeyEvent $event = null)
    {    
        
    }

    /**
     * @event player.globalKeyDown-Tab 
     */
    function doPlayerGlobalKeyDownTab(UXKeyEvent $event = null)
    {    
        
    }

    /**
     * @event player.globalKeyUp-Right 
     */
    function doPlayerGlobalKeyUpRight(UXKeyEvent $event = null)
    {    
        
    }



    /**
     * @event player.globalKeyUp-Left 
     */
    function doPlayerGlobalKeyUpLeft(UXKeyEvent $event = null)
    {    
        
    }

    /**
     * @event player.globalKeyUp-Tab 
     */
    function doPlayerGlobalKeyUpTab(UXKeyEvent $event = null)
    {    
        
    }

    /**
     * @event player.collision-zombie 
     */
    function doPlayerCollisionzombie(UXCollisionEvent $event = null)
    {    
        
    }

    /**
     * @event image_key_1.collision-playerAlt 
     */
    function doImage_key_1CollisionobjectAlt(UXCollisionEvent $event = null)
    {    
        
    }

    /**
     * @event image_key_2.collision-playerAlt 
     */
    function doImage_key_2CollisionobjectAlt(UXCollisionEvent $event = null)
    {    
        
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
        
    }

    /**
     * @event player.globalKeyDown-Down 
     */
    function doPlayerGlobalKeyDownDown(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event playerAlt.globalKeyDown-Right 
     */
    function doPlayerAltGlobalKeyDownRight(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event playerAlt.globalKeyDown-Left 
     */
    function doPlayerAltGlobalKeyDownLeft(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event playerAlt.globalKeyDown-Up 
     */
    function doPlayerAltGlobalKeyDownUp(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event playerAlt.globalKeyDown-Tab 
     */
    function doPlayerAltGlobalKeyDownTab(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event playerAlt.globalKeyUp-Right 
     */
    function doPlayerAltGlobalKeyUpRight(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event playerAlt.globalKeyUp-Left 
     */
    function doPlayerAltGlobalKeyUpLeft(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event playerAlt.globalKeyUp-Tab 
     */
    function doPlayerAltGlobalKeyUpTab(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event playerAlt.globalKeyUp-Up 
     */
    function doPlayerAltGlobalKeyUpUp(UXKeyEvent $e = null)
    {    
        
    }
}
