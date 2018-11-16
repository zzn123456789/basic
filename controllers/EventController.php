<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/11/13
 * Time: 9:43
 */

namespace app\controllers;


use app\models\Cat;
use app\models\Mouse;
use app\models\Dog;
use yii\web\Controller;
use yii\base\Event;

class EventController extends  Controller
{
    public function actionTest()
    {
        $cat = new Cat();
        $mouse = new Mouse();
        $dog = new Dog();

//        $cat->on('miao',[$mouse,'run']);

//        Event::on(Cat::className() ,'miao', [$mouse, 'run']);

        Event::on(Cat::className(),'miao',[$mouse,'run']);
//        $cat->on('miao',[$dog,'findCat']);

//        $cat->off('miao',[$dog,'findCat']);

        $cat->shout();
        (new Cat())->shout(); // 不会触发 miao 事件
    }
}