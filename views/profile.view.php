<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['login_success']) && $_SESSION['login_success'] === true) {
    // Access the session data
    $user = $_SESSION['user'];  // This holds the user's session data like username, email, etc.
} else {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

?>

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
   
    <?php require("../components/navbar.php")?>
    <main>
   

        <div class="profile-details-container">
            <div id="details-section" class="details-section">      
                <h2>MY <span>PROFILE</span></h2>
                <h5>MANAGE AND PROTECT YOUR ACCOUNT</h5>
                <hr class="line">
               <form id="details-form" method="POST" action="../controllers/profile.php" enctype="multipart/form-data">
                <div class="form-group">
                    <h4>USERNAME</h4>
                    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_SESSION['user']['username']); ?>" required>
                </div>

                <div class="form-group">
                    <h4>NAME</h4>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($_SESSION['user']['name']); ?>" required>
                </div>

                <div class="form-group">
                    <h4>EMAIL</h4>
                    <h4 id="current-email"><?php echo htmlspecialchars($_SESSION['user']['email']); ?></h4>
                </div>

                <div class="form-group">
                    <h4>GENDER</h4>
                    <input type="radio" name="gender" value="male" <?php echo ($_SESSION['user']['gender'] === 'male') ? 'checked' : ''; ?>> Male
                    <input type="radio" name="gender" value="female" <?php echo ($_SESSION['user']['gender'] === 'female') ? 'checked' : ''; ?>> Female
                    <input type="radio" name="gender" value="other" <?php echo ($_SESSION['user']['gender'] === 'other') ? 'checked' : ''; ?>> Other
                </div>

                <div class="form-group">
                    <h4>DATE OF BIRTH</h4>
                    <input type="date" id="birthdate" name="birthdate" value="<?php echo htmlspecialchars($_SESSION['user']['birthdate']); ?>" required>
                </div>

                <div class="form-group">
                    <h4>PROFILE PICTURE</h4>
                    <input type="file" id="file-input" name="profile_image" accept="image/*" onchange="previewImage()">
                </div>

                <button type="submit" id="save-button" class="saved-button">Save</button>
            </form>
            </div>

            
           
            <div id="purchase-history" class="purchase-history" style="display:none;">
                <h2>MY <span>PURCHASES</span></h2>
                <h5>MANAGE AND PROTECT YOUR ACCOUNT</h5>
                <hr class="line">
                
             
     <div class="product-container">
      
        <div class="product-item">
            <div class="purchase-box">
                <img src="../public/img/organization1.png" alt="Product 1">
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
        
        <div class="product-item">
            <div class="purchase-box">
                <img src="../public/img/organization1.png" alt="Product 1">
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
        
        
    
        <div class="product-item">
            <div class="purchase-box">
                <img src="../public/img/organization1.png" alt="Product 1">
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
        
        <div class="product-item">
            <div class="purchase-box">
                <img src="../public/img/organization1.png" alt="Product 1">
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
               
               <div id="status-section" class="status-section" style="display:none;">
                <h2>MY <span>STATUS</span></h2>
                <h5>SEE YOUR ORDER AND ACCOUNT UPDATES</h5>
                <hr class="line">
               
                <div class="product-item">
                    <div class="purchase-box">
                        <img src="../public/img/organization1.png" alt="Product 1">
                    </div>
                    <div class="product-details">
                        <h4>ICS Batch Shirt</h4>
                        <p><span>Size:</span> Medium</p>
                        <p><span>Color:</span> Red</p>
                        <h3>₱250.00</h3>
                    </div>
                    <div class="status-item">
                        <div class="status-box">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="status-details">
                           
                            <p>Status: <span class="status-text pay">To Pay</span></p>
                            <p>Estimated Delivery: <span>Nov 30, 2024</span></p>
                        </div>
                    </div>
                </div>
                <hr class="line">
                <div class="product-item">
                    <div class="purchase-box">
                        <img src="../public/img/organization1.png" alt="Product 1">
                    </div>
                    <div class="product-details">
                        <h4>ICS Batch Shirt</h4>
                        <p><span>Size:</span> Medium</p>
                        <p><span>Color:</span> Red</p>
                        <h3>₱250.00</h3>
                    </div>
                    <div class="status-item">
                        <div class="status-box">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="status-details">
                           
                            <p>Status: <span class="status-text receive">To Receive</span></p>
                            <p>Estimated Delivery: <span>Nov 22, 2024</span></p>
                        </div>
                    </div>
                </div>
             
                <hr class="line">

                <div class="product-item">
                    <div class="purchase-box">
                        <img src="../public/img/organization1.png" alt="Product 1">
                    </div>
                    <div class="product-details">
                        <h4>ICS Batch Shirt</h4>
                        <p><span>Size:</span> Medium</p>
                        <p><span>Color:</span> Red</p>
                        <h3>₱250.00</h3>
                    </div>
                    <div class="status-item">
                        <div class="status-box">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="status-details">
                           
                            <p>Status: <span class="status-text pay">To Pay</span></p>
                            <p>Estimated Delivery: <span>Nov 30, 2024</span></p>
                        </div>
                    </div>
                </div>
                <hr class="line">
                <div class="product-item">
                    <div class="purchase-box">
                        <img src="../public/img/organization1.png" alt="Product 1">
                    </div>
                    <div class="product-details">
                        <h4>ICS Batch Shirt</h4>
                        <p><span>Size:</span> Medium</p>
                        <p><span>Color:</span> Red</p>
                        <h3>₱250.00</h3>
                    </div>
                    <div class="status-item">
                        <div class="status-box">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="status-details">
                           
                            <p>Status: <span class="status-text receive">To Receive</span></p>
                            <p>Estimated Delivery: <span>Nov 22, 2024</span></p>
                        </div>
                    </div>
                </div>
                <hr class="line">
            </div>
            
            <div class="profile-container">
                <h3>My Account</h3>
                <div class="profile">
                <div class="profile-image-container">
                    <!-- Display profile image if it exists, else show the default image -->
                    <img src="<?php echo isset($_SESSION['user']['profile_image']) && $_SESSION['user']['profile_image'] ? '/uploads/' . htmlspecialchars($_SESSION['user']['profile_image']) : '../public/img/profile.png'; ?>" alt="Profile Picture" id="profile-img">

                    <i class="fas fa-pencil-alt" id="edit-icon" onclick="document.getElementById('file-input').click()"></i>
                    <input type="file" id="file-input" style="display:none;" accept="image/*" onchange="previewImage()">
                </div>

                    <h2 style="margin-right:auto" id="profile-username"><?php echo htmlspecialchars($_SESSION['user']['username']); ?></h2>
                    <h3 style="margin-left:30%" id="profile-name"><?php echo htmlspecialchars($_SESSION['user']['name']); ?></h3>
                    <p><?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
                </div>
    


                <div class="profile-links">
                     <a href="#" onclick="hidePurchases()">
                         <i class="fas fa-user"></i> Profile
                         </a>
                    
                     <a href="#" onclick="showPurchases()">
                         <i class="fas fa-box"></i> My Purchases
                     </a>
                     <a href="#" onclick="showStatus()">
                        <i class="fas fa-box"></i> Status
                    </a>
                  
                    <a href="#" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i> Logout
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
               </div>

        </div>

       
    </main>

<script>
    function showPurchases() {
        document.getElementById('details-section').style.display = 'none'; 
        document.getElementById('purchase-history').style.display = 'block'; 
        document.getElementById('status-section').style.display = 'none';
    }

    function hidePurchases() {
        document.getElementById('details-section').style.display = 'block'; 
        document.getElementById('purchase-history').style.display = 'none'; 
        document.getElementById('status-section').style.display = 'none';
    }

    function showStatus() {
        document.getElementById('details-section').style.display = 'none';
        document.getElementById('purchase-history').style.display = 'none';
        document.getElementById('status-section').style.display = 'block';
    }

    function saveProfileData() {
        const newUsername = document.getElementById('username').value;
        const newName = document.getElementById('name').value;
        const newGender = document.querySelector('input[name="gender"]:checked')?.value;
        const newDOB = document.getElementById('day').value + '-' + document.getElementById('month').value + '-' + document.getElementById('year').value;

        if (newUsername && newName && newGender && newDOB) {
            // Update displayed data
            document.getElementById('profile-username').textContent = newUsername;
            document.getElementById('profile-name').textContent = newName;
            document.getElementById('profile-gender').textContent = newGender;
            document.getElementById('profile-dob').textContent = newDOB;

            // Clear form inputs after saving
            document.getElementById('username').value = '';
            document.getElementById('name').value = '';
            const genderRadios = document.getElementsByName('gender');
            genderRadios.forEach(radio => radio.checked = false);
            document.getElementById('day').selectedIndex = 0;
            document.getElementById('month').selectedIndex = 0;
            document.getElementById('year').selectedIndex = 0;

            // Send data to MongoDB via API
            fetch('/updateProfile', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    username: newUsername,
                    name: newName,
                    gender: newGender,
                    dob: newDOB
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Profile updated successfully!');
                } else {
                    alert('There was an error updating the profile.');
                }
            })
            .catch(error => {
                console.error('Error updating profile:', error);
            });

        } else {
            alert('Please fill out all fields.');
        }
    }

    // Listen for the save button click
    document.getElementById('save-button').addEventListener('click', saveProfileData);

        function previewImage() {
        const fileInput = document.getElementById('file-input');
        const profileImage = document.getElementById('profile-img');
        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                profileImage.src = e.target.result;  // Update the profile image preview
            };
            reader.readAsDataURL(file);
        }
}


    // Logout functions
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
        window.location.href = '../views/login.view.php';
    }

    function logout() {
        window.location.href = '../controllers/logout.php';  // Redirect to logout.php
    }
</script>
</body>
</html>
