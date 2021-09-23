<?php
	$Name = $_POST['Name'];
	$email = $_POST['e-mail'];
	$number = $_POST['Phone Number'];
	$text = $_POST['Location'];
	$text = $_POST['Write your message here...'];
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, email, Phone number, Location, Write message here... ) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $Name, $email, $Phone number, $Location, $Write message here...);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
	