<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/stock.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />
    <title>Stock</title>
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

            <div class="recent_order">
            <h1>PRODUCT STOCK <button id="add-product-btn" onclick="openAddProductModal()">Add Product</button></h1>
                
                <table>
                    <thead>
                        <tr>
                            <th class=>Image</th>
                            <th class=>Product Name</th>
                            <th class=>Category</th>
                            <th class=>Price</th>
                            <th class=>Piece</th>
                            <th class=>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="../public/img/organization1.png" alt="Uniform" class="product-image"></td>
                            <td>ICS Polo Shirt</td>
                            <td>Uniform</td>
                            <td>₱10,000</td>
                            <td>63</td>
                            <td> <button class="edit-item"><i class="fas fa-pencil-alt"></i></button>  |  <button class="remove-item"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td><img src="../public/img/organization2.png" alt="Uniform" class="product-image"></td>
                            <td>ITE Polo Shirt</td>
                            <td>Uniform</td>
                            <td>₱10,000</td>
                            <td>63</td>
                            <td> <button class="edit-item"><i class="fas fa-pencil-alt"></i></button>  |  <button class="remove-item"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td><img src="../public/img/organization3.png" alt="Uniform" class="product-image"></td>
                            <td>CDM Polo Shirt</td>
                            <td>Uniform</td>
                            <td>₱10,000</td>
                            <td>63</td>
                            <td> <button class="edit-item"><i class="fas fa-pencil-alt"></i></button>  |  <button class="remove-item"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td><img src="../public/img/organization4.png" alt="Uniform" class="product-image"></td>
                            <td>IOB Polo Shirt</td>
                            <td>Uniform</td>
                            <td>₱10,000</td>
                            <td>63</td>
                            <td> <button class="edit-item"><i class="fas fa-pencil-alt"></i></button>  |  <button class="remove-item"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td><img src="../public/img/organization5.png" alt="Uniform" class="product-image"></td>
                            <td>ICS Polo Shirt old</td>
                            <td>Uniform</td>
                            <td>₱10,000</td>
                            <td>63</td>
                            <td> <button class="edit-item"><i class="fas fa-pencil-alt"></i></button>  |  <button class="remove-item"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td><img src="../public/img/uniform1.png" alt="Uniform" class="product-image"></td>
                            <td>White Polo</td>
                            <td>Uniform</td>
                            <td>₱10,000</td>
                            <td>63</td>
                            <td> <button class="edit-item"><i class="fas fa-pencil-alt"></i></button>  |  <button class="remove-item"><i class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

  <!-- Add Product Modal -->
  <div id="addProductModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeAddProductModal()">&times;</span>
            <h3>Add New Product</h3>
            <form id="addProductForm">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName" placeholder="Enter product name" required>

                <label for="category">Category:</label>
                <input type="text" id="category" name="category" placeholder="Enter category" required>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" placeholder="Enter price" required>

                <label for="piece">Stock Quantity (Piece):</label>
                <input type="number" id="piece" name="piece" placeholder="Enter stock quantity" required>

                <!-- Image Selection Input -->
                <label for="productImage">Product Image:</label>
                <input type="file" id="productImage" name="productImage" accept="image/*" required>

                <button type="submit">Add Product</button>
            </form>
        </div>
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

document.addEventListener('DOMContentLoaded', () => {
    const removeButtons = document.querySelectorAll('.remove-item');
    
    removeButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            const row = event.target.closest('tr');  
            if (row) {
                row.remove(); 
            }
        });
    });
});

        const editButtons = document.querySelectorAll('.edit-item');
        editButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                const row = event.target.closest('tr');
                if (row) {
                    const productName = row.cells[1].textContent;
                    const category = row.cells[2].textContent;
                    const price = row.cells[3].textContent;
                    const piece = row.cells[4].textContent;

                    const newProductName = prompt("Edit Product Name:", productName);
                    const newCategory = prompt("Edit Category:", category);
                    const newPrice = prompt("Edit Price:", price);
                    const newPiece = prompt("Edit Piece:", piece);

                    if (newProductName && newCategory && newPrice && newPiece) {
                        row.cells[1].textContent = newProductName;
                        row.cells[2].textContent = newCategory;
                        row.cells[3].textContent = newPrice;
                        row.cells[4].textContent = newPiece;
                    }
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

function openAddProductModal() {
            document.getElementById('addProductModal').style.display = 'block';
        }

        function closeAddProductModal() {
            document.getElementById('addProductModal').style.display = 'none';
        }

        // Add Product Form Submission
        document.getElementById('addProductForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            // Get the form values
            const productName = document.getElementById('productName').value;
            const category = document.getElementById('category').value;
            const price = document.getElementById('price').value;
            const piece = document.getElementById('piece').value;
            const productImage = document.getElementById('productImage').files[0]; 

            if (!productImage) {
                alert('Please select an image.');
                return;
            }

            const reader = new FileReader(); 

            reader.onload = function(event) {
                const imageURL = event.target.result; 
                const table = document.querySelector('table tbody');
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td><img src="${imageURL}" alt="${productName}" class="product-image"></td>
                    <td>${productName}</td>
                    <td>${category}</td>
                    <td>₱${price}</td>
                    <td>${piece}</td>
                    <td>
                        <button class="edit-item"><i class="fas fa-pencil-alt"></i></button> |  
                        <button class="remove-item"><i class="fas fa-trash"></i></button>
                    </td>
                `;

                table.appendChild(newRow);

                // Reset the form inputs
                document.getElementById('addProductForm').reset();

                // Close the modal
                closeAddProductModal();
            };

            // Start reading the file as DataURL (base64)
            reader.readAsDataURL(productImage);
        });
    </script>

</body>
</html>
