<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version20250516141405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            CREATE TABLE reset_password_request (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , expires_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_7CE748AA76ED395 ON reset_password_request (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TEMPORARY TABLE __temp__topic AS SELECT id, user_relation_id, category_id, title, content, created_at, updated_at, is_locked, views FROM topic
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE topic
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE topic (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_relation_id INTEGER NOT NULL, category_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL, content CLOB NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , updated_at DATETIME DEFAULT NULL, is_locked BOOLEAN NOT NULL, views INTEGER NOT NULL, CONSTRAINT FK_9D40DE1B9B4D58CE FOREIGN KEY (user_relation_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_9D40DE1B12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            INSERT INTO topic (id, user_relation_id, category_id, title, content, created_at, updated_at, is_locked, views) SELECT id, user_relation_id, category_id, title, content, created_at, updated_at, is_locked, views FROM __temp__topic
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE __temp__topic
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_9D40DE1B12469DE2 ON topic (category_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_9D40DE1B9B4D58CE ON topic (user_relation_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user ADD COLUMN is_verified BOOLEAN NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DROP TABLE reset_password_request
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TEMPORARY TABLE __temp__topic AS SELECT id, user_relation_id, category_id, title, content, created_at, updated_at, is_locked, views FROM topic
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE topic
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE topic (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_relation_id INTEGER NOT NULL, category_id INTEGER NOT NULL, language_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL, content CLOB NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , updated_at DATETIME DEFAULT NULL, is_locked BOOLEAN NOT NULL, views INTEGER NOT NULL, CONSTRAINT FK_9D40DE1B9B4D58CE FOREIGN KEY (user_relation_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_9D40DE1B12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_9D40DE1B82F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            INSERT INTO topic (id, user_relation_id, category_id, title, content, created_at, updated_at, is_locked, views) SELECT id, user_relation_id, category_id, title, content, created_at, updated_at, is_locked, views FROM __temp__topic
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE __temp__topic
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
            CREATE TEMPORARY TABLE __temp__user AS SELECT id, email, roles, password, first_name, last_name, created_at, avatar, is_active FROM "user"
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE "user"
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE "user" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
            , password VARCHAR(255) NOT NULL, first_name VARCHAR(100) DEFAULT NULL, last_name VARCHAR(100) DEFAULT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , avatar VARCHAR(255) DEFAULT NULL, is_active BOOLEAN NOT NULL)
        SQL);
        $this->addSql(<<<'SQL'
            INSERT INTO "user" (id, email, roles, password, first_name, last_name, created_at, avatar, is_active) SELECT id, email, roles, password, first_name, last_name, created_at, avatar, is_active FROM __temp__user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE __temp__user
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON "user" (email)
        SQL);
    }
}
