
    <?php 

          $files = glob('upload/*'); //get all file names
            foreach($files as $file){
            if(is_file($file))
            unlink($file); //delete file
            }



         if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 20000000000)) {
          if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br>"; } 
         else {
         if (file_exists("upload/" . $_FILES["file"]["name"]))
           {
           echo $_FILES["file"]["name"] . " already exists. ";
           }
         else
           {
           move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . "camera.png");
            header("location:index1.html");
           }
         }
         } else { echo "Invalid file"; }

     ?>



     