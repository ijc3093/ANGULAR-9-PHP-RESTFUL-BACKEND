DROP DATABASE IF EXISTS hfr;
CREATE DATABASE IF NOT EXISTS hfr;
SHOW DATABASES;

use hfr;

create table policies( id int not null auto_increment, number varchar(20), amount float, primary key(id)); 

INSERT INTO policies VALUE(1, 400, 500);

