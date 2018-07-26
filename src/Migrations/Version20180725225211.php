<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180725225211 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cast (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(55) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cast_movie (cast_id INT NOT NULL, movie_id INT NOT NULL, INDEX IDX_8E1E9FF927B5E40F (cast_id), INDEX IDX_8E1E9FF98F93B6FC (movie_id), PRIMARY KEY(cast_id, movie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE director (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE director_movie (director_id INT NOT NULL, movie_id INT NOT NULL, INDEX IDX_E7596DBD899FB366 (director_id), INDEX IDX_E7596DBD8F93B6FC (movie_id), PRIMARY KEY(director_id, movie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gallery (id INT AUTO_INCREMENT NOT NULL, movie_id INT DEFAULT NULL, title VARCHAR(50) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, thumbnail_url VARCHAR(255) DEFAULT NULL, gallery_id VARCHAR(255) DEFAULT NULL, INDEX IDX_472B783A8F93B6FC (movie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre_movie (genre_id INT NOT NULL, movie_id INT NOT NULL, INDEX IDX_A058EDAA4296D31F (genre_id), INDEX IDX_A058EDAA8F93B6FC (movie_id), PRIMARY KEY(genre_id, movie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, movie_id INT NOT NULL, url VARCHAR(255) NOT NULL, height INT DEFAULT NULL, width INT DEFAULT NULL, type VARCHAR(50) DEFAULT NULL, local_path VARCHAR(255) DEFAULT NULL, INDEX IDX_C53D045F8F93B6FC (movie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movie (id INT AUTO_INCREMENT NOT NULL, review_author_id INT DEFAULT NULL, viewing_window_id INT DEFAULT NULL, movie_id VARCHAR(255) NOT NULL, headline VARCHAR(255) DEFAULT NULL, rating INT DEFAULT NULL, last_updated DATE DEFAULT NULL, duration INT DEFAULT NULL, year INT DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, synopsis LONGTEXT DEFAULT NULL, body LONGTEXT DEFAULT NULL, quote VARCHAR(255) DEFAULT NULL, class VARCHAR(50) DEFAULT NULL, cert VARCHAR(10) DEFAULT NULL, sum VARCHAR(255) DEFAULT NULL, sky_go_id VARCHAR(255) DEFAULT NULL, sky_go_url VARCHAR(255) DEFAULT NULL, friendly_url VARCHAR(255) DEFAULT NULL, INDEX IDX_1D5EF26F6184681A (review_author_id), INDEX IDX_1D5EF26FEBBD34F (viewing_window_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reviewer (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, movie_id INT DEFAULT NULL, title VARCHAR(50) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, type VARCHAR(50) DEFAULT NULL, quality VARCHAR(50) DEFAULT NULL, local_path VARCHAR(255) DEFAULT NULL, INDEX IDX_7CC7DA2C8F93B6FC (movie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE viewing_window (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(50) DEFAULT NULL, way_to_watch VARCHAR(50) DEFAULT NULL, start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cast_movie ADD CONSTRAINT FK_8E1E9FF927B5E40F FOREIGN KEY (cast_id) REFERENCES cast (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cast_movie ADD CONSTRAINT FK_8E1E9FF98F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE director_movie ADD CONSTRAINT FK_E7596DBD899FB366 FOREIGN KEY (director_id) REFERENCES director (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE director_movie ADD CONSTRAINT FK_E7596DBD8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gallery ADD CONSTRAINT FK_472B783A8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id)');
        $this->addSql('ALTER TABLE genre_movie ADD CONSTRAINT FK_A058EDAA4296D31F FOREIGN KEY (genre_id) REFERENCES genre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE genre_movie ADD CONSTRAINT FK_A058EDAA8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id)');
        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26F6184681A FOREIGN KEY (review_author_id) REFERENCES reviewer (id)');
        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26FEBBD34F FOREIGN KEY (viewing_window_id) REFERENCES viewing_window (id)');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C8F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cast_movie DROP FOREIGN KEY FK_8E1E9FF927B5E40F');
        $this->addSql('ALTER TABLE director_movie DROP FOREIGN KEY FK_E7596DBD899FB366');
        $this->addSql('ALTER TABLE genre_movie DROP FOREIGN KEY FK_A058EDAA4296D31F');
        $this->addSql('ALTER TABLE cast_movie DROP FOREIGN KEY FK_8E1E9FF98F93B6FC');
        $this->addSql('ALTER TABLE director_movie DROP FOREIGN KEY FK_E7596DBD8F93B6FC');
        $this->addSql('ALTER TABLE gallery DROP FOREIGN KEY FK_472B783A8F93B6FC');
        $this->addSql('ALTER TABLE genre_movie DROP FOREIGN KEY FK_A058EDAA8F93B6FC');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F8F93B6FC');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C8F93B6FC');
        $this->addSql('ALTER TABLE movie DROP FOREIGN KEY FK_1D5EF26F6184681A');
        $this->addSql('ALTER TABLE movie DROP FOREIGN KEY FK_1D5EF26FEBBD34F');
        $this->addSql('DROP TABLE cast');
        $this->addSql('DROP TABLE cast_movie');
        $this->addSql('DROP TABLE director');
        $this->addSql('DROP TABLE director_movie');
        $this->addSql('DROP TABLE gallery');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE genre_movie');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE movie');
        $this->addSql('DROP TABLE reviewer');
        $this->addSql('DROP TABLE video');
        $this->addSql('DROP TABLE viewing_window');
    }
}
