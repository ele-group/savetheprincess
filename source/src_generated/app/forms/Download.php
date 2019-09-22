<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXWindowEvent; 
use action\Score; 
use php\lib\Str; 
use php\util\Regex; 


class Download extends AbstractForm
{

    /**
     * @event label_title.destroy 
     */
    function doLabel_titleDestroy(UXEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('Menu');

        
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2


		if ($GLOBALS['first-run'] == 'true')
		{
			$this->originForm('Screen')->reflection->phys->loadScene('Scene1');
		}
        
    }


}
