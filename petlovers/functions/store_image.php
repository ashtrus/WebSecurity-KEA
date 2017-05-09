
<?php
include_once("dbconfig.php");

$folder = "uploads/";
<<<<<<< HEAD
$upload_image = $folder.basename($_FILES["fileToUpload"]["tmp_name"]);
$types = array('image/jpeg', 'image/gif', 'image/png', 'image/jpg');
$verifyimg  = getimagesize($_FILES['fileToUpload']['tmp_name']);

   
if(isset($_POST["submit"])) {   //On upload POST  

    if($verifyimg['mime'] != 'image/jpeg'){ //Procces image to checkFile type/size validation 
          echo 'filetypes are not allowed for sec purpose'; 
          exit;
    } else {
      
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_image)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";     
         
        //store it in the dba_close
        $insert_query="INSERT INTO photos (imagePath, photographerID, photoTags) VALUES('$upload_image', 0, 'tag1')";
        $stmt = $DB_con->prepare($insert_query);
        $stmt->execute();

        //Navigate to display the image
        header( 'Location: fetch_image.php' );
       // echo 'img successfull ';
         } 
    }





}       
    
=======
$upload_image = $folder . basename($_FILES["fileToUpload"]["name"]);

if(isset($_POST["submit"])) {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_image)) {
echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

//store it in the dba_close
$insert_query="INSERT INTO photos (imagePath, photographerID, photoTags) VALUES('$upload_image', 0, 'tag1')";

//$DB_con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
//$DB_con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$stmt = $DB_con->prepare($insert_query);
$stmt->execute();

//Navigate to display the image
header( 'Location: fetch_image.php' );

} else {
echo "Sorry, there was an error uploading your file.";
}
}
>>>>>>> 49490ea282012b049755805ebe713112308868e8

?>