<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 20.10.2018
 * Time: 0:14
 */

namespace app\models;

use \yii\base\Model;


class Task extends Model
{

    public $email;

    public function rules()
    {
        return [
            [['email'], 'myValidate']
        ];
    }


    public function myValidate($attribute, $params)
    {

        if (!preg_match("/^[a-zA-Z_\d][-a-zA-Z0-9_\.\d]*\@[a-zA-Z\d][-a-zA-Z\.\d]*\.[a-zA-Z]{2,6}$/i", $this->$attribute)) {
            $this->addError($attribute, 'Введен не корректный емайл');

        }


    }


}