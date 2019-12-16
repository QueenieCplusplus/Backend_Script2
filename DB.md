# DB
to create a DB to interact with Codelgniter App

# listen MySQL Server

https://github.com/redpint819/mySQL

# create DB Schema, table, coulmn
before querying the DB, a database schema has to be created. Connect to your database and run the SQL command below (MySQL). Also add some seed records.

* create schema

        name
        Char Set = utf8mb4
        Collation = utf8mb4_unicode_ci

* create table

        CREATE TABLE news (
                id int(11) NOT NULL AUTO_INCREMENT,
                title varchar(128) NOT NULL,
                slug varchar(128) NOT NULL,
                text text NOT NULL,
                PRIMARY KEY (id),
                KEY slug (slug)
        );
        
        CREATE TABLE `RedPoint`.`Play_Join` (

		  id int(3) NOT NULL AUTO_INCREMENT,
		  name varchar(10) not null,
          price int(10) NOT NULL,
		  text text NOT NULL,
          PRIMARY KEY (id)

        );
        
  * play join
  
  wait...
    
# execute QL to create row data

    insert into RP_table(title, slug, text) values ('iOS', '20180420', 'Lucky7app');

    select * from RedPoint.RP_table;

    delete from RedPoint.RP_table where id = 2;

    select * from RedPoint.RP_table;
    
    update RedPoint.RP_table set title='Android', slug='20180601', text='Pokemon' where id=1;
    
    select * from RedPoint.RP_table;
    
    insert into RedPoint.Play_Join(name, price, text) values('Udacity', 60000, 'nano degree for 2 phone systems.')
    
    select * from `RedPoint`.`Play_Join`;
    
    
# convert Result in Muti-Format

* CSV
* JSON
* XML
* HTML
* Excel Spreadsheet (xml)
* txt

# to do Function, Procedure, View

later on...
    
# Interact with Model

https://github.com/redpint819/model/blob/master/README.md
    

