<?php

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='samkitbhai@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
				echo '<script type="text/javascript">';
				echo ' alert("THANKYOU WE WILL GET IN TOUCH WITH YOU") '; //not showing an alert box.
				echo '</script>';
			
		}
		else{
			echo '<script type="text/javascript">
				';
				echo ' alert("SOMWTHING WENT WRONG:(<br> PLEASE TRY AGAIN")'; //not showing an alert box.
				echo '
			</script>';
		}
	}
?>
<html>
	<script>
		window.history.back();

	</script>
</html>
