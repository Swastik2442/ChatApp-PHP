-- We need to execute these commands before using the ChatApp for the first time.
CREATE DATABASE chatapp;
USE chatapp;

CREATE TABLE rooms(
sno INT AUTO_INCREMENT,
sname TEXT,
stime DATETIME DEFAULT current_timestamp(),
PRIMARY KEY(sno)
);

CREATE TABLE msgs(
sno INT AUTO_INCREMENT,
msg TEXT,
room TEXT,
ip TEXT,
stime DATETIME DEFAULT current_timestamp(),
PRIMARY KEY(sno)
);