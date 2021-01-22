<?php
include '../config/dbcon.php';

$id = $_REQUEST['id'];
$matric_no = $_REQUEST['matric_no'];
$password = $_REQUEST['password'];
$kelas = $_REQUEST['kelas'];
$status = $_REQUEST['status'];
$aksi = $_REQUEST['aksi'];

switch($aksi) {

	case 'show' :
		{

			//get user
			$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
			$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
			$offset = ($page - 1) * $rows;
			$result = array();

			$rs = mysql_query("select count(*) from students");
			$row = mysql_fetch_row($rs);
			$result["total"] = $row[0];
			$rs = mysql_query("select * from students limit $offset,$rows");

			$items = array();
			while ($row = mysql_fetch_object($rs)) {
				array_push($items, $row);
			}
			$result["rows"] = $items;

			echo json_encode($result);

		}
		break;
	case 'add' :
		{
			//save user

			$sql = "insert into students(matric_no,password,kelas) values('$matric_no','$password','$kelas')";
			$result = @mysql_query($sql);
			if ($result) {
				echo json_encode(array('success' => true));
			} else {
				echo json_encode(array('msg' => 'Terjadi kesalahan .'));
			}
		}//end of save
		break;
		
	case 'edit' :
		{
			//update user

			$sql = "update students set matric_no='$matric_no',password=$password, kelas='$kelas'";
			$result = @mysql_query($sql);
			if ($result) {
				echo json_encode(array('success' => true));
			} else {
				echo json_encode(array('msg' => 'Terjadi kesalahan .'));
			}
		}
		break;

	case 'hapus' : {
		//remove user ;

		$sql = "delete from students where matric_no='$matric_no'";
		$result = @mysql_query($sql);
		if ($result) {
			echo json_encode(array('success' => true));
		} else {
			echo json_encode(array('msg' => 'Terjadi kesalahan .'));
		}
	}
}//end of switch
?>