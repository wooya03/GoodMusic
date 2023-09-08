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
    $uid = $_GET["uid"];    
    // 서버 접속
    $con = mysqli_connect("localhost", "user1", "12345", "project"); 
    // 원하는 작업 수행
    $sql = "select * from user where id = '$uid'"; 
    // $sql에 저장된 명령 실행 
    $result = mysqli_query($con, $sql); 
    // 결과를 카운트하기
    if (mysqli_num_rows($result) == 0) {
        echo '<a href="javascript:window.close()">사용가능한 아이디입니다.</a>';
    }
    else {
        echo '<a href="javascript:window.close()">사용할 수 없습니다.</a>';
    }

    mysqli_close($con);
    ?>
</body>
</html>