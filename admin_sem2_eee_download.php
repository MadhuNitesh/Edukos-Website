<?php

    if(!empty($_GET['file']))
    {

        $filename = basename($_GET['file']);
        $filepath = "Uploads/sem2/eee/".$filename;


        if(!empty($filename) && file_exists($filepath))
        {
            //define header
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename= $filename");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");
            
            //read file 
            readfile($filepath);
            exit;
        }
        else
        {
            echo "file not exit";
        }
    }

?>