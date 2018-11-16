<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $id
 * @property string $province
 * @property string $city
 * @property string $dist
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['province'],'required','message'=>'城市不能为空!'],
            [['province', 'city', 'dist'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'province' => 'Province',
            'city' => 'City',
            'dist' => 'Dist',
        ];
    }
}
