<?php
$state =$_POST['state']??'';
$cities=[];
 if($state == 'Gujarat'){
    $cities = ['Ahmedabad', 'Surat', 'Vadodara'];
 }
 else if($state == 'Maharashtra'){
    $cities = ['Mumbai', 'Pune', 'Nagpur'];
 }
 else if($state == 'Rajasthan'){
    $cities = ['Jaipur', 'Udaipur', 'Jodhpur'];
 }

 foreach($cities as $city){
    echo "<option value='$city'>$city</option>";
 }
?>