<?php
    namespace app\models;

    use yii\base\Behavior;

    class MyBehavior extends Behavior
    {
        public $name;
        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }
    }