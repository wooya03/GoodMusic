<?php

$num = $_GET["num"];
$page = $_GET["page"];

$con = mysqli_connect("localhost", "user1", "12345", "project");
$sql = "select * from qna where num = $num";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
if ($row["state"] == "답변대기") {
  $sql = "delete from qna where num = $num";
  mysqli_query($con, $sql);
} else {
  echo "<script>alert('답변이 등록되어 삭제가 불가능합니다.')</script>";
  return;
}

mysqli_close($con);

echo "
	     <script>
          alert('삭제되었습니다.');
	        location.href = 'my_qna_list.php?page=$page';
	     </script>
	   ";
?>