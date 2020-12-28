<?php
    $myvar = 'states.json';
    $filecontent = json_decode(file_get_contents($myvar));
    $states = $filecontent->maharastra;
    $gotvars = $_POST[ array_keys($_POST)[0]];
    echo $gotvars;
    if(file_exists($myvar)){
        $file = fopen($myvar,'w');
        if(in_array($gotvars,$states)){
            echo 'came inside if';
            $index=array_search($gotvars,$states);
            array_splice($states,$index,1);
        }
        
        $filecontent->maharastra = $states;
        fwrite($file, json_encode($filecontent));
        fclose($file);
        header('location: index.php');
    }
?>