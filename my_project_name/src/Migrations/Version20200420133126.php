<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200420133126 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE appartement CHANGE calme calme INT DEFAULT NULL, CHANGE transport transport INT DEFAULT NULL, CHANGE balcon balcon TINYINT(1) DEFAULT NULL, CHANGE surfaccebalcon surfaccebalcon DOUBLE PRECISION DEFAULT NULL, CHANGE terrasse terrasse TINYINT(1) DEFAULT NULL, CHANGE surfaceterrasse surfaceterrasse DOUBLE PRECISION DEFAULT NULL, CHANGE cave cave TINYINT(1) DEFAULT NULL, CHANGE nbcave nbcave INT DEFAULT NULL, CHANGE parking parking TINYINT(1) DEFAULT NULL, CHANGE nbparking nbparking INT DEFAULT NULL, CHANGE ascenceur ascenceur TINYINT(1) DEFAULT NULL, CHANGE pareno pareno TINYINT(1) DEFAULT NULL, CHANGE facade facade TINYINT(1) DEFAULT NULL, CHANGE luminosite luminosite INT DEFAULT NULL, CHANGE qualite qualite INT DEFAULT NULL, CHANGE etat etat INT DEFAULT NULL, CHANGE annee annee INT DEFAULT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE vue vue TINYINT(1) DEFAULT NULL, CHANGE ref ref TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE maison CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE region region VARCHAR(70) DEFAULT NULL, CHANGE annee annee INT DEFAULT NULL, CHANGE ref ref TINYINT(1) DEFAULT NULL, CHANGE piscine piscine TINYINT(1) DEFAULT NULL, CHANGE sous sous TINYINT(1) DEFAULT NULL, CHANGE sousur sousur DOUBLE PRECISION DEFAULT NULL, CHANGE park park TINYINT(1) DEFAULT NULL, CHANGE nbpark nbpark INT DEFAULT NULL, CHANGE mur mur TINYINT(1) DEFAULT NULL, CHANGE nbmur nbmur INT DEFAULT NULL, CHANGE bat bat TINYINT(1) DEFAULT NULL, CHANGE nbbat nbbat INT DEFAULT NULL, CHANGE vue vue TINYINT(1) DEFAULT NULL, CHANGE eaux eaux TINYINT(1) DEFAULT NULL, CHANGE etat etat INT DEFAULT NULL, CHANGE qualite qualite INT DEFAULT NULL, CHANGE luminosite luminosite INT DEFAULT NULL, CHANGE calme calme INT DEFAULT NULL, CHANGE transport transport INT DEFAULT NULL, CHANGE energie energie INT DEFAULT NULL, CHANGE toiture toiture INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD api_token VARCHAR(255) DEFAULT NULL, CHANGE roles roles JSON NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6497BA2F5EB ON user (api_token)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE appartement CHANGE calme calme INT DEFAULT NULL, CHANGE transport transport INT DEFAULT NULL, CHANGE balcon balcon TINYINT(1) DEFAULT \'NULL\', CHANGE surfaccebalcon surfaccebalcon DOUBLE PRECISION DEFAULT \'NULL\', CHANGE terrasse terrasse TINYINT(1) DEFAULT \'NULL\', CHANGE surfaceterrasse surfaceterrasse DOUBLE PRECISION DEFAULT \'NULL\', CHANGE cave cave TINYINT(1) DEFAULT \'NULL\', CHANGE nbcave nbcave INT DEFAULT NULL, CHANGE parking parking TINYINT(1) DEFAULT \'NULL\', CHANGE nbparking nbparking INT DEFAULT NULL, CHANGE ascenceur ascenceur TINYINT(1) DEFAULT \'NULL\', CHANGE pareno pareno TINYINT(1) DEFAULT \'NULL\', CHANGE facade facade TINYINT(1) DEFAULT \'NULL\', CHANGE luminosite luminosite INT DEFAULT NULL, CHANGE qualite qualite INT DEFAULT NULL, CHANGE etat etat INT DEFAULT NULL, CHANGE annee annee INT DEFAULT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT \'NULL\', CHANGE vue vue TINYINT(1) DEFAULT \'NULL\', CHANGE ref ref TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE maison CHANGE prix prix DOUBLE PRECISION DEFAULT \'NULL\', CHANGE region region VARCHAR(70) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE annee annee INT DEFAULT NULL, CHANGE ref ref TINYINT(1) DEFAULT \'NULL\', CHANGE piscine piscine TINYINT(1) DEFAULT \'NULL\', CHANGE sous sous TINYINT(1) DEFAULT \'NULL\', CHANGE sousur sousur DOUBLE PRECISION DEFAULT \'NULL\', CHANGE park park TINYINT(1) DEFAULT \'NULL\', CHANGE nbpark nbpark INT DEFAULT NULL, CHANGE mur mur TINYINT(1) DEFAULT \'NULL\', CHANGE nbmur nbmur INT DEFAULT NULL, CHANGE bat bat TINYINT(1) DEFAULT \'NULL\', CHANGE nbbat nbbat INT DEFAULT NULL, CHANGE vue vue TINYINT(1) DEFAULT \'NULL\', CHANGE eaux eaux TINYINT(1) DEFAULT \'NULL\', CHANGE etat etat INT DEFAULT NULL, CHANGE qualite qualite INT DEFAULT NULL, CHANGE luminosite luminosite INT DEFAULT NULL, CHANGE calme calme INT DEFAULT NULL, CHANGE transport transport INT DEFAULT NULL, CHANGE energie energie INT DEFAULT NULL, CHANGE toiture toiture INT DEFAULT NULL');
        $this->addSql('DROP INDEX UNIQ_8D93D6497BA2F5EB ON user');
        $this->addSql('ALTER TABLE user DROP api_token, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
