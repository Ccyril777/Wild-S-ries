<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191201171518 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE season DROP FOREIGN KEY FK_F0E45BA93EB8070A');
        $this->addSql('DROP INDEX IDX_F0E45BA93EB8070A ON season');
        $this->addSql('ALTER TABLE season ADD programs_id INT NOT NULL, DROP program_id, DROP number, DROP year, DROP description');
        $this->addSql('ALTER TABLE season ADD CONSTRAINT FK_F0E45BA979AEC3C FOREIGN KEY (programs_id) REFERENCES program (id)');
        $this->addSql('CREATE INDEX IDX_F0E45BA979AEC3C ON season (programs_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE season DROP FOREIGN KEY FK_F0E45BA979AEC3C');
        $this->addSql('DROP INDEX IDX_F0E45BA979AEC3C ON season');
        $this->addSql('ALTER TABLE season ADD number INT NOT NULL, ADD year INT NOT NULL, ADD description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE programs_id program_id INT NOT NULL');
        $this->addSql('ALTER TABLE season ADD CONSTRAINT FK_F0E45BA93EB8070A FOREIGN KEY (program_id) REFERENCES program (id)');
        $this->addSql('CREATE INDEX IDX_F0E45BA93EB8070A ON season (program_id)');
    }
}
