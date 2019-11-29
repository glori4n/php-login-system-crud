<?php

if(isset($_FILES['file'])){

    if(count($_FILES['file']['tmp_name']) > 0){
        for($c=0;$c<count($_FILES['file']['tmp_name']);$c++){
    
            $path = $_FILES['file']['name'][$c];
            $extension = pathinfo($path, PATHINFO_EXTENSION);

            $filename = md5($_FILES['file']['name'][$c].time().rand(0,999)).'.'.$extension;
        
            move_uploaded_file($_FILES['file']['tmp_name'][$c], 'uploaded-files/'.$filename);
        
        }

        $msg = count($_FILES['file']['tmp_name']);

            if($msg > 1){
                echo "The files were added.";
            }else{
                echo "The file was added.";
            }
            header("Refresh:2; url=".$_SERVER['HTTP_REFERER']);
        
    }else{
        echo "No files were added.";
    }
}

?>