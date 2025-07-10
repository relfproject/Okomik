<?php
include 'komik_data.php';

foreach ($komikList as $slug => &$komik) {
    $komik['chapters'] = array_map(fn($i) => sprintf("Chapter %02d", $i), range(1, 10));
}

file_put_contents('komik_data.php', "<?php\n$komikList = " . var_export($komikList, true) . ";\n");
echo "Semua komik sekarang punya 10 chapter!\n";
?>