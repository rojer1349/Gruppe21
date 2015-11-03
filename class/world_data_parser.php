<?php
class WorldDataParser{
    function parseCSV($file_name, $length, $delimiter){
        if(!is_readable($file_name)){
            print("invalid file path.");
            return null;
        }
        $handle = fopen($file_name , "r");
        if(!$handle){
            print("can't open file");
            return null;
        }
        $parsed_file = array();
        while(($current_line = fgetcsv($handle, $length, $delimiter)) !== FALSE) {
            array_push($parsed_file, $current_line);
        }
        fclose($handle);
        return $parsed_file;
    }
    function blub(){print("blub");}
}
?>
