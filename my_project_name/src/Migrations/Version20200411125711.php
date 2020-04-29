<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200411125711 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE appartement (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(5) NOT NULL, surface DOUBLE PRECISION NOT NULL, nbpieces INT NOT NULL, calme INT DEFAULT NULL, transport INT DEFAULT NULL, balcon TINYINT(1) DEFAULT NULL, surfaccebalcon DOUBLE PRECISION DEFAULT NULL, terrasse TINYINT(1) DEFAULT NULL, surfaceterrasse DOUBLE PRECISION DEFAULT NULL, cave TINYINT(1) DEFAULT NULL, nbcave INT DEFAULT NULL, parking TINYINT(1) DEFAULT NULL, nbparking INT DEFAULT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, region VARCHAR(70) NOT NULL, nbchambres INT NOT NULL, nbetages INT NOT NULL, etage INT NOT NULL, ascenceur TINYINT(1) DEFAULT NULL, pareno TINYINT(1) DEFAULT NULL, facade TINYINT(1) DEFAULT NULL, luminosite INT DEFAULT NULL, qualite INT DEFAULT NULL, etat INT DEFAULT NULL, annee INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE maison CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE region region VARCHAR(70) DEFAULT NULL, CHANGE annee annee INT DEFAULT NULL, CHANGE ref ref TINYINT(1) DEFAULT NULL, CHANGE piscine piscine TINYINT(1) DEFAULT NULL, CHANGE sous sous TINYINT(1) DEFAULT NULL, CHANGE sousur sousur DOUBLE PRECISION DEFAULT NULL, CHANGE park park TINYINT(1) DEFAULT NULL, CHANGE nbpark nbpark INT DEFAULT NULL, CHANGE mur mur TINYINT(1) DEFAULT NULL, CHANGE nbmur nbmur INT DEFAULT NULL, CHANGE bat bat TINYINT(1) DEFAULT NULL, CHANGE nbbat nbbat INT DEFAULT NULL, CHANGE vue vue TINYINT(1) DEFAULT NULL, CHANGE eaux eaux TINYINT(1) DEFAULT NULL, CHANGE etat etat INT DEFAULT NULL, CHANGE qualite qualite INT DEFAULT NULL, CHANGE luminosite luminosite INT DEFAULT NULL, CHANGE calme calme INT DEFAULT NULL, CHANGE transport transport INT DEFAULT NULL, CHANGE energie energie INT DEFAULT NULL, CHANGE toiture toiture INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE appartement');
        $this->addSql('ALTER TABLE maison CHANGE prix prix DOUBLE PRECISION DEFAULT \'NULL\', CHANGE region region VARCHAR(70) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE annee annee INT DEFAULT NULL, CHANGE ref ref TINYINT(1) DEFAULT \'NULL\', CHANGE piscine piscine TINYINT(1) DEFAULT \'NULL\', CHANGE sous sous TINYINT(1) DEFAULT \'NULL\', CHANGE sousur sousur DOUBLE PRECISION DEFAULT \'NULL\', CHANGE park park TINYINT(1) DEFAULT \'NULL\', CHANGE nbpark nbpark INT DEFAULT NULL, CHANGE mur mur TINYINT(1) DEFAULT \'NULL\', CHANGE nbmur nbmur INT DEFAULT NULL, CHANGE bat bat TINYINT(1) DEFAULT \'NULL\', CHANGE nbbat nbbat INT DEFAULT NULL, CHANGE vue vue TINYINT(1) DEFAULT \'NULL\', CHANGE eaux eaux TINYINT(1) DEFAULT \'NULL\', CHANGE etat etat INT DEFAULT NULL, CHANGE qualite qualite INT DEFAULT NULL, CHANGE luminosite luminosite INT DEFAULT NULL, CHANGE calme calme INT DEFAULT NULL, CHANGE transport transport INT DEFAULT NULL, CHANGE energie energie INT DEFAULT NULL, CHANGE toiture toiture INT DEFAULT NULL');
    }
}
