<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>굿뮤직</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <style>
        body {
            background-color: lightblue;
        }

        input {
            width: 50%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <h1>상품등록</h1>
        <!-- name, price, sale_price, sale_ratio, cnt, category, image -->
        <form action="product2.php" method="POST" enctype="multipart/form-data">
            상품 이름 <input type="text" name="pname" id="pname"> <br>
            가격 <input type="number" name="price" id="price"> <br>
            할인 가격 <input type="number" name="sale_price" id="sale_price"> <br>
            할인가 <input type="number" name="sale_ratio" id="sale_ratio"> <br>
            수량 <input type="number" name="cnt" id="cnt"> <br>
            카테고리 <input type="text" name="category" id="category"> <br>
            이미지 <input type="file" name="upfile" id="upfile" /> <br>
            <input type="submit" name="upload" value="상품등록" /> <br>

        </form>
</body>

</html>