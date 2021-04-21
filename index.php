<?php

/******************************************
PRAKTIKUM RPL
******************************************/

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");



// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();

if(!empty($_POST)){
	$otask->addData();
}

if (isset($_GET['id_hapus'])){
	$aaa = $_GET['id_hapus'];
	$otask->deleteData($aaa);
	unset($_GET['id_hapus']);
}

if (isset($_GET['id_status'])){
	$aaa = $_GET['id_status'];
	$otask->selesai($aaa);
	unset($_GET['id_status']);
}

if (isset($GET['ida'])){
	$aaa = $_GET['ida'];
	if($aaa == 1){
		$otask->subjek();
	}else if($aaa == 2){
		$otask->prioritas();
	}else if($aaa == 3){
		$otask->garismati();
	}else if($aaa == 4){
		$otask->statusnya();
	}else if($aaa == 5){
		$otask->ulang();
	}
}else{
	$otask->getTask();
}

// Memanggil method getTask di kelas Task


// Proses mengisi tabel dengan data
$data = null;
$no = 1;

while (list($id, $tname, $tdeadline,$tpengutang,$tsubject, $tjumlah , $tpriority, $tstatus) = $otask->getResult()) {
	// Tampilan jika status task nya sudah dikerjakan
	if($tstatus == "Sudah"){
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tname . "</td>
		<td>" . $tjumlah . "</td>
		<td>" . $tpengutang . "</td>
		<td>" . $tsubject . "</td>
		<td>" . $tpriority . "</td>
		<td>" . $tdeadline . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		</td>
		</tr>";
		$no++;
	}

	// Tampilan jika status task nya belum dikerjakan
	else{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tname . "</td>
		<td>" . $tjumlah . "</td>
		<td>" . $tpengutang . "</td>
		<td>" . $tsubject . "</td>
		<td>" . $tpriority . "</td>
		<td>" . $tdeadline . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		<button class='btn btn-success' ><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold;'>Selesai</a></button>
		</td>
		</tr>";
		$no++;
	}
}


    


// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("templates/skin.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();
