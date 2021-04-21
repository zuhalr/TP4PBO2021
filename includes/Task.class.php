<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_utang
		$query = "SELECT * FROM tb_utang";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function ulang(){
		// Query mysql select data ke tb_utang
		$query = "SELECT * FROM tb_utang";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// function subjek(){
	// 	$query = "SELECT * FROM tb_utang ORDER BY subject_td ASC";
	// 	return $this->execute($query);
	// }

	// function prioritas(){
	// 	$query = "SELECT * FROM tb_utang ORDER BY priority_td ASC";
	// 	return $this->execute($query);
	// }

	// function garismati(){
	// 	$query = "SELECT * FROM tb_utang ORDER BY deadline_td ASC";
	// 	return $this->execute($query);
	// }

	// function statusnya(){
	// 	$query = "SELECT * FROM tb_utang ORDER BY status_td ASC";
	// 	return $this->execute($query);
	// }
	
	//Menambah data
	function addData(){
		$a = $_POST["tname"];
		$b =  $_POST["tjumlah"];
		$c = $_POST["tsubject"];
		$d = $_POST["tpriority"];
		$e = $_POST["tdeadline"];
		$f = "Belum";
		$g = $_POST["tpengutang"];
		$query = "INSERT INTO tb_utang (name_utang, jumlah_utang, kategori_utang, priority_utang, deadline_utang, status_utang,name_pengutang) VALUES ('$a', '$b', '$c', '$d', '$e', '$f','$g')";

		//eksekusi
		return $this->execute($query);
	}

	function deleteData($id){
		$query = "DELETE FROM tb_utang WHERE id = $id";

		return $this->execute($query);
	}

	function selesai($id){
		$query = "UPDATE tb_utang SET status_utang = 'Sudah' WHERE id = $id";
		return $this->execute($query);
	}
}



?>
