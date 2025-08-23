<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250823141933 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, project_type_id INT NOT NULL, title VARCHAR(255) NOT NULL, short_description LONGTEXT NOT NULL, slug VARCHAR(255) NOT NULL, main_picture_url VARCHAR(255) NOT NULL, ctx LONGTEXT NOT NULL, main_features JSON NOT NULL, challenges JSON NOT NULL, result LONGTEXT NOT NULL, repo_link VARCHAR(255) NOT NULL, doc_link VARCHAR(255) NOT NULL, demo_link VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL, pictures JSON NOT NULL, UNIQUE INDEX UNIQ_2FB3D0EE989D9B62 (slug), INDEX IDX_2FB3D0EE535280F6 (project_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_skill_tag (project_id INT NOT NULL, skill_tag_id INT NOT NULL, INDEX IDX_E1E63FBA166D1F9C (project_id), INDEX IDX_E1E63FBA95983705 (skill_tag_id), PRIMARY KEY(project_id, skill_tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill_tag (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name VARCHAR(80) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL, INDEX IDX_F0DA7A6D12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE535280F6 FOREIGN KEY (project_type_id) REFERENCES project_type (id)');
        $this->addSql('ALTER TABLE project_skill_tag ADD CONSTRAINT FK_E1E63FBA166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_skill_tag ADD CONSTRAINT FK_E1E63FBA95983705 FOREIGN KEY (skill_tag_id) REFERENCES skill_tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_tag ADD CONSTRAINT FK_F0DA7A6D12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE535280F6');
        $this->addSql('ALTER TABLE project_skill_tag DROP FOREIGN KEY FK_E1E63FBA166D1F9C');
        $this->addSql('ALTER TABLE project_skill_tag DROP FOREIGN KEY FK_E1E63FBA95983705');
        $this->addSql('ALTER TABLE skill_tag DROP FOREIGN KEY FK_F0DA7A6D12469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_skill_tag');
        $this->addSql('DROP TABLE project_type');
        $this->addSql('DROP TABLE skill_tag');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
