<a href="kieudulieu.php">Kiểu dữ liệu</a>
<div>

</div>
<?php

if (isset($_POST['name'])) {
  echo $_POST['name'];
  echo hash("sha256", $_POST['name']);
}


?>

<form action="/" method="post">
  <input type="text" name="name"><br>
  <input type="submit">
</form>