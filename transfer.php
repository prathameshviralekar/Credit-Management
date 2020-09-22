<?php
session_start();
$con=mysqli_connect('localhost','root','','credit_managment');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button1.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/2.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#0086b3;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background-color:#bebebe;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Prathamesh"){
				 var arr=["Atharv","Avinash","Mahesh","Vaishali","Monika","Ravina","Rahul","Avdhut","Shubham"];
				 }
				 else if(a==="Atharv"){
					var arr=["Prathamesh","Avinash","Mahesh","Vaishali","Monika","Ravina","Rahul","Avdhut","Shubham"];
				}
				else if(a==="Avinash"){
					var arr=["Prathamesh","Atharv","Mahesh","Vaishali","Monika","Ravina","Rahul","Avdhut","Shubham"];
				}
				else if(a==="Mahesh"){
					var arr=["Prathamesh","Atharv","Avinash","Vaishali","Monika","Ravina","Rahul","Avdhut","Shubham"];
				 }
				 else if(a==="Vaishali"){
					var arr=["Prathamesh","Atharv","Avinash","Mahesh","Monika","Ravina","Rahul","Avdhut","Shubham"];
				 }
				 else if(a==="Monika"){
					var arr=["Prathamesh","Atharv","Avinash","Mahesh","Vaishali","Ravina","Rahul","Avdhut","Shubham"];
				 }
				 else if(a==="Ravina"){
					var arr=["Prathamesh","Atharv","Avinash","Mahesh","Vaishali","Monika","Rahul","Avdhut","Shubham"];
				 }
				 else if(a==="Rahul"){
					var arr=["Prathamesh","Atharv","Avinash","Mahesh","Vaishali","Monika","Ravina","Avdhut","Shubham"];
				 }
				 else if(a==="Avdhut"){
					var arr=["Prathamesh","Atharv","Avinash","Mahesh","Vaishali","Monika","Ravina","Rahul","Shubham"];
				 }
				 else if(a==="Shubham"){
				 var arr=["Prathamesh","Atharv","Avinash","Mahesh","Vaishali","Monika","Ravina","Rahul","Avdhut"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Credits</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Prathamesh">Prathamesh</option>
			<option value="Atharv">Atharv</option>
			<option value="Avinash">Avinash</option>
			<option value="Mahesh">Mahesh</option>
			<option value="Vaishali">Vaishali</option>
			<option value="Monika">Monika</option>
			<option value="Ravina">Ravina</option>
			<option value="Rahul">Rahul</option>
			<option value="Avdhut">Avdhut</option>
			<option value="Shubham">Shubham</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="sender_name" align="left">Credits: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle"><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="btn-hover color-1">HOME</button>
	</a>
</div>
</body>
</html>