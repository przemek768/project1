<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230315184636 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users CHANGE study_group_id id_study_group INT NOT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E92AA8D9D2 FOREIGN KEY (id_study_group) REFERENCES `group` (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E92AA8D9D2 ON users (id_study_group)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E92AA8D9D2');
        $this->addSql('DROP INDEX IDX_1483A5E92AA8D9D2 ON users');
        $this->addSql('ALTER TABLE users CHANGE id_study_group study_group_id INT NOT NULL');
    }
}
