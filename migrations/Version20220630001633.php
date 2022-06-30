<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220630001633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, blood_type_id INT DEFAULT NULL, etnic_id INT DEFAULT NULL, ocupation_id INT DEFAULT NULL, state_id INT DEFAULT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, phone_number VARCHAR(100) DEFAULT NULL, mobil_number VARCHAR(100) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, address VARCHAR(255) NOT NULL, INDEX IDX_1ADAD7EB7AEA5732 (blood_type_id), INDEX IDX_1ADAD7EBF341BA57 (etnic_id), INDEX IDX_1ADAD7EB7AE03E27 (ocupation_id), INDEX IDX_1ADAD7EB5D83CC1 (state_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB7AEA5732 FOREIGN KEY (blood_type_id) REFERENCES blood_type (id)');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EBF341BA57 FOREIGN KEY (etnic_id) REFERENCES etnic (id)');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB7AE03E27 FOREIGN KEY (ocupation_id) REFERENCES ocup (id)');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB5D83CC1 FOREIGN KEY (state_id) REFERENCES state (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE patient');
    }
}
