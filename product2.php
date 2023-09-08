<?php
$upload_dir = './product/';
$upfile = $_POST["upfile"];
$upfile_name = $_FILES["upfile"]["name"];
$upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
$upfile_type = $_FILES["upfile"]["type"];
$upfile_size = $_FILES["upfile"]["size"];
$upfile_error = $_FILES["upfile"]["error"];

if ($upfile_name && !$upfile_error) {
    $file = explode(".", $upfile_name);
    $file_name = $file[0];
    $file_ext = $file[1];

    $new_file_name = date("Y_m_d_H_i_s");
    $copied_file_name = $new_file_name . "." . $file_ext;
    $uploaded_file = $upload_dir . $copied_file_name;

    if ($upfile_size > 1000000) {
        echo ("
            <script>
            alert('업로드 파일 크기가 지정된 용량(1MB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
            history.go(-1)
            </script>
        ");
        exit;
    }

    if (!move_uploaded_file($upfile_tmp_name, $uploaded_file)) {
        echo ("
            <script>
            alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
            history.go(-1)
            </script>
        ");
        exit;
    }
} else {
    $upfile_name = "";
    $upfile_type = "";
    $copied_file_name = "";
}
$pname = $_POST["pname"];
$price = $_POST["price"];
$sale_price = $_POST["sale_price"];
$sale_ratio = $_POST["sale_ratio"];
$cnt = $_POST["cnt"];
$category = $_POST["category"];

// Connect to the database
$con = mysqli_connect("localhost", "user1", "12345", "project");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL query
$query = "INSERT INTO product(name, price, sale_price, sale_ratio, cnt, category, image) 
    VALUES ('$pname', '$price', '$sale_price', '$sale_ratio', '$cnt', '$category', '$upfile_name')";

// Execute the query
if (mysqli_query($con, $query)) {
    echo '<script type="text/javascript"> alert("Data inserted successfully."); </script>';
} else {
    echo '<script type="text/javascript"> alert("Error inserting data: ' . mysqli_error($con) . '"); </script>';
}

mysqli_close($con); // Close the database connection

echo "
    <script>
        location.href = 'product.php';
    </script>
";
?>