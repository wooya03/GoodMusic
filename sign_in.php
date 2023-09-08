<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>굿뮤직</title>
</head>

<body>
    <?php
    $uid = $_POST["uid"];
    $pass = $_POST["pass"];
    $con = mysqli_connect("localhost", "user1", "12345", "project");
    $sql = "select * from user where id = '$uid' && pass = '$pass'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);

    if ($num_record) {
        session_start();
        $row = mysqli_fetch_array($result);
        $_SESSION["userid"] = $row["id"];
        $_SESSION["username"] = $row["name"];
        $_SESSION["userpoint"] = $row["point"];

        $s = '<script>
        alert("로그인 되었습니다.");
        location.href="index.php";
        </script>';
        echo $s;
    } else {
        $s = '<script>
        alert("아이디 또는 비밀번호 오류입니다");
        location.href="sign_in_form.php";
        </script>';
        echo $s;
    }
    mysqli_close($con);
    ?>
</body>

</html>