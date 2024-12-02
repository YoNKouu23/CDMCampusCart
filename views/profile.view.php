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
                <form id="details-form">
                   <div class="form-group">
                    <h4>USERNAME</h4>
                    <!-- Set the placeholder to the name value from session -->
                    <input type="text" id="name" name="name" placeholder="<?php echo htmlspecialchars($_SESSION['user']['username']); ?>" required>
                    </div>


    
                    <div class="form-group">
                    <h4>NAME</h4>
                    <!-- Set the placeholder to the name value from session -->
                    <input type="text" id="name" name="name" placeholder="<?php echo htmlspecialchars($_SESSION['user']['name']); ?>" required>
                    </div>


                    <div class="form-group">
                    <h4>EMAIL</h4>
                    <h4 id="current-email"><?php echo htmlspecialchars($_SESSION['user']['email']); ?></h4>
                    </div>

    
                    <div class="form-group">
                    <h4>GENDER</h4>
                    <form id="gender" name="gender" required>
                        <input type="radio" name="gender" value="male" <?php echo ($_SESSION['user']['gender'] === 'male') ? 'checked' : ''; ?>> Male
                        <input type="radio" name="gender" value="female" <?php echo ($_SESSION['user']['gender'] === 'female') ? 'checked' : ''; ?>> Female
                        <input type="radio" name="gender" value="other" <?php echo ($_SESSION['user']['gender'] === 'other') ? 'checked' : ''; ?>> Other
                    </form>
                    </div>

                    <?php
                    // Get the user's birthdate from the session (assuming the format is YYYY-MM-DD)
                    $birthdate = $_SESSION['user']['birthdate'] ?? '';
                    $birthdateParts = explode('-', $birthdate); // Split the birthdate into [year, month, day]

                    $day = $birthdateParts[2] ?? '';
                    $month = $birthdateParts[1] ?? '';
                    $year = $birthdateParts[0] ?? '';
                    ?>

                    <div class="form-group">
                        <h4>DATE OF BIRTH</h4>
                        <div class="dob-fields">
                            <select id="day" name="day" required>
                                <option value="" disabled <?php echo ($day === '') ? 'selected' : ''; ?>>Day</option>
                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                    <option value="<?php echo $i; ?>" <?php echo ($i == $day) ? 'selected' : ''; ?>><?php echo $i; ?></option>
                                <?php } ?>
                            </select>

                            <select id="month" name="month" required>
                                <option value="" disabled <?php echo ($month === '') ? 'selected' : ''; ?>>Month</option>
                                <?php
                                $months = [
                                    1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June',
                                    7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
                                ];
                                foreach ($months as $key => $value) {
                                    echo '<option value="' . $key . '" ' . (($key == $month) ? 'selected' : '') . '>' . $value . '</option>';
                                }
                                ?>
                            </select>

                            <select id="year" name="year" required>
                                <option value="" disabled <?php echo ($year === '') ? 'selected' : ''; ?>>Year</option>
                                <?php
                                $currentYear = date('Y');
                                for ($i = $currentYear; $i >= 1900; $i--) {
                                    echo '<option value="' . $i . '" ' . (($i == $year) ? 'selected' : '') . '>' . $i . '</option>';
                                }
                                ?>
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
                <img src="../public/img/profile.png" alt="Profile Picture" id="profile-img">
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

function editEmail() {
    document.getElementById('edit-email-form').style.display = 'block';
    document.getElementById('current-email').style.display = 'none';
    document.getElementById('change-email-btn').style.display = 'none';
}

document.getElementById('save-button').addEventListener('click', function() {
            const newUsername = document.getElementById('username').value;
            const newName =document.getElementById('name').value;
            if (newUsername) {
                document.getElementById('profile-username').textContent = newUsername;
            }
            else {
                alert('Please enter a username.');
            }

            if (newName) {
        document.getElementById('profile-name').textContent = newName;
            }

            document.getElementById('username').value = '';
            document.getElementById('name').value = '';
            document.getElementById('address').value = '';
            document.getElementById('phone').value = '';

            const genderRadios = document.getElementsByName('gender');
            genderRadios.forEach(radio => radio.checked = false);

            document.getElementById('day').selectedIndex = 0;
            document.getElementById('month').selectedIndex = 0;
            document.getElementById('year').selectedIndex = 0;

            document.getElementById('current-email').textContent = 'hann****@gmail.com';
            document.getElementById('edit-email-form').style.display = 'none';
            document.getElementById('current-email').style.display = 'block';
            document.getElementById('change-email-btn').style.display = 'block';
        });


function saveEmail() {
    var newEmail = document.getElementById('new-email').value;
    if (newEmail) {
        document.getElementById('current-email').textContent = newEmail;
        document.querySelector('.profile p').textContent = newEmail;
    document.getElementById('edit-email-form').style.display = 'none';
        document.getElementById('current-email').style.display = 'block';
        document.getElementById('change-email-btn').style.display = 'block';
    } else {
        alert('Please enter a valid email address.');
    }
}

function cancelEdit() {

    document.getElementById('edit-email-form').style.display = 'none';
    document.getElementById('current-email').style.display = 'block';
    document.getElementById('change-email-btn').style.display = 'block';
}

const buyButtons = document.querySelectorAll('.buy-again-btn');

buyButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        window.location.href = "../views/buy.view.php"; 
    });
});

document.getElementById('save-button').addEventListener('click', function() {

    document.getElementById('name').value = '';
    document.getElementById('address').value = '';
    document.getElementById('phone').value = '';


    const genderRadios = document.getElementsByName('gender');
    genderRadios.forEach(radio => radio.checked = false);

    document.getElementById('day').selectedIndex = 0; 
    document.getElementById('month').selectedIndex = 0; 
    document.getElementById('year').selectedIndex = 0; 

    document.getElementById('current-email').textContent = 'hann****@gmail.com'; 
    document.getElementById('edit-email-form').style.display = 'none'; 
    document.getElementById('current-email').style.display = 'block'; 

    document.getElementById('change-email-btn').style.display = 'block';
});
function previewImage() {
    const fileInput = document.getElementById('file-input');
    const profileImage = document.getElementById('profile-img');

    const file = fileInput.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            profileImage.src = e.target.result;  
        }

        reader.readAsDataURL(file);  
    }
}

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
