<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\game\event\UXCollisionEvent; 


class LevelOneBackground extends AbstractForm
{

    /**
     * @event rect_wall_left.collision-btn_win 
     */
    function doRect_wall_leftCollisionbtn_win(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('LevelOneWin');

        
    }

}
