<?php
namespace Neos\Flow\Persistence\Doctrine\Migrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

// phpcs:ignoreFile

class Version20190228174241 extends AbstractMigration
{

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Change redirecturi field to text';
    }

    /**
     * @param Schema $schema
     * @return void
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\Migrations\Exception\AbortMigration
     */
    public function up(Schema $schema): void
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on "mysql".');
        $this->addSql('ALTER TABLE punktde_oauth2_server_domain_model_client CHANGE redirecturi redirecturi TEXT DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     * @return void
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\Migrations\Exception\AbortMigration
     */
    public function down(Schema $schema): void
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on "mysql".');

        $this->addSql('ALTER TABLE punktde_oauth2_server_domain_model_client CHANGE redirecturi redirecturi VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
