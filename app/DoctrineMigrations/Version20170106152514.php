<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170106152514 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE time_history (id INT AUTO_INCREMENT NOT NULL, quest INT DEFAULT NULL, visit INT DEFAULT NULL, open DATETIME NOT NULL, phone VARCHAR(255) NOT NULL, price INT NOT NULL, count INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_733DD12D4317F817 (quest), INDEX IDX_733DD12D437EE939 (visit), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE time_history ADD CONSTRAINT FK_733DD12D4317F817 FOREIGN KEY (quest) REFERENCES quest (id)');
        $this->addSql('ALTER TABLE time_history ADD CONSTRAINT FK_733DD12D437EE939 FOREIGN KEY (visit) REFERENCES visit (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE time_history');
    }
}
