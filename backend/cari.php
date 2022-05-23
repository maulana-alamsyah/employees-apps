<?php
require_once '../koneksi.php';

$rawData = file_get_contents('php://input');
$data = json_decode($rawData);

$sql = "SELECT * FROM pegawai WHERE nip LIKE '%" . $data->cari . "%' OR nama LIKE '%" . $data->cari . "%' OR alamat LIKE '%" . $data->cari . "%'";
$result = pg_query($sql);

echo json_encode(pg_fetch_all($result));
?>