/* DB initialization */
DROP DATABASE IF EXISTS L9_Kaminska_53327_re2;
CREATE database L9_Kaminska_53327_re2;

/* TABLES - MOVIES */
CREATE TABLE L9_Kaminska_53327_re2.movies_pk_53327 (
 id_53327 INTEGER AUTO_INCREMENT PRIMARY KEY,
 name_53327 VARCHAR(70),
 price_53327 DOUBLE(6,2)
);
INSERT INTO L9_Kaminska_53327_re2.movies_pk_53327 (
 name_53327, price_53327
)
 VALUES
 ('Przeminęło z wiatrem',25.50),
 ('Batman',12.99),
 ('Koszmar z ulicy wiązów',10.95),
 ('Smerfy',13.55),
 ('Dinozaury - SD',50.32),
 ('Maraton - Władca Pierścieni',220.99);

/* TABLES - CLIENTS */
CREATE TABLE L9_Kaminska_53327_re2.clients_pk_53327 (
 id_53327 INTEGER AUTO_INCREMENT PRIMARY KEY,
 full_name_53327 VARCHAR(70) NOT NULL,
 street_53327 VARCHAR(70) NOT NULL,
 city_53327 VARCHAR(50) NOT NULL,
 zip_code_53327 VARCHAR(10) NULL,
 phone_number_53327 VARCHAR(70) NOT NULL
);
INSERT INTO L9_Kaminska_53327_re2.clients_pk_53327 (
 full_name_53327, street_53327, city_53327, zip_code_53327, phone_number_53327
)
VALUES
 ('Adam Król', 'Krucza 1','Warszawa', NULL, '524678'),
 ('Marek Woźniak', 'Bankowa 44', 'Katowice', NULL, '824691'),
 ('Beata Nowak', 'Kwiatowa 7', 'Lublin', '20-425', '731446'),
 ('Magda Kowalska', 'Podleśna 3', 'Warszawa', '01-684', '872359'),
 ('Roman W.', 'Leśna 2', 'Lublin', NULL, '934768');

/* TABLES - BILLS */
CREATE TABLE L9_Kaminska_53327_re2.bills_pk_53327 (
 id_53327 INTEGER AUTO_INCREMENT PRIMARY KEY,
 bill_name_53327 VARCHAR(70)
);
INSERT INTO L9_Kaminska_53327_re2.bills_pk_53327 (
 id_53327, bill_name_53327
)
VALUES
 (1,'FV/1/2023'),
 (2,'FV/2/2023'),
 (3,'FV/3/2023'),
 (4,'FV/4/2023');

/* TABLES - TICKETS */
CREATE TABLE L9_Kaminska_53327_re2.tickets_pk_53327 (
 id_53327 INTEGER AUTO_INCREMENT PRIMARY KEY,
 client_id_53327 INTEGER,
 movie_id_53327 INTEGER,
 bill_id_53327 INTEGER,
 tickets_quantity_53327 INTEGER,
 discount_53327 tinyint,
 FOREIGN KEY (client_id_53327)
     REFERENCES L9_Kaminska_53327_re2.clients_pk_53327 (id_53327)
     ON UPDATE CASCADE
     ON DELETE CASCADE,
 FOREIGN KEY (movie_id_53327)
     REFERENCES L9_Kaminska_53327_re2.movies_pk_53327 (id_53327)
     ON UPDATE CASCADE
     ON DELETE CASCADE,
 FOREIGN KEY (bill_id_53327)
     REFERENCES L9_Kaminska_53327_re2.bills_pk_53327 (id_53327)
     ON UPDATE CASCADE
     ON DELETE CASCADE
);
INSERT INTO L9_Kaminska_53327_re2.tickets_pk_53327 (
    client_id_53327, movie_id_53327, bill_id_53327, tickets_quantity_53327, discount_53327
 )
VALUES
 (2,6,1,1,5),
 (1,2,2,20,10),
 (3,4,3,3,2),
 (5,3,4,2,5);