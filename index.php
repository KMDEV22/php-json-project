<?php
    $datafile = "states.json";
    $file=fopen($datafile, 'r');
    if($file != NULL || $file != false){
        echo 'opened <br>';
        $filesize = filesize($datafile);
        echo 'filesize';
        echo $filesize;
        $filecontents = fread($file, $filesize);
        fclose($file);
        $ctr=1;
        echo '<link rel ="stylesheet" href="./style.css">';
        echo '<ul>';
        foreach(json_decode($filecontents)->maharastra as $st){
            echo "<li><form action='delete.php' method='POST'><span>$st</span><input name=\"state".$ctr++."\" value=\"$st\" type=\"hidden\"><button class='btn'><i  class='delete'></i></button></form></li>";
        }
        echo '</ul>';
        echo "$filecontents";


        echo '<h3>display an input box to add states</h3>';
        echo '<form action="save.php" method="POST"><input name="states"><br><button>Add</button></form> <br><br>';

        

    }else{
        echo 'file not found <br>';
    }

    echo "<script>function show(item){  alert(item)     }</script>"
?>
