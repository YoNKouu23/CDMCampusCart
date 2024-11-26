<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />
    <title>Dashboard</title>
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
            <div class="add-product-section">
                <h1>Add New Product</h1>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="product-name">Product Name</label>
                        <input type="text" id="product-name" name="product_name" placeholder="Enter product name" required>
                    </div>

                    <div class="form-group">
                        <label for="product-description">Description</label>
                        <textarea id="product-description" name="product_description" placeholder="Enter product description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="product-price">Price</label>
                        <input type="number" id="product-price" name="product_price" placeholder="Enter product price" required>
                    </div>

                    <div class="form-group">
                        <label for="product-inventory">Inventory</label>
                        <input type="number" id="product-inventory" name="product_inventory" placeholder="Enter product inventory" required>
                    </div>

                    <div class="form-group">
                        <label for="product-image">Product Image</label>
                        <input type="file" id="product-image" name="product_image" accept="image/*" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit-btn">Add Product</button>
                    </div>
                </form>
            </div>
        </main>
    </div>


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
