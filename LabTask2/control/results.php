<?php
    $vname = "";
    $vemail = $vpass = $vcmt= "";
    $vcheckbox = "";
    $vradio = "";
    $h1 = $h2 = $h3 = $infoh = $infog =  "";
    $name = $email = $gender = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_REQUEST["fname"];
        $email = $_REQUEST["email"];
        $cmt = $_REQUEST["comment"];

        if (empty($name) || (strlen($name) < 3)||!ctype_alpha($name))
        {
            $vname = "You must enter a valid name";

        }
        else
        {
            $vname = "Your name is " . $name;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $vemail = "You must enter email";
        }
        else
        {
            $vemail = "Your email is " . $email;
        }

        if (empty($cmt) || (strlen($cmt) < 3))
        {
            $vcmt = "You have to write something";

        }
        else
        {
            $vcmt = "Your comment is " . $cmt;
        }
        
        if(isset($_POST['password'])) {
            $password = $_POST['password'];
            
            $number = preg_match('@[0-9]@', $password);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            
            if(strlen($password) < 6 || !$number || !$uppercase || !$lowercase) {
                $vpass = "Password must be at least 6 characters and must contain at least one Number, one Upper case & one Lower case letter";
            } else {
                $vpass = "Your password is entered";
            }
        }

        if (!isset($_REQUEST["hobby1"]) && !isset($_REQUEST["hobby2"]) && !isset($_REQUEST["hobby3"]))
        {
            $vcheckbox = "Please select at least one";

        }
        else
        {
            $infoh = "You choose ";
            if (isset($_REQUEST["hobby1"]))
            {
                $h1 = $_REQUEST["hobby1"];
            }
            if (isset($_REQUEST["hobby2"]))
            {
                $h2 = $_REQUEST["hobby2"];
            }
            if (isset($_REQUEST["hobby3"]))
            {
                $h3 = $_REQUEST["hobby3"];
            }
        }
        if (isset($_REQUEST["gender"]))
        {
            $infog = "Your are ";
            $vradio = $_REQUEST["gender"];
        }
        else
        {
            $vradio = "Please select any one";
        }

    }

?>
