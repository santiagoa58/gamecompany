<?php
    $colNames = array("First Name", "Last Name", "Email Address");

    $data = array();
    for($i = 0; $i < 10; $i++)
    {
        $data[$i] = array("abc" . $i, "def", "ghi");
    }

    foreach($colNames as $col)
    {
        echo $col . "\t";
    }
    

    $q = $_REQUEST["q"];

    if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($data as $data1) {
        foreach($data1 as $data2){
        if (stristr($q, substr($data2, 0, $len))) {
            echo $data1[0] . "\t" . $data1[1] . "\t" . $data1[2] . "\t" ;
        }
    }
}
    }
?>