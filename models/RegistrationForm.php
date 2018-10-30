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
    public $passwordRepeat;
    public $email;

    public function rules()
    {
        return [
            [['username', 'password', 'passwordRepeat','email' ], 'required'],
            [['passwordRepeat'], 'validatePassword'],
            [['username'], 'validateUsername'],
            [['email'], 'validateEmail'],
            [['email'], 'email'],
        ];
    }

    public function validateUsername($attribute, $params){

        if (!$this->getUser()) {
            return true;
        }

        $this->addError($attribute, 'User exist.');
        return false;

    }

    public function validateEmail($attribute, $params){

        if (!$this->getEmail()) {
            return true;
        }

        $this->addError($attribute, 'Email exist.');
        return false;

    }


    public function validatePassword($attribute, $params)
    {

        if ($this->password == $this->passwordRepeat) {
            return true;
        } else {
            $this->addError($attribute, 'Password is different.');
            return false;
        }

    }

    public function getUser()
    {
        return User::findByUsername($this->username);
    }


    public function getEmail()
    {
        return User::findOne(['email' => $this->email]);
    }


}