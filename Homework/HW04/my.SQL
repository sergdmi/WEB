

CREATE TABLE STUDENTS (
  studentId INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age  INTEGER,
  address TEXT NOT NULL
);

INSERT INTO STUDENTS (name, age, address) VALUES ('Алексей Г.', 25,'Москва');
INSERT INTO STUDENTS (name, age, address) VALUES ('Александр М.', 32,'Санкт-Петербург');
INSERT INTO STUDENTS (name, age, address) VALUES ('Антон Г.', 45, 'Санкт-Петербург');
INSERT INTO STUDENTS (name, age, address) VALUES ('Анна С.', 30,'Москва');
INSERT INTO STUDENTS (name, age, address) VALUES ('Ирина З.', 21,'Екатеринбург');
INSERT INTO STUDENTS (name, age, address) VALUES ('Михаил С.', 37,'Томск');
INSERT INTO STUDENTS (name, age, address) VALUES ('Полина З.', 22,'Москва');
INSERT INTO STUDENTS (name, age, address) VALUES ('Инга Л.', 35,'Хабаровск');
INSERT INTO STUDENTS (name, age, address) VALUES ('Роман П.', 18,'Москва');
INSERT INTO STUDENTS (name, age, address) VALUES ('Сергей Б.', 37,'Новосибирск');
INSERT INTO STUDENTS (name, age, address) VALUES ('Виктория К.', 30, 'Санкт-Петербург');
INSERT INTO STUDENTS (name, age, address) VALUES ('Павел И.', 28,'Москва');
INSERT INTO STUDENTS (name, age, address) VALUES ('Екатерина Ш.', 31,'Казань');
INSERT INTO STUDENTS (name, age, address) VALUES ('Татьяна С.', 23,'Москва');
INSERT INTO STUDENTS (name, age, address) VALUES ('Иван К.', 19,'Москва');

SELECT name FROM STUDENTS WHERE age BETWEEN 18 AND 29 AND address = 'Москва'
