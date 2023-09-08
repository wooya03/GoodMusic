<?php

session_start();
$connect = mysqli_connect("localhost", "user1", "12345", "project");

//name 속성이 add_to_cart 인 form태그에 submit 버튼을 눌렀을때
if (isset($_POST["add_to_cart"])) {

    //쇼핑카트 세션 배열이 존재한다면
    if (isset($_SESSION["shopping_cart"])) {
        //참고:https://www.w3schools.com/php/func_array_column.asp
        //값이 배열로 이루어진 배열에서 key 값이 item_id인 값을 찾아서 배열로 리턴
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");

        //클릭한 상품의 id가 $item_array_id 배열에 존재 하지 않으면
        if (!in_array($_GET["id"], $item_array_id)) {
            //shopping_cart 세션 배열에 들어있는 배열의 수 
            $count = count($_SESSION["shopping_cart"]);

            //클릭한 상품의 데이터를 배열에 넣는다.
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );

            //shopping_cart 세션 배열에서 그 다음 방부터 차례로 넣는다.
            $_SESSION["shopping_cart"][$count] = $item_array;

        } else {
            //클릭한 상품의 id가 $item_array_id 배열에 존재한다면
            echo '<script>alert("같은 상품이 존재합니다.")</script>';
            echo '<script>window.location="index.php"</script>';
        }


        //쇼핑카트 세션 배열이 존재하지 않는다면(즉, 제일 처음 카트 버튼을 눌렀을 때)
    } else {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]

        );

        //key 값이 shopping_cart 인 배열 0번 방에 상품 배열을 넣었다.
        $_SESSION["shopping_cart"][0] = $item_array;

        //echo var_dump($_SESSION["shopping_cart"]);
        //array(1) { [0]=> array(4) { ["item_id"]=> string(1) "1" ["item_name"]=> string(14) "Samsung J2 Pro" ["item_price"]=> string(6) "100.00" ["item_quantity"]=> string(1) "1" } } 

        //echo var_dump($_SESSION["shopping_cart"][0]);
        //array(4) { ["item_id"]=> string(1) "1" ["item_name"]=> string(14) "Samsung J2 Pro" ["item_price"]=> string(6) "100.00" ["item_quantity"]=> string(1) "1" } 
    }

}


if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        //shopping_cart 세션 배열에 존재하는 배열들을 $values 에 넣는다.
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            //배열의 item_id 값이 클릭한 id 값과 같으면
            if ($values["item_id"] == $_GET["id"]) {
                //세션에서 제거한다.
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("삭제 되었습니다")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }
    }

}





?>