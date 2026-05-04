<?php
session_start();

$msg = "";

if (isset($_POST['send'])) {
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['password'];

    $msg = "user is added";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>

    <style>
        body {
            font-family: Arial;
            background: #ffffff;

            display: flex;
            justify-content: center;   /* tengah horizontal */
            align-items: center;       /* tengah vertikal */
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 350px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background: white;
        }

        .form-group {
            display: flex;
            margin-bottom: 10px;
        }

        label {
            width: 100px;
        }

        input {
            flex: 1;
            padding: 5px;
        }

        button {
            margin-left: 100px;
            margin-right: 10px;
            background: #2e7d32;
            color: white;
            border: none;
            padding: 7px 15px;
            cursor: pointer;
        }

        .msg {
            margin-top: 15px;
            color: green;
        }
    </style>

</head>

<body>

    <div class="container">

        <h2>Register</h2>

        <form method="post">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" name="send">Send</button>

        </form>

        <?php
        if ($msg != "") {
            echo "<div class='msg'>$msg <br><a href='login.php'>Login</a></div>";
        }
        ?>

    </div>

</body>

</html>