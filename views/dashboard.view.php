<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/dashboard.css">
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
            </div>
            <div class="right-side">
                <div class="top">
                    <div class="profile">
                        <img src="../public/img/profile.png" alt="Profile" class="profile-img">
                        <span class="profile-name">Admin</span>
                    </div>
                </div>
                <div class="charts-container">
                    <div class="sales-chart">
                        <h1>Sales Analytics</h1>
                        <div class="chart-container">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                    <div class="statistics-chart">
                        <div class="statistics-overview">
                            <h2>Statistics Overview</h2>
                            <div class="stat-item">
                                <h3>ICS</h3>
                                <div class="progress-bar">
                                    <div class="progress" style="width: 53%;"></div>
                                </div>
                                <p>53%</p>
                            </div>
                            <div class="stat-item">
                                <h3>IOB</h3>
                                <div class="progress-bar">
                                    <div class="progress" style="width: 32%;"></div>
                                </div>
                                <p>32%</p>
                            </div>
                            <div class="stat-item">
                                <h3>ITE</h3>
                                <div class="progress-bar">
                                    <div class="progress" style="width: 20%;"></div>
                                </div>
                                <p>20%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
   
            <div class="recent_order">
                <h1>Top Products</h1>
                <table>
                    <thead>
                        <tr>
                            <th class="primary">Products</th>
                            <th class="primary">Inventory</th>
                            <th class="primary">Sales</th>
                            <th class="primary">Price</th>
                            <th class="primary">Today</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="../public/img/organization1.png" alt="Uniform" class="product-image"></td>
                            <td>700</td>
                            <td>₱1,060.00</td>
                            <td>₱1,300.00</td>
                            <td>₱17,300.00</td>
                        </tr>
                        <tr>
                            <td><img src="../public/img/organization2.png" alt="Uniform" class="product-image"></td>
                            <td>700</td>
                            <td>₱1,060.00</td>
                            <td>₱1,300.00</td>
                            <td>₱17,300.00</td>
                        </tr>
                        <tr>
                            <td><img src="../public/img/organization3.png" alt="Uniform" class="product-image"></td>
                            <td>700</td>
                            <td>₱1,060.00</td>
                            <td>₱1,300.00</td>
                            <td>₱17,300.00</td>
                        </tr>
                        <tr>
                            <td><img src="../public/img/organization4.png" alt="Uniform" class="product-image"></td>
                            <td>700</td>
                            <td>₱1,060.00</td>
                            <td>₱1,300.00</td>
                            <td>₱17,300.00</td>
                        </tr>
                        <tr>
                            <td><img src="../public/img/organization5.png" alt="Uniform" class="product-image"></td>
                            <td>700</td>
                            <td>₱1,060.00</td>
                            <td>₱1,300.00</td>
                            <td>₱17,300.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

        // Sample sales data for the chart
        const salesData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Monthly Sales',
                data: [10000, 15000, 12000, 18000, 25000, 22000, 24000, 20000, 27000, 23000, 28000, 30000],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1
            }]
        };

        // Initialize the chart
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line', 
            data: salesData,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
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
