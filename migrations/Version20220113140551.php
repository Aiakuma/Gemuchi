<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220113140551 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE console (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, note_id INT DEFAULT NULL, test_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, price NUMERIC(10, 0) NOT NULL, year INT NOT NULL, author VARCHAR(255) NOT NULL, resume LONGTEXT NOT NULL, content LONGTEXT NOT NULL, picture VARCHAR(1000) NOT NULL, UNIQUE INDEX UNIQ_232B318C26ED0855 (note_id), UNIQUE INDEX UNIQ_232B318C1E5D0459 (test_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game_category (game_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_AD08E6E7E48FD905 (game_id), INDEX IDX_AD08E6E712469DE2 (category_id), PRIMARY KEY(game_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game_console (game_id INT NOT NULL, console_id INT NOT NULL, INDEX IDX_A3C1B099E48FD905 (game_id), INDEX IDX_A3C1B09972F9DD9F (console_id), PRIMARY KEY(game_id, console_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, musique DOUBLE PRECISION NOT NULL, absence_bug DOUBLE PRECISION NOT NULL, temps_chargement DOUBLE PRECISION NOT NULL, bruitage DOUBLE PRECISION NOT NULL, originalite DOUBLE PRECISION NOT NULL, rendement_horaire DOUBLE PRECISION NOT NULL, phase_jeu DOUBLE PRECISION NOT NULL, charge_emotionnelle DOUBLE PRECISION NOT NULL, narration DOUBLE PRECISION NOT NULL, pertinence_parti_pris DOUBLE PRECISION NOT NULL, diversite_nuance DOUBLE PRECISION NOT NULL, environnement DOUBLE PRECISION NOT NULL, gestion_difficulte DOUBLE PRECISION NOT NULL, efficacite_interface DOUBLE PRECISION NOT NULL, cout_ressource DOUBLE PRECISION NOT NULL, poid_ressource DOUBLE PRECISION NOT NULL, disponibilite DOUBLE PRECISION NOT NULL, message_autocritique DOUBLE PRECISION NOT NULL, integration_message DOUBLE PRECISION NOT NULL, coup_de_coeur DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, son LONGTEXT NOT NULL, code LONGTEXT NOT NULL, gameplay LONGTEXT NOT NULL, rythme LONGTEXT NOT NULL, scenario LONGTEXT NOT NULL, graphisme LONGTEXT NOT NULL, accessibilite LONGTEXT NOT NULL, disponibilite LONGTEXT NOT NULL, ouverture_reflexion LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, pseudo VARCHAR(45) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C26ED0855 FOREIGN KEY (note_id) REFERENCES note (id)');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE game_category ADD CONSTRAINT FK_AD08E6E7E48FD905 FOREIGN KEY (game_id) REFERENCES game (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game_category ADD CONSTRAINT FK_AD08E6E712469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game_console ADD CONSTRAINT FK_A3C1B099E48FD905 FOREIGN KEY (game_id) REFERENCES game (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game_console ADD CONSTRAINT FK_A3C1B09972F9DD9F FOREIGN KEY (console_id) REFERENCES console (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game_category DROP FOREIGN KEY FK_AD08E6E712469DE2');
        $this->addSql('ALTER TABLE game_console DROP FOREIGN KEY FK_A3C1B09972F9DD9F');
        $this->addSql('ALTER TABLE game_category DROP FOREIGN KEY FK_AD08E6E7E48FD905');
        $this->addSql('ALTER TABLE game_console DROP FOREIGN KEY FK_A3C1B099E48FD905');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318C26ED0855');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318C1E5D0459');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE console');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE game_category');
        $this->addSql('DROP TABLE game_console');
        $this->addSql('DROP TABLE note');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE user');
    }
}
