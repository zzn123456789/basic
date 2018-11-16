<?php
    namespace app\models;

    use yii\base\Component;

    class Cat extends Component
    {
        /**
         * 猫发出叫声
         */
        public function shout()
        {
            echo '猫：miao miao miao <br />';

            // 猫叫了之后 触发猫的 miao 事件
            $this->trigger('miao');
        }
    }