<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/customer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />
    <title>Customers</title>
</head>
<body>
    <div class="container">
        <aside class="aside">
            <div class="top">
                <div class="logo">
                    <h2>ADMIN</h2>
                </div>
                <div class="close">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="./views/dashboard.view.php">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="./views/customer.view.php">
                    <span class="material-symbols-sharp">person_outline</span>
                    <h3>Customers</h3>
                </a>

                <a href="./views/order.view.php">
                    <span class="material-symbols-sharp">shopping_cart</span>
                    <h3>Order</h3>
                </a>

                <a href="./views/stock.view.php">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>Products</h3>
                </a>

                <a href="./views/add.view.php">
                    <span class="material-symbols-sharp">add</span>
                    <h3>Add Products</h3>
                </a>

                <a href="#" onclick="logout()">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>

                <div id="logoutModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeLogoutModal()">&times;</span>
                       
                          <p>Are you sure you want to log out?</p>
                       <button id="logout-btn" onclick="confirmLogout()">Yes</button>
                     <button id="logout-btn" onclick="closeLogoutModal()">No</button>
                     <img src="../public/img/outimg.png" alt="Image" class="no-button-img">
                   
                   </div>
                </div>
            </div>
        </aside>

      
        <main>
            <div class="top">
                <img src="../public/img/logo1.png" alt="Logo" class="logo">
                <h4>CDM CAMPUS CART</h4>
        
                <div class="search-bar">
                    <input type="text" placeholder="Search for products...">
                    <button><i class="fas fa-search"></i></button>
                </div>
        
               
            </div>

            <div class="right-side">
                <div class="top">
                <div class="profile">
                    <img src="../public/img/profile.png" alt="Profile" class="profile-img">
                    <span class="profile-name">Admin</span>
                </div>
                </div>
            </div>
          
            <div class="insight">

               <div class="sales">
                <span class="material-symbols-sharp">trending_up</span>
                <div class="middle">
                    <div class="left">
                        <h3>Sales</h3>
                        <h1>₱25,000</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number">80%</div>
                    </div>
                </div>
                <small>Last 24 Hours</small>
               </div>
               
               <div class="expenses">
                <span class="material-symbols-sharp">local_mall</span>
                <div class="middle">
                    <div class="left">
                        <h3>Expenses</h3>
                        <h1>₱25,000</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number">80%</div>
                    </div>
                </div>
                <small>Last 24 Hours</small>
               </div>
               
               <div class="income">
                <span class="material-symbols-sharp">stacked_line_chart</span>
                <div class="middle">
                    <div class="left">
                        <h3>Income</h3>
                        <h1>₱30,000</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number">100%</div>
                    </div>
                </div>
                <small>Last 24 Hours</small>
               </div>
            </div>

            <div class="recent_order">
                <h1>Top Products</h1>
                <div class="top-products">
                    <div class="product">
                        <img src="../public/img/organization1.png" alt="Product 1">
                        <div class="product-info">
                            <h3>ICS Polo Shirt</h3>
                            <div class="stars">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                            <p class="price">₱470</p>
                            <button class="edit-btn">Edit Product</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="../public/img/organization2.png" alt="Product 2">
                        <div class="product-info">
                            <h3>ITE Polo Shirt</h3>
                            <div class="stars">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                            <p class="price">₱470</p>
                            <button class="edit-btn">Edit Product</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="../public/img/organization3.png" alt="Product 3">
                        <div class="product-info">
                            <h3>CDM Polo Shirt</h3>
                            <div class="stars">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                            <p class="price">₱470</p>
                            <button class="edit-btn">Edit Product</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="../public/img/organization4.png" alt="Product 4">
                        <div class="product-info">
                            <h3>IOB Polo Shirt</h3>
                            <div class="stars">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                            <p class="price">₱470</p>
                            <button class="edit-btn">Edit Product</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </main>

               

    <script>

document.addEventListener('DOMContentLoaded', () => {
    const sidebarLinks = document.querySelectorAll('.aside .sidebar a');

    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            sidebarLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });

    const currentPage = window.location.pathname.split("/").pop();

    
    sidebarLinks.forEach(link => {
        const linkHref = link.getAttribute("href");
        if (linkHref === currentPage) {
            link.classList.add('active');
        }
    });
});

function showLogoutModal() {
    document.getElementById('logoutModal').style.display = 'block';
}

function closeLogoutModal() {
    document.getElementById('logoutModal').style.display = 'none';
}

function confirmLogout() {

    localStorage.removeItem('user');
    sessionStorage.removeItem('user');
    document.cookie = 'userSession=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';

    alert('You have been logged out.');

    window.location.href = './views/admin.view.php';
}

function logout() {
    showLogoutModal();
}
    </script>
</body>
</html>
