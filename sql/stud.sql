--CRUD and basic tests in mysql

DROP TABLE IF EXISTS student;

CREATE TABLE student (
  id int(10) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  studId varchar(255) NOT NULL,
  subject varchar(255),
  note float,
  PRIMARY KEY (id),
  UNIQUE(studId)
);

-- not working??
ALTER TABLE student ADD CONSTRAINT check_note CHECK (note >= 1 AND note <= 5);

INSERT INTO student VALUES(1, "aaa", "aaa01", "bio", 1.0);
INSERT INTO student VALUES(2, "bbb", "bbb01", "phy", 1.3);
INSERT INTO student VALUES(3, "ccc", "ccc01", "phy", 1.3);
INSERT INTO student VALUES(4, "ddd", "ddd01", "bio", 3.0);
INSERT INTO student VALUES(5, "eee", "eee01", "che", 1.3);
INSERT INTO student VALUES(6, "fff", "fff01", "che", 2.5);
INSERT INTO student VALUES(7, "ggg", "ggg01", "che", 3.0);
INSERT INTO student VALUES(8, "hhh", "hhh01", "mat", 1.3);
INSERT INTO student VALUES(9, "aaa", "aaa02", "che", 1.7);
INSERT INTO student VALUES(10, "aaa", "aaa03", "mat", 2.7);

UPDATE student SET name = "aaa", studId = "aaa04" WHERE name = "hhh"; 

DELETE FROM student WHERE studId = "aaa03";

DROP TABLE IF EXISTS contact;

CREATE TABLE contact (
  id int(10) NOT NULL AUTO_INCREMENT,
  studId varchar(255) NOT NULL, 
  tel int(12),
  add varchar(255),
  email varchar(255),
  PRIMARY KEY (id),
  UNIQUE (studId)
);

INSERT INTO contact VALUES(1, "aaa01", 017631341234, "berlin", "aaa01@uni.de");
INSERT INTO contact VALUES(2, "aaa02", 017631345678, "rostock", "aaa02@uni.de");
INSERT INTO contact VALUES(3, "aaa03", 017631342345, "hamburg", "aaa03@uni.de");
INSERT INTO contact VALUES(4, "aaa04", 017631346789, "koeln", "aaa04@uni.de");
INSERT INTO contact VALUES(5, "bbb01", 017936121234, "berlin", "bbb01@uni.de");
INSERT INTO contact VALUES(6, "ccc01", 017921348492, "rostock", "ccc01@uni.de");
INSERT INTO contact VALUES(7, "ddd01", 017332214935, "hannover", "ddd01@uni.de");
INSERT INTO contact VALUES(8, "eee01", 013923467893, "shanghai", "eee01@uni.de");
INSERT INTO contact VALUES(9, "fff01", 013813648164, "beijing", "fff1@uni.de");
INSERT INTO contact VALUES(10, "ggg01", 017631739812, "rostock", "ggg01@uni.de");
INSERT INTO contact VALUES(11, "hhh01", 017639412347, "hamburg", "hhh01@uni.de");
INSERT INTO contact VALUES(12, "iii01", 017621412374, "berlin", "iii01@uni.de");

-- 1. select che student with note > 2.0
SELECT * FROM student WHERE subject = "che" AND note > 2.0;
SELECT * FROM student WHERE subject = "che" AND note LIKE "1%";

-- 2. rank che students by note 
SELECT * FROM student WHERE subject = "che" ORDER BY note;

-- 3. select all the che and bio students
SELECT * FROM student WHERE subject IN ("che", "bio");

-- 4. select all students with name "ccc", "ddd", "eee", "fff"
SELECT * FROM student WHERE name BETWEEN "ccc" AND "fff";

-- 5. select studid, note, tel and email info from two tables
SELECT s.studId AS StudentID, s.note AS Note, c.tel, c.email
FROM student AS s
INNER JOIN concact AS c
ON s.studId = c.studId;

-- 6. todo:
-- GROUP BY, functions, view, having, foreign key, select into, insert into select
-- transactions, 
