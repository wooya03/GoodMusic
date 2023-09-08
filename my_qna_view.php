<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>굿뮤직</title>
	<link rel="stylesheet" type="text/css" href="./css/common.css">
	<link rel="stylesheet" type="text/css" href="./css/board.css">
</head>

<body>
	<header>
		<?php include "header.php"; ?>
	</header>
	<section>
		<div id="board_box">
			<h3 class="title">
				Q&A > 내용보기
			</h3>
			<?php
			$num = $_GET["num"];
			$page = $_GET["page"];

			$con = mysqli_connect("localhost", "user1", "12345", "project");
			$sql = "select * from qna where num=$num";
			$result = mysqli_query($con, $sql);

			$row = mysqli_fetch_array($result);
			$id = $row["id"];
			$name = $row["name"];
			$regist_day = $row["regist_day"];
			$subject = $row["subject"];
			$state = $row["state"];
			$content = $row["content"];
			$content = str_replace(" ", "&nbsp;", $content);
			$content = str_replace("\n", "<br>", $content);
			?>
			<ul id="view_content">
				<li>
					<span class="col1"><b>제목 :</b>
						<?= $subject ?>
					</span>
					<span class="col2">
						<?= $name ?> |
						<?= $regist_day ?>
						<?= $state ?>
					</span>
				</li>
				<li>
					<?= $content ?>
				</li>
			</ul>
			<ul class="buttons">
				<li><button onclick="location.href='my_qna_list.php?page=<?= $page ?>'">목록</button></li>
				<li><button
						onclick="location.href='my_qna_modify_form.php?num=<?= $num ?>&page=<?= $page ?>'">수정</button>
				</li>
				<li><button onclick="location.href='my_qna_delete.php?num=<?= $num ?>&page=<?= $page ?>'">삭제</button>
				</li>
				<li><button onclick="location.href='my_qna_form.php'">문의 작성</button></li>
			</ul>
		</div> <!-- board_box -->
	</section>
	<footer>
		<?php include "footer.php"; ?>
	</footer>
</body>

</html>