<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class LevelOneWin extends AbstractForm
{

    /**
     * @event button_next.mouseDown-Left 
     */
    function doButton_nextMouseDownLeft(UXMouseEvent $e = null)
    {
        $lvl1 = 'true';
        $this->ini->set('lvl1',$lvl1,'savetheprincess');
        $this->originForm('Screen')->reflection->phys->loadScene('CityBackground');
    }


}
