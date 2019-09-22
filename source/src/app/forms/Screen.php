<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXWindowEvent; 
use php\gui\event\UXMouseEvent; 


class Screen extends AbstractForm
{

    /**
     * @event keyDown-Esc 
     */
    function doKeyDownEsc(UXKeyEvent $event = null)
    {    
        
    }

    /**
     * @event circle_menu.mouseDown-Left 
     */
    function doCircle_menuMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event circle_close.mouseDown-Left 
     */
    function doCircle_closeMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        
    }

}
