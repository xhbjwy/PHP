<?php 
	include 'conn.php';

	$fl = $_POST['fl'];

	if(!empty($_FILES['icon']['name'])){
		    			$icon=$_FILES['icon'];
		    			$icon_path=$fl."/".iconv("utf-8", "utf-8",$_FILES['icon']['name']);
		    			move_uploaded_file($icon['tmp_name'], $icon_path);
		    			$sqlstr="insert into tp (tplj,tpfl) values ('$icon_path','$fl')";
                                        mysql_query("set names 'utf8'"); 
		    			mysqli_query($conn,$sqlstr);
		    			header('location:index.php');
		    		}


 ?>