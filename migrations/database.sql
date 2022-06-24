/*
    Author: Thomas Arnaudin
    PDA service database
*/

DROP TABLE IF EXISTS ps_pdacustomer;

CREATE TABLE ps_pdacustomer (
    id_pda_customer INT AUTO_INCREMENT NOT NULL, 
    id_customer INT unsigned NOT NULL, 
    socid_dolibarr INT NOT NULL, 
    ref_customer VARCHAR(64) NOT NULL, 
    name_customer VARCHAR(64) NOT NULL, 
    INDEX IDX_FB282DCBD1E2629C (id_customer), 
    PRIMARY KEY(id_pda_customer)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB;

ALTER TABLE ps_pdacustomer ADD CONSTRAINT FK_FB282DCBD1E2629C FOREIGN KEY (id_customer) REFERENCES ps_customer (id_customer);

INSERT INTO ps_pdacustomer (id_customer, socid_dolibarr, ref_customer, name_customer) VALUES (3, 33, "40151", "A-Vita Apotheke");
INSERT INTO ps_pdacustomer (id_customer, socid_dolibarr, ref_customer, name_customer) VALUES (3, 67, "40431", "Lambertus Apotheke");
INSERT INTO ps_pdacustomer (id_customer, socid_dolibarr, ref_customer, name_customer) VALUES (3, 13, "40201", "Marien-Apotheke");
INSERT INTO ps_pdacustomer (id_customer, socid_dolibarr, ref_customer, name_customer) VALUES (4, 120, "40551", "La Pharmacie du Soleil");