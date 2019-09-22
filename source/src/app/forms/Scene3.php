<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXWindowEvent; 
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXEvent; 


class Scene3 extends AbstractForm
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
