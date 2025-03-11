<div class="container-fluid my-5">

<style>
        /* Custom Styling */
        .top-bar {
            background-color: #043927; /* Darker Green */
            padding: 10px 0;
        }
        .top-bar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }
        .navbar-custom {
            background-color: #064635; /* Dark Green Background */
            padding: 15px 0;
        }
        .nav-link {
            font-size: 18px; /* Larger text */
            padding: 15px 20px; /* More spacing */
            color: white !important;
        }
        .nav-item {
            border-right: 2px solid rgba(255, 255, 255, 0.3); /* Line between items */
        }
        .nav-item:last-child {
            border-right: none;
        }
        .btn-custom {
            background-color: #FFD700; /* Gold Button */
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container d-flex justify-content-left">
            <a class="navbar-brand fw-bold text-uppercase text-light" href="home.php">New Taste Kitchen</a>
    <!-- Top Bar with Register & Sign In -->
    <div class="top-bar text-right">
        <a href="register.php">Register</a> | 
        <a href="login.php">Sign In</a>
    </div>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="policies.php">Policies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-custom px-3" href="checkout.php">Checkout</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>


<!-- Search Bar -->
<div class="d-flex justify-content-end mt-3">
    <div class="input-group w-50">
        <input type="search" id="search" class="form-control border-2 border-dark fw-bold shadow-sm" 
            placeholder="🔍 Search for food..." style="font-size: 18px;">
        <button class="btn btn-warning fw-bold text-dark" type="button">Search</button>
    </div>
</div>

<p>Are you ready to check out?</p>