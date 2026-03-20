<?php
$info=$_GET['info'] ?? 'No info provided';
$data=$_GET['data'] ?? 'No data provided';
echo "Info: " . htmlspecialchars($info) . ", Data: " . htmlspecialchars($data);
?>