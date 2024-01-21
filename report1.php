<?php
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Complaint=$_POST["Complaint"];
$button=$_POST["button"];
echo $Name;
echo $Email;
echo $Complaint;
echo $button;


$conn=new pdo("mysql:host=localhost;dbname=rep","root","");

if($button="insert")
{
$str="insert into report (Name,Email,Complaint) values('$Name',$Email,'$Complaint')";
}

try {
    $st=$conn->prepare($str);
    $st->bindvalue("Name",$name,pdo::PARAM_STR);
    $st->bindvalue("Email",$Email,pdo::PARAM_STR);
    $st->bindvalue("Complaint",$Complaint,pdo::PARAM_STR);
    $st->execute();
    echo"INSERTED:";

} 
catch (pdo exception $e) {
    echo"check the code idiot:!"$e->getmessage();
}
?>




