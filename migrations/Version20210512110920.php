<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210512110920 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE immobilier_user (immobilier_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_12E8B0E45C7B99A9 (immobilier_id), INDEX IDX_12E8B0E4A76ED395 (user_id), PRIMARY KEY(immobilier_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE immobilier_user ADD CONSTRAINT FK_12E8B0E45C7B99A9 FOREIGN KEY (immobilier_id) REFERENCES immobilier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE immobilier_user ADD CONSTRAINT FK_12E8B0E4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE immobilier_user');
    }
}
