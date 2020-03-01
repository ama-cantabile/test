<?php
    require_once("inc/config.class.php");
    require_once("inc/file.class.php");
    require_once("inc/fileParser.class.php");
    require_once("inc/page.class.php");

    $contents = file::read();
    $columns = fileParser::parse($contents);
    
    for($x = 0; $x < count($columns); $x++){
        for($y = 0; $y < 5; $y++){
            if($x == 0){
                $columnName[] = $columns[$x][$y];
            }
            else{
                $columnContents[$x-1][$y] = $columns[$x][$y];
            }
        }
    }

    page::table($columnName, $columnContents);

?>