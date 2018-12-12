CREATE TABLE customer (
DB_ID INT IDENTITY (100, 1) NOT FOR REPLICATION PRIMARY KEY,
l_name VARCHAR(35) NOT NULL, 
f_name VARCHAR(35) NOT NULL, 
MI VARCHAR(1),
DOB DATE,
addr VARCHAR(100) NOT NULL,
city VARCHAR(50) NOT NULL,
cnty VARCHAR(50),
state VARCHAR(2),
zip VARCHAR(5) NOT NULL,
tel VARCHAR(10) NOT NULL,
PORT_ID VARCHAR(12)
);