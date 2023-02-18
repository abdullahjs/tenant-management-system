<?php
    require_once "helpers.php";
    require_once "database.php";

    $name = $email = $password = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = formatInput($_POST["name"]);
        $email = formatInput($_POST["email"]);
        $password = formatInput($_POST["password"]);

        $sql = $pdo->prepare("INSERT INTO users(name, email, password) VALUES (:name, :email, :password)");

        $sql->bindParam(":name", $name);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":password", $password);

        if ($sql->execute()){
            echo "Your registration success";
        }else {
            echo "Unable to create new user";
        }

        echo "Your Registration Success";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <input type="submit" value="Register">
        </div>
    </form>
</body>
</html>