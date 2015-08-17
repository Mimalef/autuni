<?php
include "_conn.php";


if(isset($_GET['submit']))
{
    $user = $_GET['user'];
    $pass = $_GET['pass'];


    $result = mysqli_query($db,"SELECT id FROM  admins WHERE  username='$user' AND password='$pass'");  
    $row = mysqli_fetch_array($result);

    if($row)
    {
        echo "شما با موفقیت وارد شدید";
    }
}
?>
<form>
    <input name="user" type="text" placeholder="نام کاربری">
    <input name="pass" type="text" placeholder="رمز عبور">
    <input name="submit" type="submit" value="ورود">
    
</form>
