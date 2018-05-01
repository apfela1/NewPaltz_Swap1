# NewPaltz_Swap1
updated - ugly - slightly functional
In order to use this code the way its written you'll need to create a database called 'np3' 
and either change your root user password to be 'root' or change
or change the connection information inside server.php
and this mysql commandline code to make the tables is
CREATE TABLE users (
id INT(11) NOT NULL AUTO_INCREMENT,
username VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
PRIMARY KEY (id)
);
