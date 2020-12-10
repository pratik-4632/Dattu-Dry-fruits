<?php
    include("../connection.php");
    $productName = $_GET['productName'];
    $productDescription =$_GET['productDescription'];
    $productPrice =$_GET['productPrice'];
    $unique =time().$productName;
    if (isset($_FILES['file-ip-1']) && $_FILES['file-ip-1']['error'] === UPLOAD_ERR_OK) {
        $uploadFileDir = '../productBanner/';
        $fileName = $_FILES['file-ip-1']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName =time(). '.' . $fileExtension;
        $dest_path = $uploadFileDir . $newFileName;
        $fileTmpPath = $_FILES['file-ip-1']['tmp_name'];
        
        
        if(move_uploaded_file($fileTmpPath, $dest_path) )
        {
            include("../connection.php");
            if($conn){
                //query
                $query = "INSERT INTO additem(prodoctName,productDescription,productPrice,productBanner)VALUES('$productName','$productDescription','$productPrice','$newFileName')";
        
                //process of the inserting data
                $fire = mysqli_query($conn,$query);
                if($fire){
                    echo "Succesfully Register";
                }
                else{
                    print(mysqli_error($conn));
                    echo "Not register your shop";
                }
        
            }
            else{
                echo "Not connected With server";
            }
        } 
        else
        {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
        }
    }
    //var_dump($shop_banner);
  

?>