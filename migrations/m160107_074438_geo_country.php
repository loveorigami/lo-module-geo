<?php

use yii\db\Migration;

class m160107_074438_geo_country extends Migration
{
    public $tableName = "{{%geo__country}}";

    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'status' => 'tinyint(1) NOT NULL DEFAULT 0',
            'author_id' => $this->integer()->notNull(),
            'updater_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),

            'name' => $this->string()->notNull(),
            'name_en' => $this->string(),
            'pos' => $this->smallInteger(),
            'img' => $this->string(),

        ]);

        $this->createIndex('idx_country_status', $this->tableName, 'status');

    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
