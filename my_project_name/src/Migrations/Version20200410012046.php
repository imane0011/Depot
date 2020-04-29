<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200410012046 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE maison ADD piscine TINYINT(1) DEFAULT NULL, ADD sous TINYINT(1) DEFAULT NULL, ADD sousur DOUBLE PRECISION DEFAULT NULL, ADD park TINYINT(1) DEFAULT NULL, ADD nbpark INT DEFAULT NULL, ADD mur TINYINT(1) DEFAULT NULL, ADD nbmur INT DEFAULT NULL, ADD bat TINYINT(1) DEFAULT NULL, ADD nbbat INT DEFAULT NULL, ADD vue TINYINT(1) DEFAULT NULL, ADD eaux TINYINT(1) DEFAULT NULL, ADD etat INT DEFAULT NULL, ADD qualite INT DEFAULT NULL, ADD luminosite INT DEFAULT NULL, ADD calme INT DEFAULT NULL, ADD transport INT DEFAULT NULL, ADD energie INT DEFAULT NULL, ADD toiture INT DEFAULT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE region region VARCHAR(70) DEFAULT NULL, CHANGE annee annee INT DEFAULT NULL, CHANGE ref ref TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE maison DROP piscine, DROP sous, DROP sousur, DROP park, DROP nbpark, DROP mur, DROP nbmur, DROP bat, DROP nbbat, DROP vue, DROP eaux, DROP etat, DROP qualite, DROP luminosite, DROP calme, DROP transport, DROP energie, DROP toiture, CHANGE prix prix DOUBLE PRECISION DEFAULT \'NULL\', CHANGE region region VARCHAR(70) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE annee annee INT DEFAULT NULL, CHANGE ref ref TINYINT(1) DEFAULT \'NULL\'');
    }
}
