<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $phone;
    public $password;
    public $repassword;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            [['username', 'password'], 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['phone', 'filter', 'filter' => 'trim'],
            ['phone', 'required'],
            ['phone', 'string', 'min' => 10, 'max' => 10],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['repassword', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    public function scenarios(){
        $scenarios = parent::scenarios();
        /*$scenarios['short_register'] = ['username', 'email'];
        $scenarios['short_register2'] = ['username', 'email', 'password'];
        $scenarios['short_register3'] = ['email', 'password'];*/

        return $scenarios;
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->phone = $this->phone;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->save(false);

            $auth = \Yii::$app->authManager;
            $authorRole = $auth->getRole('user');
            $auth->assign($authorRole, $user->getId());

            return $user;
        }
        return null;
    }
}
