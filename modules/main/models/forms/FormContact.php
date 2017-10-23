<?php

namespace app\modules\main\models\forms;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class FormContact extends Model
{
    public $name;
    public $phone;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone'], 'required', 'message' => ''],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) 
		{
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$email => Yii::$app->view->params['siteinfo']->title])
                ->setReplyTo([$email => Yii::$app->view->params['siteinfo']->title])
                ->setSubject('Сообщение из формы обратной связи')
                ->setHtmlBody($this->name.'<br><br>Контактные данные: '.$this->phone)
                ->send();
            return true;
        } 
		else 
		{
            return false;
        }
    }
}
