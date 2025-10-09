<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20251009174507 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Criação da tabela profile';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE profile (id UUID NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN profile.id IS \'(DC2Type:uuid)\'');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE profile');
    }
}
