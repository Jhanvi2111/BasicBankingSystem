<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking system</title>


    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-family: 'Lato', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            background-image: url(/banking/home.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }



        content-wrapper {
            width: 80%;
            margin: 4% 10% 5% 10%;
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

        .logo {
            float: left;
            padding: 10px;
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
    </style>


</head>

<body>

    <nav>

        <div class="logo">
            <img src="/banking/logo.jpg" width="40" height="40">

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



</body>

</html>