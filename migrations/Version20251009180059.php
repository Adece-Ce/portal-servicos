<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20251009180059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Criação da tabela system';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE system (id UUID NOT NULL, name VARCHAR(100) NOT NULL, url VARCHAR(255) DEFAULT NULL, icon VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN system.id IS \'(DC2Type:uuid)\'');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE system');
    }
}
