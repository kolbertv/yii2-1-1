<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2018
 * Time: 8:45
 */

/*
 * @var $dataProvider yii\data\ActiveDataProvider
 */

use yii\widgets\ListView;
use yii\data\ActiveDataProvider;


//debug($dataProvider->getModels())
?>



<table class="table">

    <tr>
        <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>creator_id</th>
    </tr>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
//    'itemView' => '_forma123'

        'itemView' => function ($model, $key, $index, $widget) {
            return $widget->render('@app/views/task/_forma123', ['model' => $model]);
        }

    ]); ?>



</table>






<div class="listView">

    <h1>Перечень таск за этот месяц</h1>


</div>

