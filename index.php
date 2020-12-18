/<?php
    $datafile = "states.json";
    $file=fopen($datafile, 'r');
    if($file != NULL || $file != false){
        echo 'opened <br>';
        $filesize = filesize($datafile);
        echo 'filesize';
        echo $filesize;
        $filecontents = fread($file, $filesize);
        fclose($file);
        echo '<ul>';
        foreach(json_decode($filecontents)->maharastra as $st){
            echo "<li>$st</li>";
        }
        echo '</ul>';
        echo "$filecontents";


        echo '<h3>display an input box to add states</h3>';
        echo '<form action="save.php" method="POST"><input name="states"><br><button>Add</button></form> <br><br>';
        print_r(array_values(json_decode($filecontents)->maharastra));

        

    }else{
        echo 'file not found <br>';
    }
    
?>