<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

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
            [['date'], 'safe'],
            [['viewed', 'user_id', 'status', 'category_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'adress' => 'Adress',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'user_id' => 'User ID',
            'status' => 'Status',
            'category_id' => 'Category ID',
            'references' => 'References',
            'working_days' => 'Working Days',
            'weekend' => 'Weekend',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);

    }

    public function getImage()
    {

        return ($this->image) ? '/web/uploads/' .$this->image : '/web/no-image.png';
    }

    public function deleteImage()
    {
        $imageUploadModel= new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);

    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
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

    public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' =>'tag_id'])
            ->viaTable('article_tag', ['article_id' =>'id']);
    }

    public function getSelectedTags(){
        $selectedIds= $this->getTags()->select('id')->asArray()->all();
        return ArrayHelper::getColumn($selectedIds, 'id');
    }

    public function saveTags($tags)
    {
        if (is_array($tags))
        {
            $this->clearCurrentTag();

            foreach($tags as $tag_id)
            {
                $tag = Tag::findOne($tag_id);
                $this->link('tags', $tag);
            };
        }
    }
    public function clearCurrentTag()
    {
        ArticleTag::deleteAll(['article_id'=>$this->id]);
    }

}
