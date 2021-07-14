<!DOCTYPE html>
<html>

<head>
    <title></title>

</head>

<body>

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


    <div class="main-div">
        <h1><b>VIEW CUSTOMER DETAILS</b></h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>CUSTOMER-ID</th>
                            <th>CUSTOMER-NAME</th>
                            <th>EMAIL</th>
                            <th>BALANCE</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '_dbconnect.php';
                            $selectquery = "select * from customers";

                            $query= mysqli_query($conn, $selectquery);

                            $nums = mysqli_num_rows($query);

                            

                            while($res= mysqli_fetch_array($query)){

                             ?>

                        <tr>
                            <td> <?php echo $res['id']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['balance']; ?></td>

                            <td></td>
                        </tr>
                        <?php
                            }

                            ?>


                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <style>
    body {
        background-color: grey;
    }

    .main-div {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .center-div {
        width: 90%;
        height: 80vh;
        background: -webkit-linear-gradient(left, #e2ba5d, #ff8000);
        padding: 20px 0 0 0;
        box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .03);
        border-radius: 10px;
    }

    h1 {
        font-size: 18px;
        color: white;
        text-align: center;
        margin-top: -20px;
        margin-bottom: 20px;
    
    }

    table {
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .03);
        border-radius: 10px;
        margin: auto;
    }

    th,
    td {
        border: 1px solid #f2f2f2;
        padding: 8px 30px;
        text-align: center;
        color: grey;

    }

    th {
        text-transform: uppercase;
        font-weight: 500;
    }

    td {
        font-size: 13 px;

    }

    nav {
        width: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        overflow: hidden;
        background-color: #333;
        
        
        
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
</body>

</html>