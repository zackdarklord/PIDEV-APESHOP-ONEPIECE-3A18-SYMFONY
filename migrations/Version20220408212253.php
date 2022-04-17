<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408212253 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF07006D47E');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0983681BF');
        $this->addSql('DROP INDEX fk_8f91abf0983681bf ON avis');
        $this->addSql('CREATE INDEX sk_user2 ON avis (numeroUtilisateur)');
        $this->addSql('DROP INDEX fk_8f91abf07006d47e ON avis');
        $this->addSql('CREATE INDEX sk_categorie ON avis (nomCategorie)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF07006D47E FOREIGN KEY (nomCategorie) REFERENCES categoriea (nomCategorie)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282C983681BF');
        $this->addSql('DROP INDEX fk_35d4282c983681bf ON commandes');
        $this->addSql('CREATE INDEX sk_user1 ON commandes (numeroUtilisateur)');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282C983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C492EFFDD0');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C4983681BF');
        $this->addSql('DROP INDEX fk_d9bec0c4983681bf ON commentaires');
        $this->addSql('CREATE INDEX numeroUtilisateur ON commentaires (numeroUtilisateur)');
        $this->addSql('DROP INDEX fk_d9bec0c492effdd0 ON commentaires');
        $this->addSql('CREATE INDEX idForum ON commentaires (idForum)');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C492EFFDD0 FOREIGN KEY (idForum) REFERENCES forums (idForum)');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C4983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE factures DROP FOREIGN KEY FK_647590B983681BF');
        $this->addSql('DROP INDEX fk_647590b983681bf ON factures');
        $this->addSql('CREATE INDEX sk_user3 ON factures (numeroUtilisateur)');
        $this->addSql('ALTER TABLE factures ADD CONSTRAINT FK_647590B983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY FK_489990369FE4AD6F');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY FK_48999036983681BF');
        $this->addSql('DROP INDEX fk_489990369fe4ad6f ON paniers');
        $this->addSql('CREATE INDEX sk_nom ON paniers (nomProduit)');
        $this->addSql('DROP INDEX fk_48999036983681bf ON paniers');
        $this->addSql('CREATE INDEX sk_user ON paniers (numeroUtilisateur)');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT FK_489990369FE4AD6F FOREIGN KEY (nomProduit) REFERENCES produits (nomProduit)');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT FK_48999036983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0983681BF');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF07006D47E');
        $this->addSql('DROP INDEX sk_categorie ON avis');
        $this->addSql('CREATE INDEX FK_8F91ABF07006D47E ON avis (nomCategorie)');
        $this->addSql('DROP INDEX sk_user2 ON avis');
        $this->addSql('CREATE INDEX FK_8F91ABF0983681BF ON avis (numeroUtilisateur)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF07006D47E FOREIGN KEY (nomCategorie) REFERENCES categoriea (nomCategorie)');
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282C983681BF');
        $this->addSql('DROP INDEX sk_user1 ON commandes');
        $this->addSql('CREATE INDEX FK_35D4282C983681BF ON commandes (numeroUtilisateur)');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282C983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C492EFFDD0');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C4983681BF');
        $this->addSql('DROP INDEX numeroutilisateur ON commentaires');
        $this->addSql('CREATE INDEX FK_D9BEC0C4983681BF ON commentaires (numeroUtilisateur)');
        $this->addSql('DROP INDEX idforum ON commentaires');
        $this->addSql('CREATE INDEX FK_D9BEC0C492EFFDD0 ON commentaires (idForum)');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C492EFFDD0 FOREIGN KEY (idForum) REFERENCES forums (idForum)');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C4983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE factures DROP FOREIGN KEY FK_647590B983681BF');
        $this->addSql('DROP INDEX sk_user3 ON factures');
        $this->addSql('CREATE INDEX FK_647590B983681BF ON factures (numeroUtilisateur)');
        $this->addSql('ALTER TABLE factures ADD CONSTRAINT FK_647590B983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY FK_489990369FE4AD6F');
        $this->addSql('ALTER TABLE paniers DROP FOREIGN KEY FK_48999036983681BF');
        $this->addSql('DROP INDEX sk_nom ON paniers');
        $this->addSql('CREATE INDEX FK_489990369FE4AD6F ON paniers (nomProduit)');
        $this->addSql('DROP INDEX sk_user ON paniers');
        $this->addSql('CREATE INDEX FK_48999036983681BF ON paniers (numeroUtilisateur)');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT FK_489990369FE4AD6F FOREIGN KEY (nomProduit) REFERENCES produits (nomProduit)');
        $this->addSql('ALTER TABLE paniers ADD CONSTRAINT FK_48999036983681BF FOREIGN KEY (numeroUtilisateur) REFERENCES utilisateurs (numeroUtilisateurs)');
    }
}
