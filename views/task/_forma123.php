<?php
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\Url;
?>

<tr>
    <td><?= $model['created_at']?></td>
    <td><a href="<?= Url::to(['task/view', 'id' => $model['id']])?>"><?= $model['title']?></a></td>
    <td><?= $model['description']?></td>
    <td><?= $model['creator_id']?></td>
</tr>