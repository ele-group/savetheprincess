<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Win extends AbstractForm
{

    /**
     * @event button_next.mouseDown-Left 
     */
    function doButton_nextMouseDownLeft(UXMouseEvent $event = null)
    {    
        $lvl3 = 'true';
        $this->ini->set('lvl3',$lvl3,'savetheprincess');
        $this->originForm('Screen')->reflection->phys->loadScene('CityBackground');
    }

}
