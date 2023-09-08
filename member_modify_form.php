<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>굿뮤직</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/member.css">
    <script type="text/javascript" src="./js/member_modify.js"></script>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <?php
    $con = mysqli_connect("localhost", "user1", "12345", "project");
    $sql = "select * from user where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];

    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

    $address = $row["address"];
    mysqli_close($con);
    ?>
    <section>
        <div id="main_content">
            <div id="join_box">
                <form name="member_form" method="post" action="member_modify.php?id=<?= $userid ?>">
                    <h2>회원 정보수정</h2>
                    <div class="form id">
                        <div class="col1">아이디</div>
                        <div class="col2">
                            <?= $userid ?>
                        </div>
                    </div>
                    <br>
                    <div class="form">
                        <div class="col1">비밀번호</div>
                        <div class="col2">
                            <input type="password" name="pass" value="<?= $pass ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form">
                        <div class="col1">비밀번호 확인</div>
                        <div class="col2">
                            <input type="password" name="pass_confirm" value="<?= $pass ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form">
                        <div class="col1">이름</div>
                        <div class="col2">
                            <input type="text" name="name" value="<?= $name ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form email">
                        <div class="col1">이메일</div>
                        <div class="col2">
                            <input type="text" name="email1" value="<?= $email1 ?>">@<input type="text" name="email2"
                                value="<?= $email2 ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form">
                        <div class="col1">주소</div>
                        <div class="col2"><input type="text" name="address" id="address" value="<?= $address ?>">
                        </div>
                    </div>
                    <br>
                    <div class="buttons">
                        <img src="./img/ok.png" onclick="check_input()">
                    </div>
                </form>
            </div> <!-- join_box -->
        </div> <!-- main_content -->
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>