DROP TABLE IF EXISTS diecast_manufacturer;
DROP TABLE IF EXISTS diecast_car;
DROP TABLE IF EXISTS diecast_order;
DROP TABLE IF EXISTS diecast_scale;

CREATE TABLE diecast_manufacturer (id int NOT NULL AUTO_INCREMENT, name varchar(80), city varchar(30), state char(2), primary key(id));

CREATE TABLE diecast_car( id int NOT NULL AUTO_INCREMENT, make varchar(20), model varchar(20), color varchar(20), year int(4), scale_code int, primary key(id), production_year int(4), quantity int default 0, manufacturer_id int NOT NULL);

CREATE TABLE diecast_scale(id int NOT NULL AUTO_INCREMENT, description char(4), primary key(id));

CREATE TABLE diecast_order(car_id int NOT NULL, quantity int NOT NULL, orderdate datetime, received BOOLEAN);

INSERT INTO diecast_order VALUES(17,48,'2006-06-27 11:19',0);
INSERT INTO diecast_order VALUES(4,48,'2006-06-27 14:51',0);
INSERT INTO diecast_order VALUES(14,96,'2006-06-27 17:11',0);
INSERT INTO diecast_order VALUES(1,24,'2006-05-19 09:22',1);
INSERT INTO diecast_order VALUES(2,24,'2006-05-19 09:22',1);
INSERT INTO diecast_order VALUES(6,48,'2006-05-14 10:01',1);

INSERT INTO diecast_manufacturer VALUES(1,'Ertl','Dyersville','IA');
INSERT INTO diecast_manufacturer VALUES(2,'Scale Models','Dyersville','IA');
INSERT INTO diecast_manufacturer VALUES(3,'Die Cast Promotions','Dyersville','IA');
INSERT INTO diecast_manufacturer VALUES(4,'Spec Cast','Dyersville','IA');
INSERT INTO diecast_manufacturer VALUES(5,'Precision Miniatures','Los Angeles','CA');
INSERT INTO diecast_manufacturer VALUES(6,'Maisto','Los Angeles','CA');
INSERT INTO diecast_manufacturer VALUES(7,'Yat Ming Company','Atlanta','GA');

INSERT INTO diecast_scale VALUES(1,'1/18');
INSERT INTO diecast_scale VALUES(2,'1/24');
INSERT INTO diecast_scale VALUES(3,'1/43');
INSERT INTO diecast_scale VALUES(4,'1/64');

INSERT INTO diecast_car VALUES(null,'Chevrolet','Belair','red',1957,1,2003,24,1);
INSERT INTO diecast_car VALUES(null,'Chevrolet','Belair','red',1958,1,2001,24,1);
INSERT INTO diecast_car VALUES(null,'Chevrolet','Belair','blue',1957,1,2003,4,1);
INSERT INTO diecast_car VALUES(null,'Chevrolet','Belair','yellow',1957,1,2003,17,1);
INSERT INTO diecast_car VALUES(null,'Chevrolet','Belair','black/silver',1957,1,2004,8,1);
INSERT INTO diecast_car VALUES(null,'Ford','Galaxie 500','red',1963,1,1999,48,1);
INSERT INTO diecast_car VALUES(null,'Ford','Galaxie 500','black',1963,1,1999,24,1);
INSERT INTO diecast_car VALUES(null,'Ford','Galaxie 500','blue',1963,1,1999,148,1);
INSERT INTO diecast_car VALUES(null,'Ford','Galaxie 500','aqua',1963,1,1999,18,1);
INSERT INTO diecast_car VALUES(null,'Ford','Galaxie 500','silver',1963,1,1999,4,1);
INSERT INTO diecast_car VALUES(null,'Ford','Galaxie 500','white',1963,1,1999,1,1);
INSERT INTO diecast_car VALUES(null,'Studebaker','Hawk','silver',1962,3,2004,6,6);
INSERT INTO diecast_car VALUES(null,'Studebaker','Hawk','green',1962,2,2004,6,6);
INSERT INTO diecast_car VALUES(null,'Jaguar','XKE','british racing green',1964,4,2006,160,7);

INSERT INTO diecast_car VALUES(null,'Pontiac','GTO Judge','red/white',1969,1,1997,2,5);
INSERT INTO diecast_car VALUES(null,'Pontiac','GTO Judge','green/white',1969,1,1997,0,5);

