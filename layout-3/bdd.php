<?php
      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "ciaDB";
      // Create connection
//      $bdd = new mysqli($servername, $username, $password, $dbname);
       $bdd = new PDO('mysql:host=127.0.0.1;dbname=ciaDB;', 'root', '');

      // Check connection
/*      if ($bdd->connect_error) {
          die("Connection failed: " . $bdd->connect_error);
      }
*/
?>