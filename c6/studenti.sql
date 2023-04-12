-- CREATE SCHEME php12;
-- use php12;

-- CREATE TABLE studenti (
-- 	id INT NOT NULL AUTO_INCREMENT,
-- 	ime VARCHAR(45) NULL,
--     prezime VARCHAR(45) NULL,
--     godini INT NULL,
--     email VARCHAR(45) NULL,
--     PRIMARY KEY (id),
--     UNIQUE KEY unique_id (id)
-- );

-- INSERT INTO studenti ( id, ime, prezime, godini, email ) VALUES
-- (1, 'Mia', 'Koluchi',30,'m.k@outlook.com'),
-- (2, 'Andrej', 'Andreevski',45,'a.a@gmail.com'),
-- (3, 'Klara', 'Manasieva',27,'k.m@outlook.com'),
-- (4, 'Melina', 'Melinovska',22,'m.m@gmail.com'),
-- (5, 'Ognen', 'Pozharovski',18,'o.p@yahoo.com'),
-- (NULL, 'Blagojce', 'Solenovski',49,'b.s@yahoo.com');

-- INSERT INTO studenti ( id, ime, prezime, godini, email ) VALUES (NULL, 'Blagojce', 'Blagovski', 22, 'b.b@gmail.com');

-- SELECT * FROM studenti;

-- SELECT id, ime, prezime, email FROM studenti;

-- SELECT ime as име  FROM studenti
-- WHERE ime = 'melina';

-- SELECT ime, prezime, email FROM studenti
-- WHERE godini > 30;

-- SELECT ime, prezime, email FROM studenti
-- WHERE email LIKE '%yahoo.com';

-- SELECT ime, prezime, email FROM studenti
-- WHERE prezime LIKE 'M%ska';

-- SELECT ime, prezime, email FROM studenti
-- WHERE prezime != 'Melinovska';

-- SELECT ime, prezime, email FROM studenti
-- WHERE ime <> 'Andrej';

-- SELECT ime, prezime, email, godini FROM studenti
-- WHERE prezime NOT LIKE 'Melinovska'
-- AND godini > 20;

-- SELECT ime, prezime, email, godini FROM studenti
-- WHERE ime IN ('Andrej','Blagojce');

-- SELECT DISTINCT ime FROM studenti;

-- SELECT count(*) as Brojcanik FROM studenti
-- WHERE ime = 'Blagojce';


-- Napisi 6 kverinja vkupno, kade sto vo sekoe kveri ke ima WHERE uslov, vo dva od niv ke ima AND izraz, i vo eden od niv ke iskoristis OR.
-- i plus niedno kveri ke go nema istiot uslov.