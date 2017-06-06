<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subcategories`.
 */
class m170604_162903_create_subcategories_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('subcategories', [
            'id' => $this->primaryKey(),
            'category_id' =>$this->integer(),
            'title' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('subcategories');
    }
}
