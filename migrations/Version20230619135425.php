<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230619135425 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE module (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quiz (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, subject_id INT NOT NULL, ressources_id INT NOT NULL, INDEX IDX_A412FA92CB944F1A (student_id), INDEX IDX_A412FA9223EDC87 (subject_id), INDEX IDX_A412FA923C361826 (ressources_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quizmark (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, quiz_id INT NOT NULL, mark DOUBLE PRECISION NOT NULL, INDEX IDX_60213A7ACB944F1A (student_id), INDEX IDX_60213A7A853CD175 (quiz_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressources (id INT AUTO_INCREMENT NOT NULL, subject_id INT NOT NULL, student_id INT NOT NULL, type VARCHAR(30) DEFAULT NULL, link VARCHAR(255) DEFAULT NULL, INDEX IDX_6A2CD5C723EDC87 (subject_id), INDEX IDX_6A2CD5C7CB944F1A (student_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject (id INT AUTO_INCREMENT NOT NULL, module_id INT NOT NULL, name VARCHAR(50) NOT NULL, INDEX IDX_FBCE3E7AAFC2B591 (module_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA92CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA9223EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id)');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA923C361826 FOREIGN KEY (ressources_id) REFERENCES ressources (id)');
        $this->addSql('ALTER TABLE quizmark ADD CONSTRAINT FK_60213A7ACB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE quizmark ADD CONSTRAINT FK_60213A7A853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id)');
        $this->addSql('ALTER TABLE ressources ADD CONSTRAINT FK_6A2CD5C723EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id)');
        $this->addSql('ALTER TABLE ressources ADD CONSTRAINT FK_6A2CD5C7CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7AAFC2B591 FOREIGN KEY (module_id) REFERENCES module (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA92CB944F1A');
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA9223EDC87');
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA923C361826');
        $this->addSql('ALTER TABLE quizmark DROP FOREIGN KEY FK_60213A7ACB944F1A');
        $this->addSql('ALTER TABLE quizmark DROP FOREIGN KEY FK_60213A7A853CD175');
        $this->addSql('ALTER TABLE ressources DROP FOREIGN KEY FK_6A2CD5C723EDC87');
        $this->addSql('ALTER TABLE ressources DROP FOREIGN KEY FK_6A2CD5C7CB944F1A');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7AAFC2B591');
        $this->addSql('DROP TABLE module');
        $this->addSql('DROP TABLE quiz');
        $this->addSql('DROP TABLE quizmark');
        $this->addSql('DROP TABLE ressources');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE subject');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
