<?php

namespace app\modules\users\models;

use app\models\Comment;
use app\models\User;
use app\models\Category;
use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $adress
 * @property string $date
 * @property string $image
 * @property integer $viewed
 * @property integer $user_id
 * @property integer $status
 * @property integer $category_id
 * @property string $references
 * @property string $working_days
 * @property string $weekend
 *
 * @property ArticleTag[] $articleTags
 * @property Comment[] $comments
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'content', 'adress', 'references', 'working_days', 'weekend'], 'string'],
            [['date'], 'date', 'format'=>'php:Y-m-d'],
            [['date'], 'default', 'value'=>date('Y-m-d')],
            [['viewed', 'user_id', 'status', 'category_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
            [['title', 'description', 'content', 'adress'], 'required'],
            [['category_id'], 'required', 'message'=>'Не выбрана категория'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'content' => 'Содержание',
            'adress' => 'Адрес',
            'date' => 'Дата',
            'image' => 'Картинка',
            'viewed' => 'Колличество просмотров',
            'user_id' => 'id пользователя',
            'status' => 'Статус',
            'category_id' => 'Категория',
            'references' => 'Ваши ссылки',
            'working_days' => 'Рабочие дни',
            'weekend' => 'Выходные дни',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' =>'category_id']);
    }

    public  function saveCategory($categoty_id){
        $category = Category::findOne($categoty_id);
        if ($category != null)
        {
            $this->link('category', $category);
            return true;
        }
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' =>'user_id']);
    }

}
