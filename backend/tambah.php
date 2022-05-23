<?php
require_once '../koneksi.php';

$raw = file_get_contents('php://input');
$data = json_decode($raw);


$sql = "INSERT INTO pegawai(nip, nama, alamat) VALUES('" .
    $data->nip . "','" . $data->nama . "','" . $data->alamat . "')";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->result = "success";
} else {
    $obj->result = "failed";
}
echo json_encode($obj);
?>