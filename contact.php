    <?php
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["message"];

        $email_to="everybodyeats031@gmail.com";
        $subject="Form Submission";
        $message="Name: ".$name."\n"."Email: ".$email."\n"."Wrote the following: "."\n\n".$message;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully! Thank You"." ".$name.",We will contact you soonest!</h1>";     
        }
        else{
            echo "Something went wrong!";
        }



    }







?>