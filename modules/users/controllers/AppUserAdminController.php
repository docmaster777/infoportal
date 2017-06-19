<?php
/**
 * Created by PhpStorm.
 * User: 555
 * Date: 18.06.2017
 * Time: 21:47
 */

namespace app\modules\users\controllers;
use yii\filters\AccessControl;
use yii\web\Controller;

class AppUserAdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

}