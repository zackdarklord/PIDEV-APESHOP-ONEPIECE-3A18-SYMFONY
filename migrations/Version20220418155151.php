<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220418155151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE login (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', numeroUtilisateurs INT DEFAULT NULL, INDEX IDX_7CE748A40485797 (numeroUtilisateurs), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748A40485797 FOREIGN KEY (numeroUtilisateurs) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY sk_name');
        $this->addSql('DROP INDEX sk_name ON paniers');
        $this->addSql('CREATE INDEX sk_nom ON paniers (nomProduit)');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT sk_name FOREIGN KEY (nomProduit) REFERENCES produits (nomProduit)');
        $this->addSql('DROP INDEX nomClient ON utilisateurs');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE login');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY FK_489990369FE4AD6F');
        $this->addSql('DROP INDEX sk_nom ON paniers');
        $this->addSql('CREATE INDEX sk_name ON paniers (nomProduit)');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT FK_489990369FE4AD6F FOREIGN KEY (nomProduit) REFERENCES produits (nomProduit)');
        $this->addSql('CREATE UNIQUE INDEX nomClient ON utilisateurs (nomClient)');
    }
}
