<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'project');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>

<?php
session_start();
if (isset($_POST))
{
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];                                                                                                                                       
$query = "INSERT INTO users(email,name,pass,role) VALUES('$email','$name','$password','$role')";
try{
    $result = mysqli_query($connection, $query);
} catch(Exception $e) {
 echo $e;
}
// if($result)
// {
//     $msg = "Registration Successfull" ;
//     echo $msg;
//     $_SESSION['Message'] = $msg;
//     // header("Location: register.php");
// }
// else
// {
//     $msg = "Registration Failed.";
//     echo $msg;
//     $_SESSION['Message'] = $msg;
//     unset($_POST);
//     // header("Location: register.php");
// }
}
?>