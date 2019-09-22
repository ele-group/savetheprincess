0<?php
namespace app\forms;

use game\Jumping;
use php\jsoup\Elements;
use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXMouseEvent; 
use php\game\event\UXCollisionEvent; 
use action\Score; 
use action\Element; 
use php\gui\event\UXEvent; 
use action\Animation; 
use game\Jumping; 


class Scene4 extends AbstractForm
{



    /**
     * @event timer.destroy 
     */
    function doTimerDestroy(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeIn($this->object_princess, 500, function () use ($e, $event) {
			waitAsync(500, function () use ($e, $event) {
				Animation::fadeIn($this->image_heart, 500, function () use ($e, $event) {
					waitAsync(500, function () use ($e, $event) {
						Animation::fadeIn($this->circle, 500, function () use ($e, $event) {
							waitAsync(500, function () use ($e, $event) {
								$this->originForm('Screen')->reflection->phys->loadScene('Win');
							});
						});
					});
				});
			});
		});

        
    }






















































































}
