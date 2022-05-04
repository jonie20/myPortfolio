
// if(count($_POST)>0)
// {    
//      
     
//      $authorname = $_POST['auname'];
//      $quote = $_POST['quname'];
//      $contact = $_POST['coname'];

//      if(empty($_POST['custId'])){
 
//       $query = "INSERT INTO articles (modifyid,quote,author,status)
//       VALUES ('$authorname','$quote','$contact','inactive')"; // insert data into database

//      }else{
//        $query = "UPDATE articles set custId='" . $_POST['custId'] . "', product='" . $_POST['pname'] . "', detail='" . $_POST['bname'] . "', contact='" . $_POST['cname'] . "' WHERE custId='" . $_POST['custId'] . "'"; // update form data from the database
//      }

//     $res = mysqli_query($conn, $query);

//     if($res) {

//      echo json_encode($res);

//     } else {

//      echo "Error: " . $sql . "" . mysqli_error($conn);

//     }

// }

 <?php
 include 'conn.php';
 include 'articles.php';

$author=mysqli_real_escape_string($conn,$_REQUEST['auname']);
$quote=mysqli_real_escape_string($conn,$_REQUEST['quname']);
$modifyid=mysqli_real_escape_string($conn,$_REQUEST['coname']);
//$location=mysqli_real_escape_string($link,$_REQUEST['location']);
//Attemptinsertqueryexecution
$sql="INSERT INTO articles (author, quote , modifyid ,status ) VALUES('$author',
'$quote','$modifyid', 'inactive')";
if(mysqli_query($conn,$sql)){
header("refresh:2;url=articles.php");
}else{
echo"ERROR:Could not able to execute $sql.".mysqli_error($conn);
header("refresh:30;url=articles.php");
}
//Closeconnection
mysqli_close($conn);
?>