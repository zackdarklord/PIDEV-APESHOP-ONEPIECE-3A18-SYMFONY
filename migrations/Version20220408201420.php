<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408201420 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY sk_user2');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY sk_categorie');
        $this->addSql('ALTER TABLE avis CHANGE nomCategorie nomCategorie VARCHAR(30) DEFAULT NULL, CHANGE numeroUtilisateur numeroUtilisateur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF07006D47E FOREIGN KEY (nomCategorie) REFERENCES categoriea (nomCategorie)');
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY sk_user1');
        $this->addSql('ALTER TABLE commandes CHANGE numeroUtilisateur numeroUtilisateur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282C983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY sk_forum');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY commentaires_ibfk_1');
        $this->addSql('ALTER TABLE commentaires CHANGE numeroUtilisateur numeroUtilisateur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C492EFFDD0 FOREIGN KEY (idForum) REFERENCES forums (idForum)');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C4983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE factures DROP FOREIGN KEY sk_user3');
        $this->addSql('ALTER TABLE factures CHANGE numeroUtilisateur numeroUtilisateur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factures ADD CONSTRAINT FK_647590B983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY sk_produit');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY sk_nom');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY sk_user');
        $this->addSql('ALTER TABLE paniers CHANGE numeroProduit numeroProduit INT DEFAULT NULL, CHANGE numeroUtilisateur numeroUtilisateur INT DEFAULT NULL, CHANGE nomProduit nomProduit VARCHAR(30) DEFAULT NULL');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT FK_4899903647EC2102 FOREIGN KEY (numeroProduit) REFERENCES produits (numeroProduit)');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT FK_489990369FE4AD6F FOREIGN KEY (nomProduit) REFERENCES produits (nomProduit)');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT FK_48999036983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0983681BF');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF07006D47E');
        $this->addSql('ALTER TABLE avis CHANGE numeroUtilisateur numeroUtilisateur INT NOT NULL, CHANGE nomCategorie nomCategorie VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT sk_user2 FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT sk_categorie FOREIGN KEY (nomCategorie) REFERENCES categoriea (nomCategorie) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282C983681BF');
        $this->addSql('ALTER TABLE commandes CHANGE numeroUtilisateur numeroUtilisateur INT NOT NULL');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT sk_user1 FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C492EFFDD0');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C4983681BF');
        $this->addSql('ALTER TABLE commentaires CHANGE numeroUtilisateur numeroUtilisateur INT NOT NULL');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT sk_forum FOREIGN KEY (idForum) REFERENCES forums (idForum) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT commentaires_ibfk_1 FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE factures DROP FOREIGN KEY FK_647590B983681BF');
        $this->addSql('ALTER TABLE factures CHANGE numeroUtilisateur numeroUtilisateur INT NOT NULL');
        $this->addSql('ALTER TABLE factures ADD CONSTRAINT sk_user3 FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY FK_4899903647EC2102');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY FK_489990369FE4AD6F');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY FK_48999036983681BF');
        $this->addSql('ALTER TABLE paniers CHANGE numeroProduit numeroProduit INT NOT NULL, CHANGE nomProduit nomProduit VARCHAR(30) NOT NULL, CHANGE numeroUtilisateur numeroUtilisateur INT NOT NULL');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT sk_produit FOREIGN KEY (numeroProduit) REFERENCES produits (numeroProduit) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT sk_nom FOREIGN KEY (nomProduit) REFERENCES produits (nomProduit) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT sk_user FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
