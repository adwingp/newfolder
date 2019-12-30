<?php

    if(isset($_POST['submit'])){
        $name_student   = $_POST['stud_name'];
        $name_parent    = $_POST['par_name'];
        $email_student  = $_POST['stud_email'];
        $email_parent   = $_POST['par_email'];
        $gender_student = $_POST['stud_gender'];
        $grade_student  = $_POST['stud_grade'];
        $phone_parent   = $_POST['par_phone'];
        $date_parent    = $_POST['par_dates'];

        $frommail   = 'adwingp@gmail.com';
        $headers    = "From : ".$frommail;
        $txt        = "testing email";
        $to         = 'adwin@acube.co';
        $retval = mail ($to,$subject,$message,$header);
        if($retval == true){
            echo "success";
        }else{
            echo "fail";
        }
        exit;
    }

?>