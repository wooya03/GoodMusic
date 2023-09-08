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
    $pass = $_POST["pass1"];
    $uname = $_POST["uname"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];
    $email = $email1."@".$email2;
    $address = $_POST["address"];
    $regist_day = date("Y-m-d H:i:s");
    $point = 0;

    // DB에 사용자 입력 값들을 저장 DB작업
    // 1. DB 연결
    $con = mysqli_connect("localhost", "user1", "12345", "project"); // 서버 접속
    // 2. 원하는 작업 수행 : SQL 명령어
    $sql = "insert into user (id, pass, name, email, address, regist_day, point) values ('$uid', '$pass', '$uname', '$email', '$address', '$regist_day', $point)";

    mysqli_query($con, $sql); // #$sql에 저장된 명령 실행

    // 3. DB 닫기 - 연결 끊기  
    mysqli_close($con);
    ?>
    <script>
        alert("가입되었습니다.");
        location.href = "index.php";
    </script>
</body>
</html>