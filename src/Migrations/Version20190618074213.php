<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190618074213 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE `order` (idFlux INT AUTO_INCREMENT NOT NULL, marketplace VARCHAR(255) NOT NULL, order_id VARCHAR(19) NOT NULL, order_mrid VARCHAR(19) NOT NULL, order_refid VARCHAR(19) NOT NULL, order_external_id VARCHAR(255) DEFAULT NULL, order_purchase_date VARCHAR(10) NOT NULL, order_purchase_heure VARCHAR(8) NOT NULL, order_amount DOUBLE PRECISION NOT NULL, order_tax INT NOT NULL, order_shipping DOUBLE PRECISION NOT NULL, order_commission DOUBLE PRECISION NOT NULL, order_processing_fee INT NOT NULL, order_currency_currency VARCHAR(255) NOT NULL, PRIMARY KEY(idFlux)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE `order`');
    }
}
