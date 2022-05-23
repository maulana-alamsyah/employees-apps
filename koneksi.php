<?php
$conn_str = "host=tiny.db.elephantsql.com " .
    "port=5432 " .
    "user=imgotslb " .
    "dbname=imgotslb " .
    "password=eQ0GQPKOc3bneuBgsWs5H2JBhr9r5vyK";
$conn = pg_connect($conn_str);

//cek koneksi
/* if($conn) {
    header('Location: ./frontend');
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
} */
?>