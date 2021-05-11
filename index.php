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

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Basic Banking System</title>
</head>
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

    <!-- Main Row Start -->
    <div class="jumbotron vertical-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-12">
                    <img src="images/user.png" alt="user" style="border-radius: 50%;"><br><br>
                    <a href="all-users.php" class="btn btn-primary">View All Customers</a><br><br>
                </div>
                <div class="col-md-6 col-12">
                    <img src="images/history.jpg" alt="history" style="border-radius: 50%;"><br><br>
                    <a href="t_histroy.php" class="btn btn-primary">Transaction History</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Row End -->
</body>

</html>