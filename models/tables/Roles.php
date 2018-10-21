<?php

namespace app\models\tables;

use Yii;

/**
 * This is the model class for table "roles".
 *
 * @property int $id
 * @property string $role
 */
class Roles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role'], 'required'],
            [['role'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role' => 'Role',
        ];
    }
}
