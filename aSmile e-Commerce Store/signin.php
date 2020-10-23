<?php
    include 'dbconnectuser.php';
    $email = val($_POST["email"]);
    $password = val($_POST["password"]);
    function val($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $db = ("SELECT name FROM user_info WHERE email='$email' AND password='$password'");
    $result = $conn->query($db);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $name =  $row["name"];
        }
        session_start();
        setcookie("email", "$name", time() + 86400, "/");
        header("Location: signedin.php?email=" . $email);
    } 
    else {
        echo "No";
        header("Location: Form.php?email=" . $email);
    }
    $conn->close();
?>