<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 20.10.2018
 * Time: 0:12
 */

namespace app\controllers;

use app\models\tables\Users;
use app\models\tables\Tasks;
use app\models\Task;
use yii\base\Event;
use yii\data\SqlDataProvider;
use yii\db\Query;
use yii\web\Controller;
use app;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;


class TaskController extends Controller
{

    public function actionHi()
    {

        return 'Приветсвие для первого урока';
    }


    public function actionIndex()
    {
//        $model = new Task();
//        $model->email = 'yandex@yandex.ru';
//        var_dump($model->validate());
//        var_dump($model->getErrors());
//        exit;

//        $tasksSearch = \Yii::$app->db->createCommand("
//                select * from tasks where monthname(created_at) = monthname(now())
//        ");


//        $query = (new Query())->from('tasks');

        $dataProvider = new SqlDataProvider([
            'sql' => 'select * from tasks where monthname(created_at) = monthname(now())'
        ]);

//        $dataProvider = new ActiveDataProvider([
//            'query' =>$query,
//        ]);

//
//        debug($dataProvider->getModels());
//        exit();
//        ListView::widget([
//            'dataProvider' => $dataProvider,
//            'itemView' => function ($model, $key, $index, $widget) {
//                return $this->render('_form', ['model' => $model]);
//            },
//
//        ]);

//        $dataProvider->getModels()

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);


    }


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => Tasks::findOne($id)
        ]);
    }

    public function actionTest()
    {

//        \Yii::$app->db->createCommand("
//            INSERT INTO test(title, content, created) VALUES
//            ('title1', 'content1', NOW()),
//            ('title2', 'content2', NOW()),
//            ('title3', 'content3', NOW())
//        ")->execute();

//        $id = 1;
//        $res = \Yii::$app->db->createCommand("
//            select * from test where id=:id
//
//        ")
//            ->bindParam(':id', $id)
//            ->queryOne();
//
//        var_dump($res);

        /*
         * Создание новой записи
         */
//        $result = new Users();
//        $result->login = 'admin2';
//        $result->password = md5('admin');
//        $result->role = 1;
//        $result->save();

        /*
         * Чтение данных
         */

//        $result = Users::findOne(['login'=>'pupkin']);

        /*
         * Удаление записи
         */
//        $result = Users::findOne(1);
//        $result->delete();

//        var_dump(Users::deleteAll('id = 5'));
//        var_dump(Users::deleteAll(['=', 'id', 8]));

//        $result = Users::find()->all();

        $result = Users::findOne(2);

//        $result = Users::find()
//            ->where(['id' => '2'])
//            ->with('role')
//            ->one();

        debug($result);
        var_dump($result);
        exit();

    }

    public function actionTask()
    {

//        $result = \Yii::$app->db->createCommand("
//            insert into tasks(title, description, created_at) values
//            ('таск 1', 'описание таски 1', NOW()),
//            ('таск 2', 'описание таски 2', NOW()),
//            ('таск 3', 'описание таски 3', NOW()),
//            ('таск 4', 'описание таски 4', NOW())
//        ")->execute();


        $result = \Yii::$app->db->createCommand("
                select * from tasks where monthname(created_at) = monthname(now())
        ")->queryAll();
        debug($result);
        var_dump($result);


//        debug(\Yii::$app->getSecurity()->generatePasswordHash('111'));

        exit();

    }

    public function actionTest2()
    {


//        $result = \Yii::$app->db->createCommand("
//            select id, username from user
//        ")->queryAll();


        $result = (new Query())
            ->select(['id', 'username'])
            ->from('user');

        $array = [];

        foreach ($result->each() as $user) {

            $array[$user['id']] = $user['username'];

        }

        debug($array);

//        debug($result);
        exit();

    }


    public function actionNewuser()
    {

        Event::on(app\models\User::className(), app\models\User::EVENT_AFTER_INSERT, function ($event) {

            $task = new Tasks([
                'title' => 'Ознакомится с проектом',
                'description' => 'Стартовая таска для знакомтсва проектом',
                'created_at' => date("Y-m-d h:i:s"),
                'creator_id' => '1',
                'user_id' => $event->sender->id,
            ]);

            $task->save();


            \Yii::$app->mailer->compose()
                ->setTo('kolbert@yandex.ru')
                ->setFrom('admin@qwerty.ru')
                ->setSubject($task->title)
                ->setTextBody($task->description)
                ->send();


                      debug('сообщение отравлено');
//          debug($event);
//          debug($task->title);
        });


        $user = new app\models\User();
        $user->username = 'qwerty';
        $user->password = 'qwerty';
        $user->email = 'qwerty@qwerty.ru';
        $user->save();

//        debug($user);

        exit();


    }


}