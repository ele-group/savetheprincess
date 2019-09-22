<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXWindowEvent; 
use php\gui\event\UXMouseEvent; 
use action\Media; 
use action\Animation; 


class Screen extends AbstractForm
{

    /**
     * @event keyDown-Esc 
     */
    function doKeyDownEsc(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->reflection->phys->loadScene('Menu');
		Animation::fadeIn($this->mouse, 500, function () use ($e, $event) {
		});

        
    }

    /**
     * @event circle_menu.mouseDown-Left 
     */
    function doCircle_menuMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->reflection->phys->loadScene('Menu');
		Animation::fadeIn($this->mouse, 500, function () use ($e, $event) {
		});

        
    }

    /**
     * @event circle_close.mouseDown-Left 
     */
    function doCircle_closeMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->shutdown();

        
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$GLOBALS['first-run'] = $this->ini->get('first-run','savetheprincess');

        
    }

}
