<?php
function ceklogin($username, $password){
    if($username == 'admin' && $password == 'mimin') header("Location: home/home.php");
    else { 
        echo "<script>alert('Username atau Password yang anda masukan salah')
        </script>";
    }
    }
if(isset($_POST['login'])) ceklogin($_POST['username'], $_POST['password']); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>form login</title>
    <link href="home/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <center>
        <h2 class="mt-5 alert alert-primary mb-0">Form Login</h2>
        <hr/>
            <ul class="mt-5 alert alert-secondary mb-0">
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td><label for="username">Username</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="username" id="username" placeholder="masukan username"></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password</label></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="password" placeholder="masukan password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="login" value="login" onclick="<?php ceklogin($username, $password) ?>" /></td>
                        </tr>
                    </table>
                </form>
            </ul>    
    </div>
</body>
</html>