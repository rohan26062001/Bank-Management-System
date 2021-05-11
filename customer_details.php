<?php
    include("connection.php");

    $name = $_GET['nm'];
    $email = $_GET['em'];
    $balance = $_GET['ab'];


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    <!-- Icon Library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />

    <title>Basic Banking System</title>
</head>
<style>
    body {
        overflow-y: hidden;
    }

    .vertical-center{
        margin-top: auto;
        margin-bottom: auto;
    }

</style>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <a class="navbar-brand" href=""><i class="fas fa-university"></i> Basic Bank of India</a>
        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLScXdRJOTr5plyjinjUWOdkRNxCi-NzL2V_qO99H1pXKhXpImQ/viewform?usp=sf_link">Contact</a>
            </li>
        </ul>
    </nav>
    <!-- Navbar End -->

    <!-- Customer Details Start -->
    <div class="container vertical-center p-5">
        <div class="row">
            <div class="col-12">
                <img src="images/user.png" alt="user" style="border-radius: 50%;" class="mx-auto d-block"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center"><span style="font-weight: bolder;">Customer Name:</span> <?php echo $name; ?> </p>
                <p class="text-center"><span style="font-weight: bolder;">Customer Email:</span> <?php echo $email; ?> </p>
                <p class="text-center"><span style="font-weight: bolder;">Account Balance:</span> <?php echo $balance; ?> </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <?php
                    $query = "select * from userlist";
                    $data = mysqli_query($conn, $query);
                ?>
                <form action="" method="POST">
                    <label for="users">Transfer To:</label>
                    <select name="toAccount" id="users">
                        <?php
                            while($rows = mysqli_fetch_assoc($data)){
                                $username= $rows['Name'];
                                echo "<option value='$username'>$username</option>";
                            }
                        ?>
                    </select>
                    <br><br>
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount" required><br><br>
                    <button class="btn btn-success" type="submit" value="submit" name="submit">Transfer</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Customer Details End -->
    <?php
        if(isset($_POST['submit'])){
            $from = $name;
            $to = $_POST['toAccount'];
            $amount = $_POST['amount'];

            // echo "From:".$from."\n";
            // echo "To:".$to."\n";
            // echo "Amount:".$amount."\n";
            
            //For Sender Data
            $sql1 = "SELECT * FROM userlist WHERE Name='$from'";
            $query1 = mysqli_query($conn, $sql1);
            $sql1 = mysqli_fetch_assoc($query1);

            //For Receiver Data
            $sql2 = "SELECT * FROM userlist WHERE Name='$to'";
            $query2 = mysqli_query($conn, $sql2);
            $sql2 = mysqli_fetch_assoc($query2);


            // If the sending amount is negative
            if (($amount) < 0) {
                echo '<script type="text/javascript">';
                echo ' alert("Negative amount cannot be transferred")';
                echo '</script>';
            }
            // If the sending amount is greater than the account balance of sender
            else if ($amount > $sql1['Balance']) {

                echo '<script type="text/javascript">';
                echo ' alert("Insufficient Balance")';
                echo '</script>';
            }
            // If the sending amount is zero
            else if ($amount == 0) {

                echo "<script type='text/javascript'>";
                echo "alert('Oops! Zero value cannot be transferred')";
                echo "</script>";
            }
            else {

                // Deducting amount from sender's account
                $newbalance1 = $sql1['Balance'] - $amount;
                $sql = "UPDATE userlist SET Balance=$newbalance1 WHERE Name='$from'";
                mysqli_query($conn, $sql);


                // Adding amount to reciever's account
                $newbalance2 = $sql2['Balance'] + $amount;
                $sql = "UPDATE userlist SET Balance=$newbalance2 WHERE Name='$to'";
                mysqli_query($conn, $sql);

                $sender = $from;
                $receiver = $to;
                $sql = "INSERT INTO `transaction_history`(`From Account Of`, `To Account Of`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                $query = mysqli_query($conn, $sql);

                if ($query) {
                    echo "<script> 
                            alert('Transaction Successful');
                            window.location='t_histroy.php';
                          </script>";
                }

                $newbalance = 0;
                $amount = 0;
        }
    }
    ?>
</body>
</html>