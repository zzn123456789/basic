<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/11/12
 * Time: 13:06
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\db\Query;
use yii\web\Request;
use app\models\Country;
use yii\web\UrlManager;
use yii\base\Component;


class TestController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionTest()
    {
        $data = Yii::$app->request->post();

        $county =  new Country();

        if($county->load($data,'')&&$county->validate())
        {

        }else
        {
            var_dump($county->errors);
        }
    }
}