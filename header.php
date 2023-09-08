<?php
session_start();
if (isset($_SESSION["userid"]))
    $userid = $_SESSION["userid"];
else
    $userid = "";
if (isset($_SESSION["username"]))
    $username = $_SESSION["username"];
else
    $username = "";
if (isset($_SESSION["userpoint"]))
    $userpoint = $_SESSION["userpoint"];
else
    $userpoint = "";

?>
<div id="top">
    <h3>
        <a href="index.php"><img src="./img/logo.png"></a>
    </h3>
    <ul id="top_menu" style="float: right;">
        <?php
        if (!$userid) {
            ?>
            <li><a href="sign_in_form.php">로그인</a></li>
            <li> | </li>
            <li><a href="member_form.php">회원 가입</a> </li>
            <li> | </li>
            <li><a>장바구니</a></li>
            <?php
        } else {
            $logged = $username . "(" . $userid . ")님 방문을 환영합니다.";
            ?>
            <li>
                <?= $logged ?>
            </li>
            <li> | </li>
            <li><a href="logout.php">로그아웃</a> </li>
            <li> | </li>
            <li><a>장바구니</a></li>
            <li> | </li>
            <li><a href="mypage.php">회원정보·주문배송</a></li>
            <?php
        }
        ?>
    </ul>
</div>
<br>
<div id="menu_bar">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="electric_guitar.php">기타</a></li>
        <li><a href="drum_main.php">드럼</a></li>
        <li><a href="keyboard_main.php">건반</a></li>
        <li><a href="recording_main.php">레코딩</a></li>
    </ul>
</div>