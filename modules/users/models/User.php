<?php

namespace app\modules\users\models;
use app\modules\users\models\Article;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $isAdmin
 * @property string $photo
 *
 * @property Comment[] $comments
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isAdmin'], 'integer'],
            [['name', 'email', 'password', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'isAdmin' => 'Is Admin',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getComments()
//    {
//        return $this->hasMany(Comment::className(), ['user_id' => 'id']);
//    }

//    //    мой код
//    public function getParent()
//    {
//        return $this->hasOne(Article::className(), ['user_id' => 'id']);
//    }
//
//    public function getParentName()
//    {
//        $parent = $this->parent;
//
//        return $parent ? $parent->title : '';
//    }
//    //    мой код конец
}
