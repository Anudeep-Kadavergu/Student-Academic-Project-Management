<?php
 $uploadFolder = "Cloud Storage/".$projectid."/";
$target_path = $uploadFolder;
$target_path = $target_path . time() . '_' . basename( $_FILES['file']['name']);
//Check the password to verify legal upload

    //Try to move the uploaded file into the designated folder
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
             $sql="UPDATE project_details SET file='$final_file' WHERE project_id='$projectid'";
        mysqli_query($connection,$sql);
        ?>
        <script>
        alert('successfully uploaded');
        window.location.href='student.php';
        </script>
        <?php
        } else{
            ?>
        <script>
        alert('error while uploading file');
        window.location.href='student.php';
        </script>
        <?php
        }
    
    
   
?>