<?php
include 'komik_data.php';

header('Content-Type: application/json');
echo json_encode($komikList);
