<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>굿뮤직</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <script>
        function check() {
            if (document.login_form.uid.value == "") {
                alert("아이디가 없습니다.");
                return;
            }
            if ((document.login_form.pass.value == "")) {
                alert("비밀번호가 없습니다.");
                return;
            }
            document.login_form.submit();
        }
    </script>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="main_img_bar">
            <div id="login_box">
                <div id="login_title">
                    <span>로그인</span>
                </div>
                <div id="login_form">
                    <form name="login_form" method="post" action="sign_in.php">
                        <ul>
                            <li><input type="text" name="uid" placeholder="아이디"></li>
                            <li><input type="password" id="pass" name="pass" placeholder="비밀번호"></li>
                        </ul>
                        <div id="login_btn">
                            <img src="./img/sign_in.png" style="width:100px; height:30px;" onclick="check()">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>