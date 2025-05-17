<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250516134223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            CREATE TABLE category (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , updated_at DATETIME DEFAULT NULL)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE language (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(100) NOT NULL, code VARCHAR(10) NOT NULL, is_active BOOLEAN NOT NULL)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE reply (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_relation_id INTEGER NOT NULL, topic_id INTEGER NOT NULL, content CLOB NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , updated_at DATETIME DEFAULT NULL, is_approved BOOLEAN NOT NULL, CONSTRAINT FK_FDA8C6E09B4D58CE FOREIGN KEY (user_relation_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_FDA8C6E01F55203D FOREIGN KEY (topic_id) REFERENCES topic (id) NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_FDA8C6E09B4D58CE ON reply (user_relation_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_FDA8C6E01F55203D ON reply (topic_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE topic (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_relation_id INTEGER NOT NULL, category_id INTEGER NOT NULL, language_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL, content CLOB NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , updated_at DATETIME DEFAULT NULL, is_locked BOOLEAN NOT NULL, views INTEGER NOT NULL, CONSTRAINT FK_9D40DE1B9B4D58CE FOREIGN KEY (user_relation_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_9D40DE1B12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_9D40DE1B82F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id) NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_9D40DE1B9B4D58CE ON topic (user_relation_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_9D40DE1B12469DE2 ON topic (category_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_9D40DE1B82F1BAF4 ON topic (language_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE "user" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
            , password VARCHAR(255) NOT NULL, first_name VARCHAR(100) DEFAULT NULL, last_name VARCHAR(100) DEFAULT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , avatar VARCHAR(255) DEFAULT NULL, is_active BOOLEAN NOT NULL)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON "user" (email)
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DROP TABLE category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE language
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reply
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE topic
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE "user"
        SQL);
    }
}
