<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200417033236 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE appartement (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(5) NOT NULL, surface DOUBLE PRECISION NOT NULL, nbpieces INT NOT NULL, calme INT DEFAULT NULL, transport INT DEFAULT NULL, balcon TINYINT(1) DEFAULT NULL, surfaccebalcon DOUBLE PRECISION DEFAULT NULL, terrasse TINYINT(1) DEFAULT NULL, surfaceterrasse DOUBLE PRECISION DEFAULT NULL, cave TINYINT(1) DEFAULT NULL, nbcave INT DEFAULT NULL, parking TINYINT(1) DEFAULT NULL, nbparking INT DEFAULT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, region VARCHAR(70) NOT NULL, nbchambres INT NOT NULL, nbetages INT NOT NULL, etage INT NOT NULL, ascenceur TINYINT(1) DEFAULT NULL, pareno TINYINT(1) DEFAULT NULL, facade TINYINT(1) DEFAULT NULL, luminosite INT DEFAULT NULL, qualite INT DEFAULT NULL, etat INT DEFAULT NULL, annee INT DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, nbsalleb INT NOT NULL, vue TINYINT(1) DEFAULT NULL, ref TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE maison (id INT AUTO_INCREMENT NOT NULL, surface DOUBLE PRECISION NOT NULL, nbchambre INT NOT NULL, nbpiece INT NOT NULL, nbsalleb INT NOT NULL, surfaceh DOUBLE PRECISION NOT NULL, prix DOUBLE PRECISION DEFAULT NULL, ville VARCHAR(70) NOT NULL, postal VARCHAR(5) NOT NULL, region VARCHAR(70) DEFAULT NULL, annee INT DEFAULT NULL, niveau INT NOT NULL, ref TINYINT(1) DEFAULT NULL, adresse LONGTEXT DEFAULT NULL, piscine TINYINT(1) DEFAULT NULL, sous TINYINT(1) DEFAULT NULL, sousur DOUBLE PRECISION DEFAULT NULL, park TINYINT(1) DEFAULT NULL, nbpark INT DEFAULT NULL, mur TINYINT(1) DEFAULT NULL, nbmur INT DEFAULT NULL, bat TINYINT(1) DEFAULT NULL, nbbat INT DEFAULT NULL, vue TINYINT(1) DEFAULT NULL, eaux TINYINT(1) DEFAULT NULL, etat INT DEFAULT NULL, qualite INT DEFAULT NULL, luminosite INT DEFAULT NULL, calme INT DEFAULT NULL, transport INT DEFAULT NULL, energie INT DEFAULT NULL, toiture INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(50) NOT NULL, tel VARCHAR(10) NOT NULL, civilite VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, tel VARCHAR(20) NOT NULL, civilite VARCHAR(10) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE appartement');
        $this->addSql('DROP TABLE maison');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE user');
    }
}
