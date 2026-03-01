<?php
    if(isset($_POST['Submit'])){
        $name=$_POST['Name'];
        $mob=$_POST['Mob'];
        $email=$_POST['Email'];
        $add=$_POST['Address'];
        $gender=$_POST['Gender'];

        $target_dir="resume/";
        $target_files=$target_dir . basename($_FILES['Photo']['name']);
        if(!is_dir($target_dir)){
            mkdir($target_dir);
        }

        if(move_uploaded_file($_FILES['Photo']["tmp_name"],$target_files)){
            echo "File uploaded successfully.";
            echo "<p>Name: $name</p>";
            echo "<p>Mobile No: $mob</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Address: $add</p>";
            echo "<p>Gender: $gender</p>";
            echo '<img src="' . $target_files . '" alt="Uploaded Image">';
        }
        else
        {
            echo "<p style='color:red;'>Error uploading file.</p>";
        }

        if(!empty($_FILES['Aud']['name'])){
            $audio_file=$target_dir . basename($_FILES['Aud']['name']);
            if(move_uploaded_file($_FILES['Aud']['tmp_name'],$audio_file)){
                echo "Audio file uploaded successfully.";
                echo '<audio controls><source src="' . $audio_file . '" type="audio/mpeg">Your browser does not support the audio element.</audio>';
            }
            else{
                echo "<p style='color:red;'>Error uploading audio file.</p>";
            }
        }

        if(!empty($_FILES['Vid']['name'])){
            $vid_file=$target_dir . basename($_FILES['Vid']['name']);
            if(move_uploaded_file($_FILES['Vid']['tmp_name'],$vid_file)){
                echo '<video controls><source  src="' .$vid_file.'"></video>';
            }
        }
        else{
            echo "<p style='color:red;'>Error uploading video file.</p>";
        }
    }
?>