<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 


class Settings extends AbstractForm
{

    /**
     * @event keyDown-Esc 
     */
    function doKeyDownEsc(UXKeyEvent $event = null)
    {    
        
    }

}