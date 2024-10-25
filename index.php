<?php
 include 'lib/library.php';
 include 'lib/helper.php';
 cekLogin();
 
 $sql = 'SELECT * FROM tamu_dishub';
 $search = isset($_GET['search']) ? $_GET['search'] : '';
 if (!empty($search)) {
     $sql .= " WHERE id LIKE '%$search%' OR nama LIKE '%$search%'";
 }
 
 $order_field = @$_GET['sort'];
 $order_mode = @$_GET['order'];

 if (!empty($order_field) && !empty ($order_mode)) $sql .= " ORDER BY  $order_field $order_mode";

 $listtamu_dishub = $mysqli->query($sql);
 
 include 'views/daftar.php';
?>