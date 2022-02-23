
<?php
require 'loginn.php';
?> 

 
 
 <?php
 $sql =  "CREATE TABLE articles (
            id int PRIMARY KEY AUTO_INCREMENT,
            username varchar(255),
            article text,
            created_at TIMESTAMP
            );";

if ($conn->query($sql) === TRUE) {
    echo "Table articles created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();


?>

