<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXWindowEvent; 
use php\gui\event\UXEvent; 


class Scene2 extends AbstractForm
{

    /**
     * @event image_ufo.destroy 
     */
    function doImage_ufoDestroy(UXEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('Scene3');

        
    }


}
