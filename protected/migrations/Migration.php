<?php

namespace app\migrations;

use yii\db\Migration as OldMigration;

class Migration extends OldMigration
{
    protected $tableOptions;

    public function init()
    {
        parent::init();

        $this->tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
    }

    public function createTable($table, $columns, $options = null)
    {
        echo "    > create table $table ...";
        if ($this->db->schema->getTableSchema($table) === null) :
        	$time = microtime(true);
            $this->db->createCommand()->createTable($table, $columns, $options)->execute();
            foreach ($columns as $column => $type) {
                if ($type instanceof ColumnSchemaBuilder && $type->comment !== null) {
                    $this->db->createCommand()->addCommentOnColumn($table, $column, $type->comment)->execute();
                }
            }
            echo ' done (time: ' . sprintf('%.3f', microtime(true) - $time) . "s)\n";
        else :
            echo "table is exist\n";
	    endif;
    }
}