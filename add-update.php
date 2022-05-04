<?php

if(count($_POST)>0)
{    
     include 'conn.php';
     
     $pname = $_POST['pname'];
     $bname = $_FILES['image'];
     $dname = $_POST['dname'];
     $cname = $_POST['cname'];

     if(empty($_POST['custId'])){

      $target= "banners/" .basename($bname);
 
      $query = "INSERT INTO adverts (product,photo,detail,contact)
      VALUES ('$pname','$bname','$dname','$cname')"; // insert data into database

     }else{
       $query = "UPDATE adverts set custId='" . $_POST['custId'] . "', product='" . $_POST['pname'] . "', detail='" . $_POST['bname'] . "', contact='" . $_POST['cname'] . "' WHERE custId='" . $_POST['custId'] . "'"; // update form data from the database
     }

    $res = mysqli_query($conn, $query);

    if($res) {

     echo json_encode($res);

    } else {

     echo "Error: " . $sql . "" . mysqli_error($conn);

    }

}

?>