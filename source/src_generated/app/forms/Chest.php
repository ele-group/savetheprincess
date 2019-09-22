<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Chest extends AbstractForm
{

    /**
     * @event button_take.mouseDown-Left 
     */
    function doButton_takeMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('LevelTwoWin');

        
    }


}
