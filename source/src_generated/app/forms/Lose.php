<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXWindowEvent; 
use action\Animation; 


class Lose extends AbstractForm
{

    /**
     * @event button_next.mouseDown-Left 
     */
    function doButton_nextMouseDownLeft(UXMouseEvent $event = null)
    {
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('CityBackground');

        
        
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeIn($this->form('Screen')->mouse, 500, function () use ($e, $event) {
		});

        
    }



}
