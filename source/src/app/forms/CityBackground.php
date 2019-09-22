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

class CityBackground extends AbstractForm
{
    /**
     * @event inf.mouseDown-Left 
     */
    function doInfMouseDownLeft(UXMouseEvent $event = null)
    {    
        
    }
    /**
     * @event imageBtn_start_lvl1.mouseDown-Left 
     */
    function doImageBtn_start_lvl1MouseDownLeft(UXMouseEvent $event = null)
    {    
        
    }
    /**
     * @event imageBtn_start_lvl2.mouseDown-Left 
     */
    function doImageBtn_start_lvl2MouseDownLeft(UXMouseEvent $event = null)
    {    
        
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