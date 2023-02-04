<?php
$is_invalid = false;
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
            WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if($user){
        if(password_verify($_POST["password"], $user["password_hash"])){
            session_start();

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["name"];

            header("Location: index.php");
            exit;
        }
    }
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style_login.css" />

    <!-- CSS only -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous"
    />

    <!-- JavaScript Bundle with Popper -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
    ></script>
</head>
<body>
<div class="wrapper">
    <div class="logo">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            fill="currentColor"
            class="logo"
            viewBox="0 0 16 16"
        >
            <path
                d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"
            />
        </svg>
    </div>
    <div class="text-center mt-4 name">Poster</div>



    <form class="p-3 mt-3" method="post">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input
                type="email"
                name="email"
                id="email"
                placeholder="E-mail adress"
                value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
            />
        </div>
        <button class="btn mt-3">Login</button>
    </form>
    <?php if ($is_invalid):?>
        <em>Invalid login</em>
    <?php endif; ?>
    <div class="text-center fs-6">
        <a href="register.html">Sign up</a>
    </div>
</div>
</body>
</html>

