<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../public/styles/profile.css">
</head>
<body>
    <header>
        <div class="logo">
            <h3>CDM CAMPUS CART</h3>
        </div>
        <div class="top-bar">
            <div class="custom-dropdown">
                <button class="dropdown-button" onclick="window.location.href='product.html'">
                    Department Section<span class="caret">^</span>
                </button>                
            </div>
            <div class="navbar-links">
                <a href="organization.html">Products</a>
                <a href="#">About</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
        <div class="button-container">
            <a href="cart.html">
                <button class="cart-button">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </a>
            <a href="profile.html">
                <button class="profile-button">
                    <i class="fas fa-user"></i>
                </button>
            </a>
        </div>
    </header>

    <main>
        <div class="main-content">
            <img src="../public//img/logo1.png" alt="Logo" class="logo">
            <h5>CDM CAMPUS CART</h5>
            <div class="search-bar">
                <input type="text" placeholder="Search for products...">
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>
    
        <!-- Flex container for profile and details sections -->
        <div class="profile-details-container">
            <!-- Details section -->
            <div id="details-section" class="details-section">
                <h2>MY <span>PROFILE</span></h2>
                <h5>MANAGE AND PROTECT YOUR ACCOUNT</h5>
                <hr class="line">
                <form id="details-form">
                    <div class="form-group">
                        <h4>USERNAME</h4>
                        <input type="text" id="name" name="name" placeholder="TESTUSER"required>
                    </div>
    
                    <div class="form-group">
                        <h4>NAME</h4>
                        <input type="text" id="address" name="address" placeholder="HANNI"required>
                    </div>
    
                    <div class="form-group">
                        <h4>EMAIL</h4>
                        <h4 id="current-email">hann****@gmail.com</h4> <!-- Display current email -->
                        <button id="change-email-btn" onclick="editEmail()">Change Email</button>
                    
                        <!-- Edit Email Form (hidden by default) -->
                        <div id="edit-email-form" style="display: none;">
                            <input type="email" id="new-email" placeholder="Enter new email">
                            <button onclick="saveEmail()">Save</button>
                            <button onclick="cancelEdit()">Cancel</button>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <h4>PHONE NUMBER</h4>
                        <input type="text" id="phone" name="phone" placeholder="09774817003"required>
                    </div>
    
                    <div class="form-group">
                        <h4>GENDER</h4>
                        <form id="gender" name="gender" required>
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Other
                        </form>
                    </div>
                    <div class="form-group">
                        <h4>DATE OF BIRTH</h4>
                        <div class="dob-fields">
                            <select id="day" name="day" required>
                                <option value="" disabled selected>Day</option>
                                <script>
                                    for (let i = 1; i <= 31; i++) {
                                        document.write('<option value="' + i + '">' + i + '</option>');
                                    }
                                </script>
                            </select>
    
                            <select id="month" name="month" required>
                                <option value="" disabled selected>Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
    
                            <select id="year" name="year" required>
                                <option value="" disabled selected>Year</option>
                                <script>
                                    const currentYear = new Date().getFullYear();
                                    for (let i = currentYear; i >= 1900; i--) {
                                        document.write('<option value="' + i + '">' + i + '</option>');
                                    }
                                </script>
                            </select>
                        </div>
                    </div>
    
    
                    <button type="button" id="save-button" class="saved-button">Save</button>
                </form>
            </div>
           
            <div id="purchase-history" class="purchase-history" style="display:none;">
                <h2>MY <span>PURCHASES</span></h2>
                <h5>MANAGE AND PROTECT YOUR ACCOUNT</h5>
                <hr class="line">
                
                <!-- Purchase History List -->
             
    <div class="product-container">
        <!-- Product 1 -->
        <div class="product-item">
            <div class="purchase-box">
                <img src="../public//img/organization1.png" alt="Product 1">
            </div>
            <div class="product-details">
                <h4>ICS Batch Shirt</h4>
                <p><span>Size:</span> Medium</p>
                <p><span>Color:</span> Red</p>
                <h3>₱250.00</h3>
            </div>
            <div class="purchase-status">
                <span class="truck-icon material-icons">local_shipping</span>
                <p>Purchase Complete</p>
                <button id="buy-again-btn" class="buy-again-btn">Buy Again</button>
            
            </div>
        </div>
        <hr class="line">
        
        <!-- Product 2 -->
        <div class="product-item">
            <div class="purchase-box">
                <img src="../public//img/organization1.png" alt="Product 1">
            </div>
            <div class="product-details">
                <h4>ICS Batch Shirt</h4>
                <p><span>Size:</span> Medium</p>
                <p><span>Color:</span> Red</p>
                <h3>₱250.00</h3>
            </div>
            <div class="purchase-status">
                <span class="truck-icon material-icons">local_shipping</span>
                <p>Purchase Complete</p>
                <button id="buy-again-btn" class="buy-again-btn">Buy Again</button>
            
            </div>
        </div>
        <hr class="line">
        
        
        <!-- Product 3 -->
        <div class="product-item">
            <div class="purchase-box">
                <img src="../public//img/organization1.png" alt="Product 1">
            </div>
            <div class="product-details">
                <h4>ICS Batch Shirt</h4>
                <p><span>Size:</span> Medium</p>
                <p><span>Color:</span> Red</p>
                <h3>₱250.00</h3>
            </div>
            <div class="purchase-status">
                <span class="truck-icon material-icons">local_shipping</span>
                <p>Purchase Complete</p>
                <button id="buy-again-btn" class="buy-again-btn">Buy Again</button>
            
            </div>
        </div>
        <hr class="line">
        
        <!-- Product 4 -->
        <div class="product-item">
            <div class="purchase-box">
                <img src="../public//img/organization1.png" alt="Product 1">
            </div>
            <div class="product-details">
                <h4>ICS Batch Shirt</h4>
                <p><span>Size:</span> Medium</p>
                <p><span>Color:</span> Red</p>
                <h3>₱250.00</h3>
            </div>
            <div class="purchase-status">
                <span class="truck-icon material-icons">local_shipping</span>
                <p>Purchase Complete</p>
                <button id="buy-again-btn" class="buy-again-btn">Buy Again</button>
            
            </div>
        </div>
        <hr class="line">
        
    </div>

  </div>
            
    
           <!-- Right side profile section -->
             <div class="profile-container">
                 <h3>My Account</h3>
                 <div class="profile">
                  <img src="../public//img/profile.png" alt="Profile Picture">
                  <p>Hanni@gmail.com</p>
                  </div>
                 <div class="profile-links">
                 <!-- Profile Link with Icon -->
                     <a href="#" onclick="hidePurchases()">
                         <i class="fas fa-user"></i> Profile
                         </a>
                     <!-- My Purchases Link with Icon -->
                     <a href="#" onclick="showPurchases()">
                         <i class="fas fa-box"></i> My Purchases
                     </a>
                    <!-- Logout Link with Icon -->
                    <a href="#" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <!-- Confirmation Modal -->
                    <div id="logoutModal" class="modal">
                       <div class="modal-content">
                           <span class="close" onclick="closeLogoutModal()">&times;</span>
                             <!-- Image inside the modal -->
                             <p>Are you sure you want to log out?</p>
                          <button id="logout-btn" onclick="confirmLogout()">Yes</button>
                        <button id="logout-btn" onclick="closeLogoutModal()">No</button>
                        <img src="../public//img/outimg.png" alt="Image" class="no-button-img">
                      
                      </div>
                   </div>
                  </div>
               </div>

        </div>

       
    </main>

    <script>
        // Show purchase history
        function showPurchases() {
            document.getElementById('details-section').style.display = 'none'; 
            document.getElementById('purchase-history').style.display = 'block'; 
        }

        // Hide purchase history and go back to profile
        function hidePurchases() {
            document.getElementById('details-section').style.display = 'block'; 
            document.getElementById('purchase-history').style.display = 'none'; 
        }

      // Function to show the edit email form
function editEmail() {
    // Show the input field for editing the email
    document.getElementById('edit-email-form').style.display = 'block';
    // Hide the current email and the "Change Email" button
    document.getElementById('current-email').style.display = 'none';
    document.getElementById('change-email-btn').style.display = 'none';
}

// Function to save the new email
function saveEmail() {
    var newEmail = document.getElementById('new-email').value;
    if (newEmail) {
        // Update the current email in the details section
        document.getElementById('current-email').textContent = newEmail;
        
        // Also update the email in the profile container (to the right)
        document.querySelector('.profile p').textContent = newEmail;

        // Hide the edit email form and show the current email and "Change Email" button
        document.getElementById('edit-email-form').style.display = 'none';
        document.getElementById('current-email').style.display = 'block';
        document.getElementById('change-email-btn').style.display = 'block';
    } else {
        alert('Please enter a valid email address.');
    }
}

// Function to cancel the email edit
function cancelEdit() {
    // Hide the edit email form and show the current email and "Change Email" button
    document.getElementById('edit-email-form').style.display = 'none';
    document.getElementById('current-email').style.display = 'block';
    document.getElementById('change-email-btn').style.display = 'block';
}


// Select all buttons with the class 'buy-again-btn'
const buyButtons = document.querySelectorAll('.buy-again-btn');

// Loop through each button and add the event listener
buyButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        window.location.href = "buy.html"; 
    });
});

// Function to handle Save button click and clear the form
document.getElementById('save-button').addEventListener('click', function() {
    // Clear text inputs
    document.getElementById('name').value = '';
    document.getElementById('address').value = '';
    document.getElementById('phone').value = '';

    // Reset gender radio buttons
    const genderRadios = document.getElementsByName('gender');
    genderRadios.forEach(radio => radio.checked = false);

    // Reset date of birth dropdowns
    document.getElementById('day').selectedIndex = 0; 
    document.getElementById('month').selectedIndex = 0; 
    document.getElementById('year').selectedIndex = 0; 

    // Reset the email input field and hide the email edit form if it's open
    document.getElementById('current-email').textContent = 'hann****@gmail.com'; 
    document.getElementById('edit-email-form').style.display = 'none'; 
    document.getElementById('current-email').style.display = 'block'; 

    // Reset email change button
    document.getElementById('change-email-btn').style.display = 'block';
});

    // Show the logout confirmation modal
function showLogoutModal() {
    document.getElementById('logoutModal').style.display = 'block';
}

// Close the logout confirmation modal
function closeLogoutModal() {
    document.getElementById('logoutModal').style.display = 'none';
}

// Confirm logout action
function confirmLogout() {
    // Clear session data and cookies
    localStorage.removeItem('user');
    sessionStorage.removeItem('user');
    document.cookie = 'userSession=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';

    // Show a logout message
    alert('You have been logged out.');

    // Redirect to login page
    window.location.href = 'index.html';
}

// Attach the logout function to the logout link
function logout() {
    showLogoutModal();
}

    </script>
</body>
</html>

