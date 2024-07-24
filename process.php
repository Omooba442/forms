<?php 
          error_reporting(E_ALL);
          if($_POST){
            $fullname=$_REQUEST["fullname"];
            $datebirth=$_REQUEST["datebirth"];
            
            $datebirth=$_REQUEST["datebirth"];
            
            $nexkin=$_REQUEST["nextkin"];
            $address=$_REQUEST["address"];
            $occupation=$_REQUEST["occupation"];
            $phone=$_REQUEST["phone"];
            $gender=$_REQUEST["gender"];
            $zip=$_REQUEST["zip"];
            $state=$_REQUEST["state"];
            $hobbies= implode (', ', $_REQUEST["hobbies"]);
            $disability=$_REQUEST["disability"];
            // echo "<p>dear $fullname $datebirth </p> ";
            // echo "<p>  $nexkin </p>";
            // echo "<p>  $occupation </p>";
            // echo "<p> $address </p>";
            // echo "<p> $gender </p>";
            // echo "<p> $phone </p>";
            
            echo "<p> dear $fullname $hobbies </p>";

            
          }
          ?>
