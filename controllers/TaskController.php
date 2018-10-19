<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 20.10.2018
 * Time: 0:12
 */

namespace app\controllers;


use app\models\Task;
use yii\web\Controller;

class TaskController extends Controller
{

    public function actionHi() {

        return 'Приветсвие для первого урока';
    }


    public function actionIndex() {

        $model = new Task();
        $model ->email = 'yandex@yandex.ru';
        var_dump($model->validate());
        var_dump($model->getErrors());
        exit;

    }




}