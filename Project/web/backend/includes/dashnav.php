<!-- Start Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark sticky-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="index.html">
            <img src="images/logo1.png" alt="Logo" style="width:40px;">
            <span>.</span>
            <!--<i class="fas fa-home fa-lg"></i>-->
            <i class="fa fa-home fa-lg" style="font-size: 45px; color:#CCCECF; "></i>
            <span>.</span>
            <img src="images/logo1.png" alt="Logo" style="width:40px;">
        </a>
        <!--toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $rootpath; ?>">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $rootpath; ?>/process.php">Process</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $rootpath; ?>/profile.php">
                        <i class="fa fa-user-circle fa-lg"></i> Profile
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $rootpath; ?>/controllers/C_actions.php?getPage=dashboard">
                        <i class="fa fa-clipboard fa-lg"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $rootpath; ?>/controllers/C_actions.php?getPage=homecontrol">
                        <i class="fa fa-cogs fa-lg"></i> Home Control
                    </a>
                </li>

            </ul>
            <!-- Dropdown list -->
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" style="color: #fff;">
                    <?php
                    if (isset($_SESSION['username']))
                        echo $_SESSION['username']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="services.html">Services</a>
                    <a class="dropdown-item" href="support.html">Support</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="aboutus.html">About Us</a>
                    <a class="dropdown-item" href="contactus.html">Contact Us</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">
                        Logout<i class="fa fa-sign-out fa-lg"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</nav>
<!-- End Navigation Bar -->
