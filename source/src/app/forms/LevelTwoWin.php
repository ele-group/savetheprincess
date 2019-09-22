<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class LevelTwoWin extends AbstractForm
{

    /**
     * @event button_next.mouseDown-Left 
     */
    function doButton_nextMouseDownLeft(UXMouseEvent $e = null)
    {
        $lvl2 = 'true';
        
        $this->ini->set('lvl2',$lvl2,'savetheprincess');
        $this->originForm('Screen')->reflection->phys->loadScene('CityBackground');
    }


}
