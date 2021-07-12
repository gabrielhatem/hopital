<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210709081329 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointments DROP FOREIGN KEY FK_6A41727AEA724598');
        $this->addSql('DROP INDEX IDX_6A41727AEA724598 ON appointments');
        $this->addSql('ALTER TABLE appointments ADD patients_id INT NOT NULL, DROP patient_id_id');
        $this->addSql('ALTER TABLE appointments ADD CONSTRAINT FK_6A41727ACEC3FD2F FOREIGN KEY (patients_id) REFERENCES patients (id)');
        $this->addSql('CREATE INDEX IDX_6A41727ACEC3FD2F ON appointments (patients_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointments DROP FOREIGN KEY FK_6A41727ACEC3FD2F');
        $this->addSql('DROP INDEX IDX_6A41727ACEC3FD2F ON appointments');
        $this->addSql('ALTER TABLE appointments ADD patient_id_id INT DEFAULT NULL, DROP patients_id');
        $this->addSql('ALTER TABLE appointments ADD CONSTRAINT FK_6A41727AEA724598 FOREIGN KEY (patient_id_id) REFERENCES patients (id)');
        $this->addSql('CREATE INDEX IDX_6A41727AEA724598 ON appointments (patient_id_id)');
    }
}
