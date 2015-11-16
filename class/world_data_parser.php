<?php
class WorldDataParser{
    // parse csv to array structure
    function parseCSV($file_name, $length, $delimiter){
        if(!is_readable($file_name)){
            print("invalid file path.");
            return;
        }
        $handle = fopen($file_name , "r");
        if(!$handle){
            print("can't open file");
            return;
        }
        // empty array for whole file
        $parsed_file = array();
        // get first line for the cell identifier
        $head = fgetcsv($handle, $length, $delimiter);
        // format the identifier. Trim whitespaces and replace whitespaces with "_"
        for($i = 0; $i < sizeof($head); $i++){
            $head[$i] = str_replace(" ", "_", trim($head[$i]));
        }
        // get the rest
        while(($current_line = fgetcsv($handle, $length, $delimiter)) !== FALSE) {
            // use identifier for the elements
            for($i = 0; $i < sizeof($current_line); $i++){
                $current_line[$head[$i]] = trim($current_line[$i]);
                unset($current_line[$i]);
            }
            $current_line = $current_line;
            // push current array to $parsed_file
            array_push($parsed_file, $current_line);
        }
        // close fh
        fclose($handle);
        return $parsed_file;
    }
    // parse array to xml revursively
    function array_to_xml($data, &$xml_data) {
        // for every country
        foreach( $data as $key => $value ) {
            // value is an array get a step deeper
            if( is_array($value) ) {
                // if key is a index write country
                if( is_numeric($key) ){
                    $key = "country";
                }
                // add subnode $key, this could be an identifier (e.g. id) or country
                $subnode = $xml_data->addChild($key);
                // call function recursively
                $this->array_to_xml($value, $subnode);
            } else {
                // if it is a "leaf" just add it
                $xml_data->addChild("$key",htmlspecialchars("$value"));
            }
         }
    }
    // parse array to xml and save to file
    function saveXML($d_array, $dest){
        // new XML object
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><countries></countries>');
        // parse XML
        $this->array_to_xml($d_array, $xml);
        // open file for write
        if(!$fh = fopen($dest , 'w+')){ return false;}
        // write to file
        if(!fwrite($fh, $xml->asXML())){ return false; }
        // close file
        fclose($fh);
        return true;
    }
    function printXML(){

        // Load the XML source
        $xml = new DOMDocument;
        $xml->load('res/world_data.xml');

        $xsl = new DOMDocument;
        $xsl->load('res/world_data.xslt');

        // Configure the transformer
        $proc = new XSLTProcessor();
        $proc->importStylesheet($xsl);

		// xml parce
		
		echo $proc->transformToXML($xml);
		
		


    }
}
?>
