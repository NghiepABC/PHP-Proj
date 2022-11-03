<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<p><a style="font-size: 22px; text-decoration: none; margin-left: 5px;" href="index.php?dangxuat=1">Đăng xuất ( <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];

	} ?>)</a></p>