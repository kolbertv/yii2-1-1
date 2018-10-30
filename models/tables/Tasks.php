<?php

namespace app\models\tables;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $creator_id
 * @property int $updater_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $run_to
 */
class Tasks extends \yii\db\ActiveRecord
{


    public function behaviors()
    {

        return [
            [

                'class'=> TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT=>['created_at', 'updated_at', 'run_to'],
                    ActiveRecord::EVENT_BEFORE_UPDATE=>['updated_at'],
                ],

                'value'=> date("Y-m-d h:i:s"),
            ]
        ];


    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['creator_id', 'updater_id'], 'integer'],
            [['created_at', 'updated_at', 'run_to'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['run_to'], 'validateRunTo'],

        ];
    }

    public function validateRunTo($attribute, $params) {


//        debug($this->created_at);
//        debug($this->run_to);

        if ($this->created_at <= $this->run_to) {
            return true;
        } else {

            $this->addError($attribute, 'Data of task end must be more or equal than created');
            return false;
        }

    }



    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'creator_id' => 'Creator ID',
            'updater_id' => 'Updater ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'run_to' => 'Run To',
        ];
    }
}
