<?php

// 1. DB 연결
$con = mysqli_connect("localhost", "user1", "12345", "project"); // 서버 접속
// 2. 원하는 작업 수행 : SQL 명령어
session_start();
$userid = $_SESSION["userid"];
$sql = "delete from user where id='$userid'";

mysqli_query($con, $sql); // #$sql에 저장된 명령 실행

// 3. DB 닫기 - 연결 끊기  
mysqli_close($con);

unset($_SESSION["userid"]);
unset($_SESSION["username"]);
unset($_SESSION["userpoint"]);
?>
<script>
    alert("성공적으로 탈퇴되었습니다.");
    location.href = "index.php";
</script>