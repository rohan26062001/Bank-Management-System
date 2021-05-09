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
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <a class="navbar-brand" href=""><i class="fas fa-university"></i> Basic Bank of India</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- All Users Table Start -->
    <div class="container">
        <?php
            error_reporting(0);

            include("connection.php");

            $query = "select * from userlist";
            $data = mysqli_query($conn, $query);

            $total = mysqli_num_rows($data);

            if($total!=0){
                ?>
                <h1 class="text-center">Customer Details</h1>
                <table style="width:600px; text-align:center; line-height:40px; width: 100%" class="table-bordered">  
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Balance</th>
                            <th>View Details</th>
                        </tr>
                    </thead>
                    
                    <?php
                        while($rows = mysqli_fetch_assoc($data)){
                    ?>
                        <tr>
                            <td><?php echo $rows['Name']; ?></td>
                            <td><?php echo $rows['Email']; ?></td>
                            <td><?php echo $rows['Balance']; ?></td>
                            <td><a href="customer_details.php?nm=<?php echo $rows['Name']; ?>&em=<?php echo $rows['Email']; ?>&ab=<?php echo $rows['Balance']; ?>" class="btn btn-success">View</a></td>
                        </tr>
                    <?php
                        }
                    ?> 
                </table>
            <?php 
                } 
            else{
                echo "No customer found";
            }
        ?>
    </div>
    <!-- All Users Table End -->
    
</body>
</html>