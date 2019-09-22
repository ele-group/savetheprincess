<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class LevelOneLose extends AbstractForm
{

    /**
     * @event button_next.mouseDown-Left 
     */
    function doButton_nextMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('CityBackground');

        
    }



}
