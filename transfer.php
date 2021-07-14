<?php 

session_start();
include '_dbconnect.php';

if(isset($_GET['Name'])){
	$Name=$_GET['Name'];
}

$q="SELECT * From customers WHERE Name='$Name'";
$result=mysqli_query($conn,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['senderName']=$Name;
?>

<html>
<head>
<title>transact</title>
<link rel = "stylesheet" type = "text/css" href = "buttons.css">
<style>
	table {
	font-family: sans-serif;
	border-collapse: collapse;
	width: 100%;
	}

	h1{
	font-family: sans-serif;
	font-size:40px;
	}
	
	td, th {
	border: 1px solid black;
	text-align: center;
	padding: 8px;
	}

	tr:nth-child(odd) {
	background-color: #f04848;	
	}
	nav {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            overflow: hidden;
        }

        nav ul {
            list-style-type: none;
            float: right;
            margin-top: 7px;


        }

        nav ul li {
            display: inline-block;
        }

        nav ul li a {
            text-decoration: none;
            padding: 20px 35px;
            text-align: center;
            color: #fff;
            display: block;
            font-weight: 700;
        }

        

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;

        }
        
        .logo {
            float: left;
            padding: 10px;
        }
</style>
</head>

<body style="background-color:#850808;">

<nav>
    <div class="logo">
            <img src="/banking/logo.jpg" width="60" height="60">

        </div>


<div class="footer">
    <p>Designed By JHANVI || As a part of THE SPARKS FOUNDATION internship.
        Have any Query? Feel free to Contact:</p>
</div>

<ul>
    <li><a href="/banking/home.php">Home</a></li>
    <li><a href="/banking/display.php">View Customers</a></li>
    <li><a href="/banking/transfermoney.php">Tranfer Money</a></li>
    <li><a href="/banking/transactionhistory.php">View Transaction Details</a></li>
</ul>

</nav>

	
    

	<h1 style="font-family:serif;text-align:center;color: wheat;">Account Details</h1>
	<table style="background-color:#ebbebe;">
	   <th>CUSTOMER ID</th>
	   <th>NAME </th>
	   <th>EMAIL</th>
	   <th>CURRENT BALANCE</th>
	   <tr>
	   
		<?php  
			$row=mysqli_fetch_array($result)
		?>
		
		 
		<td><?php echo  $row["id"]; ?></td>
		<td><?php echo  $row["name"]; ?></td>
		<td><?php echo  $row["email"]; ?></td>
		<td><?php echo  $row["balance"]; ?></td>
	   </tr>

	</table>
</div>
	
<?php echo "<form method='post' action='transaction.php?Name=$Name'>"?>
<br><br>
<h3 style="font-family: cursive;color: wheat;">Select the user to whom you want to transfer money from the dropdown list</h3>
<table border="0px" style="background-color:#ebbebe;">
	<tr>
	<td>Transfer To:</td>
	<td><select name="user">
		<option>--Select--</option>

		<?php  
			$q1="select * from customers";
			$result1=mysqli_query($conn,$q1);
			while($row=mysqli_fetch_array($result1)){
		?>

		<option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

		<?php }
		?>
		
		</select></td></tr> 
		<tr><td>Amount:</td><td><input type="text" name="Amount"></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="Submit" align=center style="margin-top: 10px; width:6em; height:2em; font-size:15px; background-color: skyblue; font-weight: bold;"></td></tr>
</table>

</form>



</body>
</html>