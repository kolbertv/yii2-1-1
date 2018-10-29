<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.10.2018
 * Time: 15:02
 */

namespace app\models;

use Yii;
use yii\base\Model;

class RegistrationForm extends Model
{

    public $username;
    public $password;

    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password', ], 'required'],
            // password is validated by validatePassword()
            //['password', 'validatePassword'],
        ];
    }






}