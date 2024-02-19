<?php
    use app\core\Application;

    class m0001_initial
    {
        public function up()
        {
            $db = Application::$app->db;
            $SQL = "
                CREATE TABLE users(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    firstName VARCHAR(255) NOT NULL,
                    lastName VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    status TINYINT NOT NULL, 
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=INNODB;
                ";
                $db->pdo->exec($SQL);
        }

        public function down()
        {
            $db = Application::$app->db;
            $SQL = "DROP TABLE users;";
            $db->pdo->exec($SQL);
        }
    }