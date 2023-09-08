<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>굿뮤직</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/product_details.css">
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>

    <section>
        <div class="product-details">
            <?php
            // 데이터베이스 연결
            $con = mysqli_connect("localhost", "user1", "12345", "project");
            if (!$con) {
                die("연결 실패: " . mysqli_connect_error());
            }

            // URL 매개변수로부터 상품 ID 가져오기
            $productID = $_GET['id'];

            // 해당 상품 ID에 대한 정보 가져오기
            $query = "SELECT * FROM product WHERE pid = $productID";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // 개별 상품 정보를 표시합니다.
                echo "<table>";
                echo "<tr><div class='product-image'><img src='./product/" . $row['image'] . "' width='300' height='300'></div></tr>";
                echo "<tr><p class='product-name'>" . $row['name'] . "</p>";
                echo "<table>";
                echo "<td><p class='product-ratio'>" . $row['sale_ratio'] . "%</p></td>";
                echo "<td><p class='product-price'>" . $row['price'] . "원</p>";
                echo "<p class='product-sale_price'>" . $row['sale_price'] . "원</p></td>";
                echo "</table> </tr></table>";
                echo "<br>";
                echo "<input type='button' value='장바구니' onClick='basket.php>''>&nbsp";
                echo "<input type='button' value='구매하기' onClick='purchase.php.php'>";
                echo "<br><br><br><br>";

                // 추가 정보를 표시할 수 있습니다.
            } else {
                echo "<p>해당 상품을 찾을 수 없습니다.</p>";
            }

            mysqli_close($con); // 데이터베이스 연결 닫기
            ?>
        </div>

    </section>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>