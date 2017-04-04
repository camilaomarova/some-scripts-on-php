<?php
   $dbhost = 'localhost:80';
   $dbuser = 'root';
   $dbpass = '1234567';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);


   if(! $conn){
      die ('Couldnt connect to database because of: ' + mysql_error());

   }

   echo "Connected successfully\n";


   $sql = 'CREATE Database dbphp';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }
   
   echo "Database dbphp created successfully\n";

   $query = 'CREATE TABLE employee( '.
      'emp_id INT NOT NULL AUTO_INCREMENT, '.
      'emp_name VARCHAR(20) NOT NULL, '.
      'emp_address  VARCHAR(20) NOT NULL, '.
      'emp_salary   INT NOT NULL, '.
      'join_date    timestamp(14) NOT NULL, '.
      'primary key ( emp_id ))';
   mysql_select_db('dbphp');
   $create_table = mysql_query( $query, $conn );
   
   if(! $create_table ) {
      die('Could not create table: ' . mysql_error());
   }
   
   echo "Table employee created successfully\n";
   
   mysql_close($conn);

?>
