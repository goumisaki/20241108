<?php

function loadCSV($fileName , $seveData){
    $fo = fopen($fileName,'a');
    if($fo){
        $row = '';
        foreach($seveData as $key => $val){
            if($$key === array_key_last($saveData)){
                $row .= str_replace(PHP_EOL, '<br>',$val) . "\r\n";
            }else{
                $row .= str_replace(PHP_EOL, '<br>',$val). ',';
            }
        }
        fwrite($fo,$row);
    }else{
        echo '読込エラー';
    }
    fclose($fo);
}
