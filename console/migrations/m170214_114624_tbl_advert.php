<?php

use yii\db\Migration;

class m170214_114624_tbl_advert extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `advert` (
  `idadvert` int(11) NOT NULL,
  `name_book` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL,
  `fk_agent` mediumint(11) NOT NULL,
  `genre` varchar(40) DEFAULT NULL,
  `edition` varchar(40) DEFAULT NULL,
  `year_book` int(4) DEFAULT NULL,
  `town_book` varchar(40) DEFAULT NULL,
  `general_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(30) NOT NULL,
  `hot` int(1) NOT NULL,
  `recommend` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;        
        ");
    }

    public function down()
    {
        $this->dropTable("advert");

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
