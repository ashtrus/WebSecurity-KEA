
<?php
include_once("dbconfig.php");

$folder = "uploads/";
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

?>