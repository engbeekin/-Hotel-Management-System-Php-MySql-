
<?php

session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>

    a{
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
        
    }
    nav{
        padding: 30px;
    }
</style>
</head>

<body>


    <header>
        <nav class="navbar fixed-top navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" href="home.php">Hotel Managment System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">

                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark " href="customers.php">Customers</a>
                        </li>
                        <li class="nav-item   ">
                            <a class="nav-link text-dark" href="staff.php">Staff</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-dark text-right" href="login.php"  style="margin-left: 400px; ">Login</a>
                        </li> 
                    </li>
                    <li class="nav-item">
                            <a class="nav-link text-dark text-right" href="logout.php"  
                            style="margin-left: 0px; ">LogOut</a>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($_SESSION['username'])) { ?>
                                <a class="nav-link text-dark text-right"
                            style="margin-left: 0px; ">welcome <?= $_SESSION['username'] ?></a>
                            
                         <?php   }?>
                           
                        </li>
                    
                    </ul>
                </div>
            </div>
                    </nav>
    </header>

</body>

</html>