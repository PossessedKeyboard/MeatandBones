
DROP   DATABASE IF     EXISTS MEATNBONES;

CREATE DATABASE IF NOT EXISTS MEATNBONES;

USE                           MEATNBONES;

CREATE TABLE users (

ID        INT NOT NULL AUTO_INCREMENT,
NAME      VARCHAR     (40 )  NOT NULL,
AGE       VARCHAR     (3  )  NOT NULL,
GENDER    VARCHAR     (20 )  NOT NULL,
CELLPHONE VARCHAR     (40 )  NOT NULL,
EMAIL     VARCHAR     (40 )  NOT NULL,
ADDRESS   VARCHAR     (150)  NOT NULL,
          PRIMARY KEY (ID )
				   );

INSERT INTO users (NAME,AGE,GENDER,CELLPHONE,EMAIL,ADDRESS) VALUES ('Josh',23,'male','+1 202-918-2132','josh@josh.com','32330 Golden Oak Park Ln Conroe, Texas(TX)');

INSERT INTO users (NAME,AGE,GENDER,CELLPHONE,EMAIL,ADDRESS) VALUES ('Kate',18,'female','+1 505-644-2520','kate@kate.com','35660 River Sheffield, Alabama(AL)');

INSERT INTO users (NAME,AGE,GENDER,CELLPHONE,EMAIL,ADdRESS) VALUES ('Andrew',35,'male','+1 472-221-4196','andrew@andrew.com','521 Meadow Ridge Ln, Moberly, Missouri(MO)');

SELECT * FROM users;