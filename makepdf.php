<?php
require_once __DIR__ . '/vendor/autoload.php';


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$message = $_POST['message'];

echo($fname);
// Create PDF instance
$mpdf = new \Mpdf\Mpdf();

//Create PDF

$data = '';
$data .= '<h1>Name</h1>';

//Add Data
$data .= '<strong>First Name: </strong>' . $fname.'<br/>';
$data .= '<strong>Last Name: </strong>' . $lname.'<br/>';


 if($message){
     $data .= '<br /><strong>Message</strong><br/>' .$message;
 }

 //Write PDF
 $mpdf->WriteHTML($data);

//Output to Browser
$mpdf->Output('myfile.pdf', 'I');





?>