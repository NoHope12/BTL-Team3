<?php 
	include_once('../config/database.php');
	if(isset($_GET['view'])){	// isset : kiem tra bien da duoc khoi tao hay chua
		$view=$_GET['view'];
		switch ($view) {
			case 'quanlychuyenphong':
				?><h4>Quản Lý Đăng Ký chuyển Phòng -> Xử Lý Đăng Ký phòng </h4><hr> <?php 
					include_once('quanlychuyenphong/danhsachdangky.php'); 	
				break;
			case 'chitietdangky':
				?><h4>Quản Lý Đăng Ký Phòng -> Xử Lý Đăng Ký -> Chi Tiết Đăng Ký</h4><hr> <?php 
					include_once('quanlychuyenphong/chitietdangky.php');
				break;	
			default:
					
				break;
		}
	}
	else{
		include_once('dondathang/dondathang.php');
	}
?>