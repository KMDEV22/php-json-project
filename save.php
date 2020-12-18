<?php
    $myvar = 'states.json';
    $filecontent = json_decode(file_get_contents($myvar));
    $states = $filecontent->maharastra;
    $gotvars = $_POST["states"];
    echo $gotvars;
    if(file_exists($myvar)){
        $file = fopen($myvar,'w');
        if(!in_array($gotvars,$states)){
            $can_push = true;
            foreach($states as $st){
                if(in_array($st, ))
            }
            array_push($states,$gotvars);
        }
        
        $filecontent->maharastra = $states;
        fwrite($file, json_encode($filecontent));
        fclose($file);
        header('location: index.php');
    }
?>