<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191201172802 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE episodes ADD seasons_id INT NOT NULL');
        $this->addSql('ALTER TABLE episodes ADD CONSTRAINT FK_7DD55EDD16EB9F66 FOREIGN KEY (seasons_id) REFERENCES season (id)');
        $this->addSql('CREATE INDEX IDX_7DD55EDD16EB9F66 ON episodes (seasons_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE episodes DROP FOREIGN KEY FK_7DD55EDD16EB9F66');
        $this->addSql('DROP INDEX IDX_7DD55EDD16EB9F66 ON episodes');
        $this->addSql('ALTER TABLE episodes DROP seasons_id');
    }
}
