<?php
    session_start();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/cart.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    
    <script>

    </script>
</head>

<body>
    <div id="heading">
        <header id="header">
            <img id="header-img" src="https://cdn0.iconfinder.com/data/icons/most-usable-logos/120/Amazon-512.png" alt="Logo" />
            <h2 id="aSmile"><a href="signedin.php" style="text-decoration: none; color: white;">aSmile</a></h2>
            <div id="search">
                <input type="text" id="search-bar" placeholder="Search Products" />
                <button type="submit" id="search-btn">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <nav id="nav-bar">
                <ul id="nav-ul">
                    <li id="nav-li">
                        <a class="nav-link" href="logout.php">Signout</a>
                    </li>
                    <li id="nav-li">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                    <li id="nav-li">
                        <a class="nav-link" href="signedin.php">Products</a>
                    </li>
                    <li id="nav-li">
                        <a class="nav-link" style="color: white;">Hello, <?php echo $_COOKIE['email'] ?></a>
                    </li>
                </ul>
            </nav>
        </header>
        <section id="cartcontent"><br><br><br><br><br><br>
            <h2 id="product-header" align="center">Your Shopping Cart</h2><hr />
            <table class="table">
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <td>Total Price</td>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $bill = 0;
                        $sno = 1;
                        foreach($_SESSION as $products) {
                            $p = 0; $q = 0;
                            echo "<tr>";
                            echo "<td>".($sno)."</td>";
                            echo "<form action='editCart.php' method='post'>";
                            foreach($products as $key => $value) {
                                if($key == 2) {
                                    echo "<td><input type='text' name='name$key' value='".$value."' class='form-control'></td>";
                                    $q = $value;
                                } elseif($key == 1) {
                                    echo "<input type='hidden' name='name$key' value='".$value."'>";
                                    echo "<td>".$value."</td>";
                                    $p = $value;
                                } elseif($key == 0) {
                                    echo "<input type='hidden' name='name$key' value='".$value."'>";
                                    echo "<td>".$value."</td>";
                                }
                            }
                            $bill = ($q*$p);
                            echo "<td>$bill</td>";
                            echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'/></td>";
                            echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'/></td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "</form>";
                        }
                    ?>
                </tbody>
            </table>
            <button onclick="location.href = 'signedin.php';" type="button" class="btn-fin">Continue Shopping</button>
            <button src="signedin.php" type="button" class="btn-fin">Checkout</button>
        </section>
    </div>
</body>
    
</html>
