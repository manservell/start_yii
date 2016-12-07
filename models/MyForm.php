<?php
namespace app\models;
use Yii;
use yii\base\model;
class MyForm extends Model
{
    public $name;
    public $email;
    public $file;
    public function rules(){
        return [
            [['name', 'email'], 'required', 'message'=> 'Вы не заполнили поле'],
            ['email', 'email', 'message'=> 'Некорректный адрес электронной почты!'],
            [['file'],'file']
        ];
    }
}
?>