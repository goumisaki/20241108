<?php
function fileLoad(){
    //ファイルオープン
    $fo = fopen('log.csv','r');
    $data = [];
    if($fo){
        while ($row = fgetcsv($fo)){
            $data[] =$row;
        }    
    }else{
        echo '読込エラー';
    }
    //ファイルクローズ
    fclose($fo);//閉じる
    return $data;
}

function saveMes($mes,$user,$gender){

    $fo = fopen('log.csv','a');
    if($fo){
        fwrite($fo,"{$mes},{$user},{$gender}\r\n");
    }else{
        echo'読込エラー';
    }
    fclose($fo);
}