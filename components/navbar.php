
<header>
        <div class="logo">
            <a href="../index.php" style="text-decoration: none;">
                <h3>CDM CAMPUS CART</h3>
            </a>
        </div>
        <div class="top-bar">
            <!-- Left Section: Department Dropdown -->
            <div class="custom-dropdown">
                <button class="dropdown-button" onclick="window.location.href='../controllers/department.php'">Department Section<span class="caret">^</span></button>
                <ul class="dropdown-menu">
                    <li data-value="ics">ICS</li>
                    <li data-value="iob">IOB</li>
                    <li data-value="ite">ITE</li>
                </ul>
            </div>
            
        
            <!-- Right Section: Navigation Links -->
            <div class="navbar-links">
                <a href="../controllers/products.php">Products</a>
                <a href="/index.php#about">About</a>
                <a href="/index.php#contact">Contact Us</a>
            </div>
        </div>
        
        <!-- Button container for Cart, Profile, and Search -->
        <div class="button-container">
            <a href="../controllers/cart.php">
                <button class="cart-button">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </a>
            <a href="../controllers/profile.php">
                <button class="profile-button">
                    <i class="fas fa-user"></i>
                </button>
            </a>
        </div>
        
    
    </header>