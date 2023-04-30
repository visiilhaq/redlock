CREATE DATABASE Redlock;

USE Redlock;

CREATE TABLE users (
  ID INT NOT NULL AUTO_INCREMENT,
  Nama VARCHAR(255) NOT NULL,
  Alamat VARCHAR(255) NOT NULL,
  Jabatan VARCHAR(255) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT into users values("1", "Zeky", "Pesona Kalisari 1", "CEO"),
("2", "Tasnim", "Pesona Kalisari 2", "Sekretaris"),
("3", "Zaki", "Pesona Kalisari 3", "Bendahara"),
("4", "Padil", "Kocer", "Babu"),
("5", "Mul", "Jakarta Timur", "Kapten");
