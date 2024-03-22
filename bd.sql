DROP DATABASE IF EXISTS biblioteca;
CREATE DATABASE biblioteca CHARACTER SET utf8mb4;
USE biblioteca;
CREATE TABLE editorial (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL
);
CREATE TABLE libro (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
precio DOUBLE NOT NULL,
id_editorial INT UNSIGNED NOT NULL,
FOREIGN KEY (id_editorial) REFERENCES editorial(id)
);
INSERT INTO editorial VALUES(1, 'Planeta');
INSERT INTO editorial VALUES(2, 'Anagrama');
INSERT INTO editorial VALUES(3, 'Alfaguara');
INSERT INTO editorial VALUES(4, 'Akal');
INSERT INTO editorial VALUES(5, 'McGraw-Hill Education');
INSERT INTO editorial VALUES(6, 'Oxford University Press');
INSERT INTO editorial VALUES(7, 'MIT Press');
INSERT INTO editorial VALUES(8, 'Addison-Wesley');
INSERT INTO editorial VALUES(9, 'OReilly Media');
INSERT INTO libro VALUES(1, 'Clean Code', 45.99, 5);
INSERT INTO libro VALUES(2, 'Design Patterns: Elements of Reusable Object-Oriented Software', 54.90, 3);
INSERT INTO libro VALUES(3, 'Introduction to Algorithms', 89.75, 8);
INSERT INTO libro VALUES(4, 'The Pragmatic Programmer', 47.60, 2);
INSERT INTO libro VALUES(5, 'Artificial Intelligence: A Modern Approach', 100.50, 4);
INSERT INTO libro VALUES(6, 'Python Crash Course', 35.95, 1);
INSERT INTO libro VALUES(7, 'Learning React', 39.99, 7);
INSERT INTO libro VALUES(8, 'JavaScript: The Good Parts', 29.99, 6);
INSERT INTO libro VALUES(9, 'Linux Pocket Guide', 19.95, 9);
INSERT INTO libro VALUES(10, 'Head First Design Patterns', 59.60, 3);
INSERT INTO libro VALUES(11, 'Computer Networking: A Top-Down Approach', 76.30, 2);