<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.10.2018
 * Time: 12:38
 */

use yii\widgets\DetailView;

?>


<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'title',
        'description',
        'creator_id',
    ],
]) ?>