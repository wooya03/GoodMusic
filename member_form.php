<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>굿뮤직</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/member.css">
    <script>
        function check() {
            if (document.member_form.uid.value == "") {
                alert("아이디가 없습니다.");
                return;
            }
            if (
                document.member_form.pass1.value == "" ||
                document.member_form.pass2.value == ""
            ) {
                alert("비밀번호가 없습니다.");
                return;
            }
            if (document.member_form.pass1.value != document.member_form.pass2.value) {
                alert("비밀번호가 서로 다릅니다.");
                return;
            }
            if (
                document.member_form.pass1.value.length < 8 ||
                document.member_form.pass1.value.length > 15
            ) {
                alert("비밀번호는 8~15자리입니다.");
            }
            if (document.member_form.uname.value == "") {
                alert("이름이 없습니다.");
                return;
            }
            document.member_form.submit();
        }

        function newwin() {
            // 새 창을 열기
            window.open(
                "member_id_check.php?uid=" + document.member_form.uid.value,
                "IDcheck",
                "width=300,height=300, scrollbars=no,resizable=yes"
            );
        }
    </script>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="main_content">
            <div id="join_box">
                <form name="member_form" action="member_insert.php" method="post">
                    <h2>회원가입</h2>
                    <div class="form id">
                        <div class="col1">아이디</div>
                        <div class="col2"> <input type="text" name="uid" id="uid"> <input type="button" value="중복확인"
                                onclick="newwin()"></div>
                    </div>
                    <br>
                    <div class="form">
                        <div class="col1">비밀번호</div>
                        <div class="col2"> <input type="password" name="pass1" id="pass1" placeholder="8~15자리"> </div>
                    </div>
                    <br>
                    <div class="form">
                        <div class="col1">비밀번호 확인</div>
                        <div class="col2"> <input type="password" name="pass2" id="pass2"> </div>
                    </div>
                    <br>
                    <div class="form">
                        <div class="col1">이름</div>
                        <div class="col2">
                            <input type="text" name="uname" id="uname">
                        </div>
                    </div>
                    <br>
                    <div class="form email">
                        <div class="col1"> 이메일</div>
                        <div class="col2"><input type="text" name="email1" id="email1"> @ <input type="text"
                                name="email2" id="email2">
                        </div>
                    </div>
                    <br>
                    <div class="form">
                        <div class="col1">주소</div>
                        <div class="col2"><input type="text" name="address" id="address">
                        </div>
                    </div>
                    <div class="buttons">
                        <img src="./img/sign_up.png" onclick="check()">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>