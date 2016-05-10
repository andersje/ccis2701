#CREATE TABLE publisher (id int NOT NULL AUTO_INCREMENT, name varchar(90), addr varchar(90), city varchar(30), state char(2), zip char(10), PRIMARY KEY(id));
#CREATE TABLE author(id INT NOT NULL AUTO_INCREMENT, firstname varchar(30), lastname varchar(30), addr varchar(90), city varchar(30), state char(2), zip char(10), email varchar(80), primary key(id));

#CREATE TABLE book(id int NOT NULL AUTO_INCREMENT, publisher_id int, title varchar(80), ISBN varchar(30), primary key(id));

#CREATE TABLE book_author(book_id int NOT NULL, author_id int, primary key(book_id, author_id));

#INSERT INTO publisher VALUES(1, "O'Reilly & Associates", "1005 Gravenstein Highway North","Sebastopol","CA","95472");
#INSERT INTO publisher VALUES(2, "Sam's Publishing", "200 Old Tappan Rd","Old Tappan","NJ","07675");
#INSERT INTO publisher VALUES(3, "Simon & Schuster","1230 Avenue of the Americas, 11th Floor","New York","NY","10020");
#INSERT INTO publisher VALUES(4,"Harvest Books",null,null,null,null);
#INSERT INTO publisher VALUES(5,"Avon",null,null,null,null);
INSERT INTO publisher VALUES(6,"Tarcher",null,null,null,null);
INSERT INTO publisher VALUES(7,"Time-Life Books",null,null,null,null);
INSERT INTO publisher VALUES(8,"Malor Books",null,null,null,null);
INSERT INTO publisher VALUES(9,"Perseus Books",null,null,null,null);
INSERT INTO publisher VALUES(10,"Houghton Mifflin",null,null,null,null);

#INSERT INTO author VALUES(1,"Robert","Ornstein",null,null,null,null,null);
#INSERT INTO author VALUES(2,"Mark","Frost",null,null,null,null,null);
INSERT INTO author (id, firstname, lastname) VALUES(25,"Kraig","Hanadel");
INSERT INTO author (id, firstname, lastname) VALUES(26,"Stephanie","Lessig");
INSERT INTO author (id, firstname, lastname) VALUES(27,"James","Burke");
INSERT INTO author (id, firstname, lastname) VALUES(28,"Ted","Dewan");
INSERT INTO author (id, firstname, lastname) VALUES(29,"David","Sobel");
INSERT INTO author (id, firstname, lastname) VALUES(30,"Richard","Thompson");

#INSERT INTO book VALUES(1,3,"Evolution of Consciousness:  The Origins of the Way We Think","0671792245");
#INSERT INTO book VALUES(2,4,"The Right Mind: Making Sense of the Hemispheres","0156006278");
#INSERT INTO book VALUES(3,5,"The List of 7","0380720191");
INSERT INTO book values(25,5,"Catch Me If You Can : A California Saga of Murder, Greed, and Two Heroic Detectives");
INSERT INTO book values(26,5,"She's Got Issues");
INSERT INTO book values(27,5,"Miss Understanding");
INSERT INTO book values(28,6,"The Axemaker's Gift");
INSERT INTO book VALUES(29,7,"The Healthy Mind, Healthy Body Handbook");
INSERT INTO book VALUES(30,8,"The Healing Brain: Breakthrough Discoveries About How the Brain Keeps Us Healthy");
INSERT INTO book VALUES(31,9,"Healthy Pleasures");
INSERT INTO book VALUES(32,10,"The Amazing Brain");
INSERT INTO book VALUES(33,3,"Twin Tracks : The Unexpected Origins of the Modern World");
INSERT INTO book VALUES(34,3,"Circles : Fifty Roundtrips Through History Technology Science Culture");
INSERT INTO book VALUES(35,3,"The Knowledge Web : From Electronic Agents to Stonehenge and Back -- And Other Journeys Through Knowledge ");

INSERT INTO book_author VALUES(25,25);
INSERT INTO book_author VALUES(26,26);
INSERT INTO book_author VALUES(27,26);
INSERT INTO book_author VALUES(28,1);
INSERT INTO book_author VALUES(28,27);
INSERT INTO book_author VALUES(28,28);
INSERT INTO book_author VALUES(29,1);
INSERT INTO book_author VALUES(29,29);
INSERT INTO book_author VALUES(30,1);
INSERT INTO book_author VALUES(30,29);
INSERT INTO book_author VALUES(31,1);
INSERT INTO book_author VALUES(31,29);
INSERT INTO book_author VALUES(32,1);
INSERT INTO book_author VALUES(32,30);
INSERT INTO book_author VALUES(33,27);
INSERT INTO book_author VALUES(34,27);
INSERT INTO book_author VALUES(35,27);

