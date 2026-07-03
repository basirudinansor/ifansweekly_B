<?php
    require 'fungsi.php';

    if(isset($_POST["register"]))
    {
        if(register($_POST) > 0)
        {
            
             echo "<script>
                    alert('User Berhasil dibuat!');
                    window.location.href='login.php';
                 </script>
                 ";
        }
        else
        {
            die;
            echo "<script>
                    alert('User Gagal dibuat!');
                    window.location.href='index.php';
                 </script>
                 ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register User</h1>
    <hr>
    <form action="" method="post">
        <label>Username : </label><br>
        <input type="text" name="username" required><br>
        <label>Password :</label><br>
        <input type="password" name="password1" required><br>
        <label>Konfirmasi Password</label><br>
        <input type="password" name="password2" required><br><br>
        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>