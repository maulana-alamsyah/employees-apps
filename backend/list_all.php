<?php
require_once '../koneksi.php';

$sql = "SELECT * FROM pegawai ORDER BY nip ASC";
$result = pg_query($sql);
echo json_encode(pg_fetch_all($result));
?>