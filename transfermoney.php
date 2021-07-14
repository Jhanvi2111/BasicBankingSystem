<?php 
	session_start();
	include '_dbconnect.php';

	$q="select * from customers";
	$result=mysqli_query($conn,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
	<title>Customer Details</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: monospace; 
		font-size:30px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color:#d19797 ;
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
<body style="background-color:#e63e3e;">

		  
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

	
    <h2 style="color:wheat;text-align: center;font-family: cursive;" >To transfer money from one user to another , click on the user </h2>
    <table class="flat-table flat-table-1" align=center style="font-family: serif;color:darkblue;font-weight: bold;">
	<thead>
		<th>CUSTOMER ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["id"]; ?></td>
		<?php echo "<td> <a href = '/banking/transfer.php?Name=$row[1]'>$row[1]</a></td>";?>
		<td><?php echo  $row["email"]; ?></td>
		<td><?php echo  $row["balance"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
	<br><br>
	
    
</body>
</html>