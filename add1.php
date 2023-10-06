<?php
include 'connect.php';


$sql= $db->query("Insert into shop (firstname, surname, detail, address, phone)
VALUES ('$_POST[firstname]', '$_POST[surname]', '$_POST[detail]', '$_POST[address]', '$_POST[phone]')");

if(isset($_POST['submit'])){

    $lastid = $db->insert_id;
    if(isset($_POST['submit'])){
    
    // File upload configuration
    $targetDir = "uploads/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){




                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .= "('".$lastid."','".$fileName."'),";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $db->query("INSERT INTO shopimages (id, file_name) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
}

//(isset($_POST['submit'])){



$sql= $db->query("Insert into openinghours (id, mondayopen, mondayclose, tuesdayopen, tuesdayclose, wednesdayopen, wednesdayclose, thursdayopen, thursdayclose, fridayopen, fridayclose, saturdayopen, saturdayclose, sundayopen, sundayclose) VALUES ($lastid,'$_POST[mondayopen]','$_POST[mondayclose]','$_POST[tuesdayopen]','$_POST[tuesdayclose]','$_POST[wednesdayopen]','$_POST[wednesdayclose]','$_POST[thursdayopen]','$_POST[thursdayclose]','$_POST[fridayopen]','$_POST[fridayclose]','$_POST[saturdayopen]','$_POST[saturdayclose]','$_POST[sundayopen]','$_POST[sundayclose]')");

}
//}
/*
$lastid = $db->insert_id;
if (isset($_POST[$lastid])) {
	(id, mondayopen, mondayclose, tuesdayopen, tuesdayclose, wednesdayopen, wednesdayclose, thursdayopen, thursdayclose, fridayopen, fridayclose, saturdayopen, saturdayclose, sundayopen, sundayclose)

$sql= $db->query("Insert into shopimages (id)
VALUES ('$_POST[lastid])");
}
*/
header("Location:index.php");
$db->close();

?>