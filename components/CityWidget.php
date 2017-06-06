<?php


namespace app\components;
use phpDocumentor\Reflection\Types\Null_;
use yii\base\Widget;
use app\models\Cities;


class CityWidget extends Widget
{
    public $city;


    public function run(){

        $cities = Cities::find()->all();
        return $this->render('city', compact('cities'));
    }
}