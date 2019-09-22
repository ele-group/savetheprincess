<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXWindowEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use action\Animation; 


class Scene1 extends AbstractForm
{


    /**
     * @event image_spaceShip.destroy 
     */
    function doImage_spaceShipDestroy(UXEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('Scene2');

        
    }


    /**
     * @event timer.destroy 
     */
    function doTimerDestroy(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::moveTo($this->image_spaceShip, 3000, 0.0, 250.0, function () use ($e, $event) {
		});

        
    }

}
