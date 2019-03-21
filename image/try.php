<?php


 $targetfolder = "";

 $targetfolder = $targetfolder . basename( $_FILES['images']['name']) ;
 $temp = basename( $_FILES['images']['name']);
if(move_uploaded_file($_FILES['images']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['images']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

 

include ( 'PdfToText.phpclass' ) ;

	function  output ( $message )
	   {
		if  ( php_sapi_name ( )  ==  'cli' )
			echo ( $message ) ;
		else
			echo ( nl2br ( $message ) ) ;
	    }
	    
	$file	=  $temp;
	$pdf	=  new PdfToText ( "$file" ) ;

	$data = file_get_contents($file);
	$array = json_decode($data, true);


	$txt = (string)$pdf;



$myfile = fopen("out.txt", "w") or die("Unable to open file!");
fwrite($myfile, $pdf);




fclose($myfile);
include('h.php');
?>



	