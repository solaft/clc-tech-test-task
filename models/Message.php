<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Message extends Model
{
    public $id;
    public $text;
    /**
     * @return array the validation rules.
     */
    public function mes()
    {
    
        return [
            // name, email, subject and body are required\
            ['id'],
            // email has to be a valid email address
            ['text']
        ];
    }
}