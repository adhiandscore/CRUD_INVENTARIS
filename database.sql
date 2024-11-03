/* Create database dan create table*/

create database ppdb;

use ppdb;

CREATE TABLE tbl_pendaftar (

    id int(11) NOT NULL auto_increment,
    nama VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    no_hp VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);