<?php

          $files = glob('download/*'); //get all file names
            foreach($files as $file){
            if(is_file($file))
            unlink($file); //delete file
            }

$upload_dir = "download/";
$img = $_POST['hidden_data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace('', '+', $img);
$data = base64_decode($img);
$file = $upload_dir . "files.png";
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
?>

