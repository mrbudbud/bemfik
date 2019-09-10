<?php
 include "koneksi.php";
 $firstname = $_POST ['firstname'];
 $email = $_POST ['email'];
 $subject = $_POST ['subject'];
 $message = $_POST ['message'];
 
 $sql = mysqli_query($connect,"INSERT INTO komentar VALUES('$firstname','$email','$subject','$message')");
 
 if($sql){
	
	header("location: komentar.php");
}else{
		echo "Gagal Mengirim Data";
}
		
		
		?>