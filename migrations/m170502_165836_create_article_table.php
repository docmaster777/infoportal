<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m170502_165836_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'content' => $this->text(),
            'adress' => $this->text(),
            'date' => $this->date(),
            'image' => $this->string(),
            'viewed' => $this->integer(), //кол-во просмотров статьи
            'user_id' => $this->integer(),
            'status' => $this->integer(),
            'category_id' =>$this->integer(),
            'references' => $this->text(),
            'working_days' => $this->text(),
            'weekend' => $this->text(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
