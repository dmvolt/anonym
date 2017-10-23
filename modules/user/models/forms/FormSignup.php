<?php
namespace app\modules\user\models\forms;

use app\modules\user\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class FormSignup extends Model
{
    public $username;
    public $email;
    public $password;
    public $verifyCode;
    private $_defaultRole;

    public function __construct($defaultRole, $config = [])
    {
        $this->_defaultRole = $defaultRole;
        parent::__construct($config);
    }
 
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'match', 'pattern' => '#^[\w_-]+$#i'],
            ['username', 'unique', 'targetClass' => User::className(), 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
 
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => User::className(), 'message' => 'This email address has already been taken.'],
 
            ['password', 'required'],
            ['password', 'string', 'min' => 5],
 
            ['verifyCode', 'captcha', 'captchaAction' => '/user/default/captcha'],
        ];
    }
	
	public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'FORM_LOGIN'),
            'password' => Yii::t('app', 'FORM_PW'),
			'email' => Yii::t('app', 'FORM_EMAIL'),
			'verifyCode' => Yii::t('app', 'FORM_VERIFY_CODE'),
        ];
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
            $user->setPassword($this->password);
            $user->status = User::STATUS_WAIT;
            $user->role = $this->_defaultRole;
            $user->generateAuthKey();
            $user->generateEmailConfirmToken();
 
            if ($user->save()) {
                Yii::$app->mailer->compose('@app/modules/user/mails/emailConfirm', ['user' => $user])
                    ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
                    ->setTo($this->email)
                    ->setSubject('Email confirmation for ' . Yii::$app->name)
                    ->send();
            }
 
            return $user;
        }
 
        return null;
    }
}