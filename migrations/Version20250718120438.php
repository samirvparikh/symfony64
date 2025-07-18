<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250718120438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(191) NOT NULL, middle_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) NOT NULL, dob DATE NOT NULL, gender VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, cell_phone VARCHAR(255) DEFAULT NULL, responsible_party VARCHAR(255) DEFAULT NULL, primary_dentist VARCHAR(255) DEFAULT NULL, fee_schedule VARCHAR(255) DEFAULT NULL, preferred_clinic VARCHAR(255) DEFAULT NULL, created_by BIGINT DEFAULT NULL, updated_by BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE patient');
    }
}
