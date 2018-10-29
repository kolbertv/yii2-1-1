<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.10.2018
 * Time: 20:02
 */

namespace app\components;

use app\models\tables\Tasks;
use yii\base\Component;
use yii\base\Event;


class EventsComponent extends Component
{

    public function init()
    {

        parent::init();

        Event::on(Tasks::className(), Tasks::EVENT_AFTER_INSERT, function ($event) {

            $task = new Tasks([
                'title' => 'Ознакомится с проектом',
                'description' => 'Стартовая таска для знакомтсва проектом',
                'created_at' => date("Y-m-d h:i:s"),
                'creator_id' => '1',
//                'user_id' => $event->sender->id,
            ]);

            $task->save();


//            \Yii::$app->mailer->compose()
//                ->setTo('kolbert@yandex.ru')
//                ->setFrom('admin@qwerty.ru')
//                ->setSubject($task->title)
//                ->setTextBody($task->description)
//                ->send();

        });

    }

}