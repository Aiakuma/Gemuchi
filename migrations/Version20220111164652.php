<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220111164652 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, mail VARCHAR(255) NOT NULL, pseudo VARCHAR(45) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE consoles (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games (id INT AUTO_INCREMENT NOT NULL, notes_id INT DEFAULT NULL, tests_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, price NUMERIC(10, 0) NOT NULL, year INT NOT NULL, authors VARCHAR(255) NOT NULL, resume LONGTEXT NOT NULL, content LONGTEXT NOT NULL, picture VARCHAR(1000) NOT NULL, UNIQUE INDEX UNIQ_FF232B31FC56F556 (notes_id), UNIQUE INDEX UNIQ_FF232B31F5D80971 (tests_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games_categories (games_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_9AD6626B97FFC673 (games_id), INDEX IDX_9AD6626BA21214B7 (categories_id), PRIMARY KEY(games_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games_consoles (games_id INT NOT NULL, consoles_id INT NOT NULL, INDEX IDX_903DBD4197FFC673 (games_id), INDEX IDX_903DBD4187B3CA2D (consoles_id), PRIMARY KEY(games_id, consoles_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notes (id INT AUTO_INCREMENT NOT NULL, musique DOUBLE PRECISION NOT NULL, absence_bug DOUBLE PRECISION NOT NULL, temps_chargement DOUBLE PRECISION NOT NULL, bruitage DOUBLE PRECISION NOT NULL, originalite DOUBLE PRECISION NOT NULL, rendement_horaire DOUBLE PRECISION NOT NULL, phase_jeu DOUBLE PRECISION NOT NULL, charge_emotionnelle DOUBLE PRECISION NOT NULL, narration DOUBLE PRECISION NOT NULL, pertinence_parti_pris DOUBLE PRECISION NOT NULL, diversite_nuance DOUBLE PRECISION NOT NULL, environnement DOUBLE PRECISION NOT NULL, gestion_difficulte DOUBLE PRECISION NOT NULL, efficacite_interface DOUBLE PRECISION NOT NULL, cout_ressource DOUBLE PRECISION NOT NULL, poid_ressource DOUBLE PRECISION NOT NULL, disponibilite DOUBLE PRECISION NOT NULL, message_autocritique DOUBLE PRECISION NOT NULL, integration_message DOUBLE PRECISION NOT NULL, coup_de_coeur DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tests (id INT AUTO_INCREMENT NOT NULL, son LONGTEXT NOT NULL, code LONGTEXT NOT NULL, gameplay LONGTEXT NOT NULL, rythme LONGTEXT NOT NULL, scenario LONGTEXT NOT NULL, graphisme LONGTEXT NOT NULL, accessibilite LONGTEXT NOT NULL, disponibilite LONGTEXT NOT NULL, ouverture_reflexion LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B31FC56F556 FOREIGN KEY (notes_id) REFERENCES notes (id)');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B31F5D80971 FOREIGN KEY (tests_id) REFERENCES tests (id)');
        $this->addSql('ALTER TABLE games_categories ADD CONSTRAINT FK_9AD6626B97FFC673 FOREIGN KEY (games_id) REFERENCES games (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE games_categories ADD CONSTRAINT FK_9AD6626BA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE games_consoles ADD CONSTRAINT FK_903DBD4197FFC673 FOREIGN KEY (games_id) REFERENCES games (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE games_consoles ADD CONSTRAINT FK_903DBD4187B3CA2D FOREIGN KEY (consoles_id) REFERENCES consoles (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games_categories DROP FOREIGN KEY FK_9AD6626BA21214B7');
        $this->addSql('ALTER TABLE games_consoles DROP FOREIGN KEY FK_903DBD4187B3CA2D');
        $this->addSql('ALTER TABLE games_categories DROP FOREIGN KEY FK_9AD6626B97FFC673');
        $this->addSql('ALTER TABLE games_consoles DROP FOREIGN KEY FK_903DBD4197FFC673');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31FC56F556');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31F5D80971');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE consoles');
        $this->addSql('DROP TABLE games');
        $this->addSql('DROP TABLE games_categories');
        $this->addSql('DROP TABLE games_consoles');
        $this->addSql('DROP TABLE notes');
        $this->addSql('DROP TABLE tests');
    }
}
