<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20251009170205 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Criação da tabela department';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE department (id UUID NOT NULL, name VARCHAR(60) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN department.id IS \'(DC2Type:uuid)\'');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE department');
    }
}
