<?php
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

class LevelThreeBackground extends AbstractForm
{
    /**
     * @event object_enemy_3.collision-player 
     */
    function doObject_enemy_3Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_3.mouseDown-Left 
     */
    function doObject_enemy_3MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }

    /**
     * @event object_enemy_2.collision-player 
     */
    function doObject_enemy_2Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_2.mouseDown-Left 
     */
    function doObject_enemy_2MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_4.collision-player 
     */
    function doObject_enemy_4Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_4.mouseDown-Left 
     */
    function doObject_enemy_4MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_5.collision-player 
     */
    function doObject_enemy_5Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_5.mouseDown-Left 
     */
    function doObject_enemy_5MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_16.collision-player 
     */
    function doObject_enemy_16Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_16.mouseDown-Left 
     */
    function doObject_enemy_16MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_7.collision-player 
     */
    function doObject_enemy_7Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_7.mouseDown-Left 
     */
    function doObject_enemy_7MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_8.collision-player 
     */
    function doObject_enemy_8Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_8.mouseDown-Left 
     */
    function doObject_enemy_8MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_6.collision-player 
     */
    function doObject_enemy_6Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_6.mouseDown-Left 
     */
    function doObject_enemy_6MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_9.collision-player 
     */
    function doObject_enemy_9Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_9.mouseDown-Left 
     */
    function doObject_enemy_9MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_15.collision-player 
     */
    function doObject_enemy_15Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_15.mouseDown-Left 
     */
    function doObject_enemy_15MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_10.collision-player 
     */
    function doObject_enemy_10Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }

    /**
     * @event object_enemy_10.mouseDown-Left 
     */
    function doObject_enemy_10MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_11.collision-player 
     */
    function doObject_enemy_11Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_11.mouseDown-Left 
     */
    function doObject_enemy_11MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_18.collision-player 
     */
    function doObject_enemy_18Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_18.mouseDown-Left 
     */
    function doObject_enemy_18MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_12.collision-player 
     */
    function doObject_enemy_12Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_12.mouseDown-Left 
     */
    function doObject_enemy_12MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_17.collision-player 
     */
    function doObject_enemy_17Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_17.mouseDown-Left 
     */
    function doObject_enemy_17MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }

    /**
     * @event object_enemy_14.collision-player 
     */
    function doObject_enemy_14Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }

    /**
     * @event object_enemy_14.mouseDown-Left 
     */
    function doObject_enemy_14MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_13.collision-player 
     */
    function doObject_enemy_13Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_13.mouseDown-Left 
     */
    function doObject_enemy_13MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_19.collision-player 
     */
    function doObject_enemy_19Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_enemy_19.mouseDown-Left 
     */
    function doObject_enemy_19MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
        
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_ufo_small_1.mouseDown-Left 
     */
    function doObject_ufo_small_1MouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }
    /**
     * @event object_ufo_small_1.destroy 
     */
    function doObject_ufo_small_1Destroy(UXEvent $e = null)
    {    
        
    }
    /**
     * @event object_ufo_small_2.mouseDown-Left 
     */
    function doObject_ufo_small_2MouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }
    /**
     * @event object_ufo_small_2.destroy 
     */
    function doObject_ufo_small_2Destroy(UXEvent $e = null)
    {    
        
    }
    /**
     * @event object_zombie_3.collision-player 
     */
    function doObject_zombie_3Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.1);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_zombie_3.mouseDown-Left 
     */
    function doObject_zombie_3MouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }
    /**
     * @event shot_ufo_small.create 
     */
    function doShot_ufo_smallCreate(UXEvent $e = null)
    {    
        
    }
    /**
     * @event object_zombie_2.collision-player 
     */
    function doObject_zombie_2Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.1);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_zombie_2.mouseDown-Left 
     */
    function doObject_zombie_2MouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }
    /**
     * @event object_zombie_1.collision-player 
     */
    function doObject_zombie_1Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.1);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event object_zombie_1.mouseDown-Left 
     */
    function doObject_zombie_1MouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }
    /**
     * @event rect_flag_ufo.collision-player 
     */
    function doRect_flag_ufoCollisionplayer(UXCollisionEvent $e = null)
    {    
        
    }
    /**
     * @event object_ufo_big_2.mouseDown-Left 
     */
    function doObject_ufo_big_2MouseDownLeft(UXMouseEvent $e = null)
    {
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        $instance = $this->create('LevelThreeBackground.shot_ufo_1', $this->shot_ufo_1, 0, 0);
        $instance = $this->create('LevelThreeBackground.shot_ufo_2', $this->shot_ufo_2, 0, 0);
        $instance = $this->create('LevelThreeBackground.shot_ufo_3', $this->shot_ufo_3, 0, 0);
        $instance = $this->create('LevelThreeBackground.shot_ufo_4', $this->shot_ufo_4, 0, 0);
        $this->instances('LevelThreeBackground.shot_ufo_1')->x = 4528;
        $this->instances('LevelThreeBackground.shot_ufo_2')->x = 4528;
        $this->instances('LevelThreeBackground.shot_ufo_3')->x = 4528;
        $this->instances('LevelThreeBackground.shot_ufo_4')->x = 4528;
        Score::inc('bosshp', -10);
        if (Score::get('bosshp') != 0)
            return;
        $e->sender->sprite->currentAnimation = '1';
        waitAsync(500, function () use ($instance, $e, $event) {
            Animation::fadeOut($e->sender, 500, function () use ($instance, $e, $event) {
                $this->originForm('Screen')->reflection->phys->loadScene('Scene4');
                Animation::fadeIn($this->form('Screen')->mouse, 500, function () use ($e, $event) {});
                if (Score::get('hp') >= 0)
                    return;
                Animation::fadeOut($e->sender, 500, function () use ($instance, $e, $event) {
                    $this->originForm('Screen')->reflection->phys->loadScene('Lose');
                });
            });
        });
    }
    /**
     * @event shot_ufo_1.collision-player 
     */
    function doShot_ufo_1Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -5);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event shot_ufo_2.collision-player 
     */
    function doShot_ufo_2Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -5);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event shot_ufo_3.collision-player 
     */
    function doShot_ufo_3Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -5);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event shot_ufo_4.collision-player 
     */
    function doShot_ufo_4Collisionplayer(UXCollisionEvent $e = null)
    {
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -5);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event player.globalKeyDown-Left 
     */
    function doPlayerGlobalKeyDownLeft(UXKeyEvent $e = null)
    {    
        
    }
    /**
     * @event player.globalKeyDown-Right 
     */
    function doPlayerGlobalKeyDownRight(UXKeyEvent $e = null)
    {    
        
    }
    /**
     * @event player.globalKeyDown-Up 
     */
    function doPlayerGlobalKeyDownUp(UXKeyEvent $e = null)
    {    
        
    }
    /**
     * @event player.globalKeyDown-Tab 
     */
    function doPlayerGlobalKeyDownTab(UXKeyEvent $e = null)
    {    
        
    }
    /**
     * @event player.globalKeyUp-Left 
     */
    function doPlayerGlobalKeyUpLeft(UXKeyEvent $e = null)
    {    
        
    }
    /**
     * @event player.globalKeyUp-Right 
     */
    function doPlayerGlobalKeyUpRight(UXKeyEvent $e = null)
    {    
        
    }
    /**
     * @event player.globalKeyUp-Tab 
     */
    function doPlayerGlobalKeyUpTab(UXKeyEvent $e = null)
    {    
        
    }
    /**
     * @event player.collision-rect_flag_bow 
     */
    function doPlayerCollisionrect4(UXCollisionEvent $e = null)
    {    
        
    }
    /**
     * @event player.outside 
     */
    function doPlayerOutside(UXEvent $e = null)
    {    
        
    }
    /**
     * @event player.globalKeyDown-Down 
     */
    function doPlayerGlobalKeyDownDown(UXKeyEvent $e = null)
    {    
        
    }
    /**
     * @event object_enemy_1.mouseDown-Left 
     */
    function doObject_enemy_1MouseDownLeft(UXMouseEvent $e = null)
    {
        $e = $event ?: $e;
        $e->sender->sprite->currentAnimation = 'die';
        waitAsync(200, function () use ($e, $event) {
            Animation::fadeOut($e->sender, 300, function () use ($e, $event) {
            $e->sender->free();
            });
        });
    }
    /**
     * @event object_enemy_1.collision-player 
     */
    function doObject_enemy_1Collisionplayer(UXCollisionEvent $e = null)
    {
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        Score::inc('hp', -0.05);
        Element::setText($this->hp, Score::get('hp'));
        if (Score::get('hp') >= 1)
            return;
        $this->originForm('Screen')->reflection->phys->loadScene('Lose');
    }
    /**
     * @event bow.collision-shot_ufo_small 
     */
    function doBowCollisionshot_ufo_small(UXCollisionEvent $e = null)
    {    
        
    }
    /**
     * @event player.collision-shot_ufo_1 
     */
    function doPlayerCollisionshot_ufo_1(UXCollisionEvent $e = null)
    {    
        
    }
    /**
     * @event player.collision-shot_ufo_2 
     */
    function doPlayerCollisionshot_ufo_2(UXCollisionEvent $e = null)
    {    
        
    }
    /**
     * @event player.collision-shot_ufo_3 
     */
    function doPlayerCollisionshot_ufo_3(UXCollisionEvent $e = null)
    {    
        
    }
    /**
     * @event player.collision-shot_ufo_4 
     */
    function doPlayerCollisionshot_ufo_4(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event player.globalKeyDown-Space 
     */
    function doPlayerGlobalKeyDownSpace(UXKeyEvent $e = null)
    {    
        
    }

}
