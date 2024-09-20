<?php
    include "phpenv.php";
    function add_enquiry($first_name,$last_name,$email,$subject,$message){
        include "connection.php";
        $sql ='INSERT INTO enquiries(first_name, last_name, email, subject_1, message_1) VALUES (?,?,?,?,?)';
        try{
            $results= $db -> prepare($sql);
            $results->bindValue(1, $first_name, PDO::PARAM_STR);
            $results->bindValue(2, $last_name, PDO::PARAM_STR);
            $results->bindValue(3, $email, PDO::PARAM_STR);
            $results->bindValue(4, $subject, PDO::PARAM_STR);
            $results->bindValue(5, $message, PDO::PARAM_STR);
            $results->execute();
        } catch(exception $e){
            echo "Error! Could not add query to database<br>";
            return false;
        }
    }

    function delete_enquiry(){ //Used to clear the contents of the database
        include "connection.php";
        $sql ='DELETE FROM enquiries';
        try{
            $results= $db -> prepare($sql);
            $results->execute();
        } catch(exception $e){
            echo "Error! Could not add query to database<br>";
            return false;
        }
    }
?>

