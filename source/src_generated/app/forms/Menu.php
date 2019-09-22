<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Menu extends AbstractForm
{
    /**
     * @event buttonImg_exit.mouseDown-Left 
     */
    function doButtonImg_exitMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->shutdown();

        
    }

    /**
     * @event button_start.mouseDown-Left 
     */
    function doButton_startMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('CityBackground');

        
    }
}
