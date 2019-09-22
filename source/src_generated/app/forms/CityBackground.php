<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXMouseEvent; 
use php\game\event\UXCollisionEvent; 
use php\lib\Str; 
use php\util\Regex; 
use action\Score; 
use game\Jumping; 
use action\Animation; 
use php\gui\event\UXEvent; 
use php\gui\UXDialog; 

class CityBackground extends AbstractForm
{
    /**
     * @event inf.mouseDown-Left 
     */
    function doInfMouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('Information');

        
    }
    /**
     * @event imageBtn_start_lvl1.mouseDown-Left 
     */
    function doImageBtn_start_lvl1MouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('LevelOneBackground');

        
    }
    /**
     * @event imageBtn_start_lvl2.mouseDown-Left 
     */
    function doImageBtn_start_lvl2MouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$GLOBALS['lvl1'] = $this->ini->get('lvl1','savetheprincess');

		if ($GLOBALS['lvl1'] == 'true')
			$this->originForm('Screen')->reflection->phys->loadScene('LevelTwo');

		else
			UXDialog::show('Упс! Вы не прошли первый уровень!', 'ERROR');

        
    }
    /**
     * @event rect_start_lvl3.mouseDown-Left 
     */
    function doRect_start_lvl3MouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }
    /**
     * @event imageBtn_start_lvl3.mouseDown-Left 
     */
    function doImageBtn_start_lvl3MouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$GLOBALS['lvl2'] = $this->ini->get('lvl2','savetheprincess');

		if ($GLOBALS['lvl2'] == 'true')
		{
			$this->originForm('Screen')->reflection->phys->loadScene('LevelThreeBackground');
			Score::set('hp', 100);
			Score::set('enemy1hp', 100);
			Score::set('enemy2hp', 100);
			Score::set('bosshp', 100);
			Animation::fadeOut($this->form('Screen')->mouse, 500, function () use ($e, $event) {
				
});	}
		else
			UXDialog::show('Упс! Вы не прошли второй уровень!', 'ERROR');

        
    }
    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        $GLOBALS['lvl1'] = $this->ini->get('lvl1','savetheprincess');  
        $GLOBALS['lvl2'] = $this->ini->get('lvl2','savetheprincess');  
        $GLOBALS['lvl3'] = $this->ini->get('lvl3','savetheprincess');  
    }
}
