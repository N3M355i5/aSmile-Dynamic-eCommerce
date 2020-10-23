<?php
    include 'dbconnectuser.php';
    $name = val($_POST["name"]);
    $mobile = val($_POST["mobile"]);
    $address = val($_POST["address"]);
    $email = val($_POST["email"]);
    $password = val($_POST["password"]);
    function val($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $sql = "INSERT INTO user_info (name, mobile, address, email, password) VALUES('$name', '$mobile', '$address', '$email', '$password')";
    $db = ("SELECT email FROM user_info WHERE email='$email'");
    $result = $conn->query($db);
    if(mysqli_fetch_array($result) > 0 ) { //check if there is already an entry for that username
        header("Location: Form.php?email=" . $email);
    }
    else {
        $result = $conn->query($sql);
        setcookie("email", "$name", time() + 86400, "/");
        header("Location: signedin.php?email=" . $email);
    }
    $conn->close();
?>