<?php
$Name = $_POST['Name'];
$UserName = $_POST['UserName'];
$PhoneNo = $_POST['PhoneNo'];
$Email = $_POST['Email'];



echo $Name;
echo $UserName;
echo $PhoneNo;
echo $Email;



$conn = mysqli_connect("localhost","root","","booking");
if(!$conn){

    echo'not';
}
else{
    'yes';
}

$sql = "INSERT INTO `book` (`Name`, `UserName`, `PhoneNo.`, `E-mail`) VALUES ('$Name', '$UserName', '$PhoneNo', '$Email')";
$result = mysqli_query($conn,$sql);

?>