<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210708083055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appointments (id INT AUTO_INCREMENT NOT NULL, patient_id_id INT DEFAULT NULL, start_time DATETIME NOT NULL, end_time DATETIME NOT NULL, INDEX IDX_6A41727AEA724598 (patient_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patients (id INT AUTO_INCREMENT NOT NULL, last_name VARCHAR(50) NOT NULL, first_name VARCHAR(50) NOT NULL, birth_date DATE NOT NULL, email VARCHAR(100) NOT NULL, vitalcard_number VARCHAR(11) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appointments ADD CONSTRAINT FK_6A41727AEA724598 FOREIGN KEY (patient_id_id) REFERENCES patients (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointments DROP FOREIGN KEY FK_6A41727AEA724598');
        $this->addSql('DROP TABLE appointments');
        $this->addSql('DROP TABLE patients');
    }
}
