<?php 
if(isset($_POST[]))
	function $connection(){
		$conn = new mysqli_connect('localhost','root','ebus');
		$query = "SELECT * FROM diemban ";
		if(mysqli_query($conn, $query)){
			echo "Thêm thành công"
		}
		eles{
			echo "Không thể thêm";
		}
	}
	mysqli_close($conn);
?>