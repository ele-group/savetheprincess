<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXWindowEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 


class Scene1 extends AbstractForm
{


    /**
     * @event image_spaceShip.destroy 
     */
    function doImage_spaceShipDestroy(UXEvent $event = null)
    {    
        
    }


    /**
     * @event timer.destroy 
     */
    function doTimerDestroy(UXEvent $e = null)
    {    
        
    }

}
