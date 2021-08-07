-- Make a database named 'sahararp' if it doesnt exist
-- Create the table 'sahararp.users' if it doesnt exist
-- Insert the following data into the table 'sahararp.users'
-- id, firstname, lastname, email, password
-- id: 1, firstname: John, lastname: Doe, email: Doe@gmail.com, password: 1234

-- Make the DataBase with data from above
CREATE DATABASE IF NOT EXISTS sahararp;
USE sahararp;
CREATE TABLE IF NOT EXISTS users (
  firstname VARCHAR(255) NOT NULL,
  background VARCHAR(255) NOT NULL,
  discord VARCHAR(255) NOT NULL,
  formål VARCHAR(255) NOT NULL,
  alder VARCHAR(255) NOT NULL,
  steamID VARCHAR(255) NOT NULL,
  steamNavn VARCHAR(255) NOT NULL,
  steamAvatar VARCHAR(255) NOT NULL
);