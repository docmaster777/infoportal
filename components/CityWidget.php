<?php


namespace app\components;
use phpDocumentor\Reflection\Types\Null_;
use yii\base\Widget;
use app\models\Cities;


class CityWidget extends Widget
{
    public $city;

    public function init()
    {
        parent::init();
        if ($this->city === null) $this->city = 'Нет городов';
    }

    public function run(){

        return $this->render('city', ['city' => $this->city]);
    }
}