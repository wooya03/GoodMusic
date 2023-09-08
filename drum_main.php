<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>굿뮤직</title>
	<link rel="stylesheet" type="text/css" href="./css/common.css">
</head>

<body>
	<header>
		<?php include "header.php"; ?>
	</header>
	<section>
		<?php
		// 페이지 번호 및 한 페이지에 보여줄 상품 수 설정
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$productsPerPage = 25;
		// 데이터베이스에 연결
		$con = mysqli_connect("localhost", "user1", "12345", "project");
		if (!$con) {
			die("연결 실패: " . mysqli_connect_error());
		}

		// 카테고리가 "electric guitar"인 상품 데이터 가져오기
		$query = "SELECT * FROM product WHERE category = 'drum'";
		$result = mysqli_query($con, $query);

		// 전체 상품 수 계산
		$totalProducts = mysqli_num_rows($result);

		// 페이지에 해당하는 상품 가져오기
		$offset = ($page - 1) * $productsPerPage;
		$query .= " LIMIT $offset, $productsPerPage";
		$result = mysqli_query($con, $query);

		if (mysqli_num_rows($result) > 0) {
			$row_count = 0;
			echo "<table cellpadding='0' cellspacing='0' width='40%' height='250'
            style='border:0px solid black;margin-left:auto;margin-right:auto;'>";
			while ($row = mysqli_fetch_assoc($result)) {
				if ($row_count % 5 == 0) {
					echo "<tr>";
				}

				echo "<td style='padding-right: 40ox;'>";
				echo "<a href='product_details.php?id=" . $row["pid"] . "'><img src='./product/" . $row['image'] . "' width='150' height='150'></a>";
				echo "<p>" . $row['name'] . "</p>";
				echo "<font style='text-decoration:line-through;'><strong></strong> " . $row['price'] . "원</font> <br>";
				echo "<font><b>" . $row['sale_price'] . "원</b></font>&nbsp";
				echo "<font style='font-size:25px; text-color:red; font-weight:bold;'>" . $row['sale_ratio'] . "%</font>";
				echo "</td>";

				$row_count++;

				if ($row_count % 5 == 0) {
					echo "</tr>";
				}
			}
			echo "</table>";
		} else {
			echo "<p>해당 카테고리에 상품이 없습니다.</p>";
		}

		mysqli_close($con); // 데이터베이스 연결 닫기
		
		// 페이지 링크 출력
		$totalPages = ceil($totalProducts / $productsPerPage);
		if ($totalPages > 1) {
			echo "<p>페이지: ";
			for ($i = 1; $i <= $totalPages; $i++) {
				if ($i == $page) {
					echo "<strong>$i</strong> ";
				} else {
					echo "<a href='drum_main.php?page=$i'>$i</a> ";
				}
			}
			echo "</p>";
		}
		?>
	</section>
	<footer>
		<?php include "footer.php"; ?>
	</footer>
</body>

</html>