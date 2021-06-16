<?php
    $vname = "";
    $vemail = $vpass = $vcmt= "";
    $vcheckbox = "";
    $vradio = "";
    $h1 = $h2 = $h3 = $info1 = $info2 = $target_file=  "";
    $name = $email = $gender = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_REQUEST["fname"];
        $email = $_REQUEST["email"];
        $cmt = $_REQUEST["comment"];

        if (empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"]) < 3))
        {
            $vname = "You must enter name";

        }
        else
        {
            $vname = "Your name is " . $name;
        }

        if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
        {
            $vemail = "You must enter email";
        }
        else
        {
            $vemail = "Your email is " . $email;
        }

        if (empty($_REQUEST["comment"]) || (strlen($_REQUEST["comment"]) < 3))
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
            $info1 = "You choose ";
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
            $info2 = "Your are ";
            $vradio = $_REQUEST["gender"];
        }
        else
        {
            $vradio = "Please select any one";
        }
        $target_file = "files/".$_FILES["filetoupload"]["name"];

        if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)){
            echo "You have uploaded ".$_FILES["filetoupload"]["name"];
            echo "<img src=".$target_file.">";
        } else{
            echo "Sorry, there was an error uploading your file.";
        }

    }

?>
