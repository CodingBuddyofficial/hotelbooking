<?php
require 'components/_dbconnect.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN lOGIN PANEL</title>
    <?php require ("components/links.php");?>
</head>
<style>
    .login-form{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
    }
</style>
<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form action="index.php" method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PAGE</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" type="text" class="form-control shadow-none text-center" placeholder="Admin Name" required>
                </div>
                <div class="mb-4">
                    <input name="admin_pass"type="password" class="form-control shadow-none text-center" placeholder="Password" required>
                </div>
                <button name="admin_login" class="btn text-white custom-bg shadow-none" type="submit">Submit</button>
            </div>
        </form>
    </div>
<?php
if(isset($_POST['admin_login'])){
   $frm_data=filteration($_POST);
   echo "<h1>$frm_data[admin_name]</h1>";
    // $admin_name=$frm_data['admin_name'];
    // $admin_pass=$frm_data['admin_pass'];
    // $sql="SELECT * FROM `admin` WHERE `admin_name`='$admin_name' AND `admin_pass`='$admin_pass'";
    // $result=mysqli_query($conn,$sql);
    // $num=mysqli_num_rows($result);
    // if($num==1){
    //     session_start();
    //     $_SESSION['admin_name']=$admin_name;
    //     header("location:dashboard.php");
    // }
    // else{
    //     echo '<script>alert("Invalid Credentials")</script>';
    // }

}
?>
    <?php require("components/scripts.php");?>
</body>

</html>