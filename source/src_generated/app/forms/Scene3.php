<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXWindowEvent; 
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXEvent; 
use action\Animation; 


class Scene3 extends AbstractForm
{




    /**
     * @event image_spaceShip.destroy 
     */
    function doImage_spaceShipDestroy(UXEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->ini->set('first-run','false','savetheprincess');;
		$this->originForm('Screen')->reflection->phys->loadScene('Menu');

        
    }

    /**
     * @event timer.destroy 
     */
    function doTimerDestroy(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::moveTo($this->image_spaceShip, 3000, 0.0, 0.0, function () use ($e, $event) {
		});

        
    }


}
