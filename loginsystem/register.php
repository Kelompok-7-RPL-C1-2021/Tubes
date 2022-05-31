<?php 
require '../partials/_dbconnect.php';
//atur variabel
$err        = "";
$success        = "";
$username   = "";
$ingataku   = "";

if(isset($_POST['register'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    if($username == '' or $password == ''){
        $err .= "<li>Silakan masukkan username dan juga password.</li>";
    }else{
        $sql1 = "select * from login where username = '$username'";
        $q1   = mysqli_query($koneksi,$sql1);
        $r1   = mysqli_fetch_array($q1);

        if($r1['username'] != ''){
            $err .= "<li>Username <b>$username</b> sudah ada sebelumnya.</li>";
        }else{
            $sql2 = "insert into login values ('$username', '$password')";
            $q2   = mysqli_query($koneksi,$sql2);
        }
        
        if((empty($err)) && ($q2)){
            $_SESSION['session_username'] = $username; //server
            $_SESSION['session_password'] = md5($password);
            $success .= "<li>Register berhasil! Silakan login";

            // header("location:register.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container my-4">    
    <div id="registerbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Signup Akun</div>
            </div>      
            <div style="padding-top:30px" class="panel-body" >
                <?php if($err){ ?>
                    <div id="register-alert" class="alert alert-danger col-sm-12">
                        <ul><?php echo $err ?></ul>
                    </div>
                <?php } ?>
                <?php if($success){ ?>
                    <div id="register-alert" class="alert alert-success col-sm-12">
                        <ul><?php echo $success ?> <a href="index.php">disini!</a></ul>
                    </div>
                <?php } ?>                
                <form id="registerform" class="form-horizontal" action="" method="post" role="form">       
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="register-username" type="text" class="form-control" name="username" value="<?php echo $username ?>" placeholder="username">                                        
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="register-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input type="submit" name="register" class="btn btn-success" value="Register"/>
                        </div>
                    </div>
                    <a href="login.php"> Sudah memiliki akun? Login disini. </a>
                </form>    
            </div>                     
        </div>  
    </div>
</div>
</body>
</html>