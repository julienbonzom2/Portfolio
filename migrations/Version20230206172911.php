<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230206172911 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE step ADD month_begin INT NOT NULL, ADD year_begin INT NOT NULL, ADD month_end INT NOT NULL, ADD year_end INT NOT NULL, DROP monthbegin, DROP yearbegin, DROP monthend, DROP yearend');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE step ADD monthbegin INT NOT NULL, ADD yearbegin INT NOT NULL, ADD monthend INT NOT NULL, ADD yearend INT NOT NULL, DROP month_begin, DROP year_begin, DROP month_end, DROP year_end');
    }
}
