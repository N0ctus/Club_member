<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210614220735 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competitions (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competitions_members (competitions_id INT NOT NULL, members_id INT NOT NULL, INDEX IDX_645C791A14B3F5BE (competitions_id), INDEX IDX_645C791ABD01F5ED (members_id), PRIMARY KEY(competitions_id, members_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE members (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, licence_n INT NOT NULL, age INT NOT NULL, weight INT DEFAULT NULL, belt VARCHAR(255) NOT NULL, phone INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE competitions_members ADD CONSTRAINT FK_645C791A14B3F5BE FOREIGN KEY (competitions_id) REFERENCES competitions (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competitions_members ADD CONSTRAINT FK_645C791ABD01F5ED FOREIGN KEY (members_id) REFERENCES members (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competitions_members DROP FOREIGN KEY FK_645C791A14B3F5BE');
        $this->addSql('ALTER TABLE competitions_members DROP FOREIGN KEY FK_645C791ABD01F5ED');
        $this->addSql('DROP TABLE competitions');
        $this->addSql('DROP TABLE competitions_members');
        $this->addSql('DROP TABLE members');
    }
}
