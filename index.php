<?php
	include("home.html");
	require ("connection.php");

	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$rollno=$_POST["rollno"];
		$dept=$_POST["dept"];
		$sem=$_POST["sem"];

		// for development use
		// $sql="INSERT INTO students_info(rollno,name,sem,department) values('$rollno','$name','$sem','$dept')";

		// for production use
		$sql="INSERT INTO student_info(rollno,name,sem,dept) values('$rollno','$name','$sem','$dept')";
        
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Recorded added sucesfully'); window.location.href='home.html';</script>";
		}
		else
		{
			echo "<script>alert('Recorded cration failed , try again'); window.location.href='home.html';</script>";		
		} 

	}

?>