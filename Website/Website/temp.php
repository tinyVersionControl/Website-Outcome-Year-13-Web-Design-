<?php
    //Establish Connection to Databse
    session_start();
    include "conn.php";

    //Check when sign up button is pressed
    if(isset($_POST['SignUp'])) {
        //Store values in session for later use... maybe
        $_SESSION['Username'] = $row['username'];
        $_SESSION['Password'] = $row['password'];
        $_SESSION['Email'] = $row['email'];

        //Get values from sign up sheet
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Email = $_POST['Email'];

        //Insert values into database
        $sql = $conn->query("INSERT INTO users (username, password, email) Values('$Username', '$Password', '$Email')");

        //Go to the members home page
        header('Location: members.php');
    }
?>