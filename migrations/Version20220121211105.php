<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220121211105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note ADD synergie DOUBLE PRECISION NOT NULL, ADD ressource_materiel DOUBLE PRECISION NOT NULL, DROP environnement, DROP cout_ressource, DROP poid_ressource');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note ADD environnement DOUBLE PRECISION NOT NULL, ADD cout_ressource DOUBLE PRECISION NOT NULL, ADD poid_ressource DOUBLE PRECISION NOT NULL, DROP synergie, DROP ressource_materiel');
    }
}
