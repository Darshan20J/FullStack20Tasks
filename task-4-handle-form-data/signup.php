
<?php
    require('dbconnection.php');

    if(isset($_POST['submit'])) {
        // var_dump($_POST);
        $name = $_POST['name'];
        $username = $_POST['user-name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $mobno = $_POST['mobno'];
        $city = $_POST['state'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $programming_languages = $_POST['prol'];
        
        $interested_languages = "";
        
        foreach($programming_languages as $prog_lang) {
            $interested_languages .= $prog_lang . ", ";
        }

        $sql = "INSERT INTO `users` (`id`, `name`, `username`, `gender`, `dob`, `mobno`, `state`, `email`, `password`, `fav-prog-lang`) VALUES('', '$name', '$username', '$gender', '$dob', '$mobno', '$city', '$email', '$password', '$interested_languages')";

        if($conn->query($sql) === true)
        {
           header( 'Location:success.php' );
        } else {
            echo "ERROR: WHILE INSERT";
        }
    }
?>