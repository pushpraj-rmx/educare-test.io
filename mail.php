 <?php
    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST")
    {
    $name=$_POST['name'];
     $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $to="richa@one2onetutorials.com";
    $txt="Name:-".$name."\n"."Mobile number:-".$phone."\n"."Email:-".$email."\n"."Message:-".$message;
    if(mail($to,"One2one Tutorials",$txt,"From:$email")) {
    echo "<script>alert('Successfully Message sent')</script>";
    echo '<script>window.location.href="https://digiitsoft.com/educare";</script>';
    }else{
    echo "<script>alert('Query Failed')</script>";
    }
}
?>       