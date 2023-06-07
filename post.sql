-- Create a new database called 'DatabaseName'
-- Connect to the 'master' database to run this snippet
USE post
GO
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'post'
)
CREATE DATABASE post
GO
CREATE TABLE post (
id INT(11) NOT NULL AUTO_INCREMENT,
image VARCHAR(255) NOT NULL,
title VARCHAR(255) NOT NULL,
description TEXT NOT NULL,
comment_count INT(11) NOT NULL DEFAULT 0,
insights_count INT(11) NOT NULL DEFAULT 0,
date DATE NOT NULL,
PRIMARY KEY (id)
);