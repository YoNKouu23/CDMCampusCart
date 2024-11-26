<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/order.css">
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
                <a href="./dashboard.view.php">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="./customer.view.php">
                    <span class="material-symbols-sharp">person_outline</span>
                    <h3>Customers</h3>
                </a>

                <a href="./order.view.php">
                    <span class="material-symbols-sharp">shopping_cart</span>
                    <h3>Order</h3>
                </a>

                <a href="./stock.view.php">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>Products</h3>
                </a>

                <a href="./add.view.php">
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
                     <img src="./img/outimg.png" alt="Image" class="no-button-img">
                   
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
            <div class="recent_order">
                <h1>Order</h1>
                <span>10 orders found</span>
                <table>
                    <thead>
                        <tr>
                            <th class="primary">ID number</th>
                            <th class="primary">Name</th>
                            <th class="primary">Address</th>
                            <th class="primary">Date</th>
                            <th class="primary">Price</th>
                            <th class="primary">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#0001</td>
                            <td>Lovely Pantaleon</td>
                            <td>blk 00 lot 00</td>
                            <td>November 13, 2024</td>
                            <td>₱470</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>#0001</td>
                            <td>Lovely Pantaleon</td>
                            <td>blk 00 lot 00</td>
                            <td>November 13, 2024</td>
                            <td>₱470</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>#0001</td>
                            <td>Lovely Pantaleon</td>
                            <td>blk 00 lot 00</td>
                            <td>November 13, 2024</td>
                            <td>₱470</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>#0001</td>
                            <td>Lovely Pantaleon</td>
                            <td>blk 00 lot 00</td>
                            <td>November 13, 2024</td>
                            <td>₱470</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>#0001</td>
                            <td>Lovely Pantaleon</td>
                            <td>blk 00 lot 00</td>
                            <td>November 13, 2024</td>
                            <td>₱470</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>#0001</td>
                            <td>Lovely Pantaleon</td>
                            <td>blk 00 lot 00</td>
                            <td>November 13, 2024</td>
                            <td>₱470</td>
                            <td>Pending</td>
                        </tr>
                    </tbody>
                </table>
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

    window.location.href = './admin.view.php';
}

function logout() {
    showLogoutModal();
}
   
    </script>

    
    
</body>
</html>
