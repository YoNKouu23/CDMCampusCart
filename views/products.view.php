<?php
session_start();  // Make sure the session is started

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['login_success']) && $_SESSION['login_success'] == 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/styles/products.css">
</head>
<body>
<?php require("../components/productbar.php")?>

    <main>
       

        <!-- Main Content -->
        <div class="main-content">
            <img src="../public/img/logo1.png" alt="Logo" class="logo">
            <div class="search-bar">
                <input type="text" placeholder="Search for products...">
                <button><i class="fas fa-search"></i></button>
            </div>

            <section class="product-section_ics-section" id="ics">
                <h2><span>PRODUCTS</span> ORGANIZATION</h2>
                <div class="product-grid">
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/organization1.png" alt="Product 1 Image"> 
                        </div>
                        <h3>ICS POLO SHIRT</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/organization2.png" alt="Product 1 Image"> 
                        </div>
                        <h3>ITE POLO SHIRT</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/organization3.png" alt="Product 1 Image"> 
                        </div>
                        <h3>CDM POLO SHIRT</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/organization4.png" alt="Product 1 Image"> 
                        </div>
                        <h3>IOB POLO SHIRT</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/organization5.png" alt="Product 1 Image"> 
                        </div>
                        <h3>ORGANIZATION SHIRT</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
  
                </div>
                
            </section>

            <section class="product-section_iob-section" id="iob">
                <h2><span>PRODUCTS</span> UNIFORM</h2>
                <div class="product-grid">
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/maleuniform.png" alt="Product 1 Image"> 
                        </div>
                        <h3>WHITE UNIFORM (MEN)</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/uniform1.png" alt="Product 1 Image"> 
                        </div>
                        <h3>WHITE UNIFORM (WOMEN)</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/peuniform.png" alt="Product 1 Image"> 
                        </div>
                        <h3>P.E UNIFORM</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/uniform2.png" alt="Product 1 Image"> 
                        </div>
                        <h3>GREEN PANTS</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/pepants.png" alt="Product 1 Image"> 
                        </div>
                        <h3>P.E PANTS</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                </div>
                
            </section>

            <section class="product-section_ite-section" id="ite">
                <h2><span>PRODUCTS</span> MERCHANDISE</h2>
                <div class="product-grid">
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/lace.png" class="lace" alt="Product 1 Image"> 
                        </div>
                        <h3>ID LACE</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/pin.png" alt="Product 1 Image"> 
                        </div>
                        <h3>IOB PIN</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
    
                </div>
                
            </section>
        </div>
    </main>
    <div id="details-section" class="section hidden">
        <h2>CHECKOUT</h2>
        <form id="details-form">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="address">Shipping Address:</label>
            <input type="text" id="address" name="address" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
        </form>
        <button class="paypal-button" id="paypal-btn">Proceed to Paypal</button>
        <button class="cod-button" id="cod-btn">Proceed to Cod</button>
        <button class="back-button" onclick="showDialog()">Back</button>
    </div>
    
    <div id="cod-section" class="section hidden">
        <h1>COD PAYMENT</h1>
        <form>
            <div class="cod-section">
                <div class="payment-summary">
                    <h3>Total: <span id="payment-total-amount">₱0</span></h3>
                </div>
                <button class="thankyou-button" id="thankyou-btn-cod">Thankyou</button>
            </div>
        </form>
    </div>
    
    <div id="paypal-section" class="section hidden">
        <h1>PAYPAL PAYMENT</h1>
        <form>
            <div class="paypal">
                <h2>PayPal Payment Gateway</h2>
                <p>Click the button below to proceed with your payment.</p>
                <div id="paypal-button-container"></div>
                <div class="payment-summary">
                    <h3>Total: <span id="paypal-total-amount">₱0</span></h3>
                </div>
                <button class="thankyou-button" id="thankyou-btn-paypal">Thankyou</button>
            </div>
        </form>
       
    </div>
    <script src="https://www.paypal.com/sdk/js?client-id=AXyT_-QU3jKtjMnCFLyKzWQ0fG4uTDWHVgQkYY2UiYR4kyAONQA9eo1ZoL-3zsfFrYjEVRNCAsR0G4oB"></script>
    <!-- Hidden thank you message -->
    <div id="thankyou-message" class="hidden">
        <h3>Thank you for your payment!</h3>
    </div>

    <footer>
        <p>&copy; 2024 CDM CAMPUS CART. All rights reserved.</p>
    </footer>
     
      <!-- Confirmation message container -->
      <div id="cart-message" class="cart-message"></div>

      <!-- Dialog Box for Add to Cart / Buy Now -->
      <div id="action-dialog" class="action-dialog">
          <div class="dialog-content">
              <p>What do you want to do with this product?</p>
              <button id="add-to-cart-btn">Add to Cart</button>
              <button id="buy-now-btn">Buy Now</button>
              <button id="close-dialog-btn">x</button>
          </div>
      </div>
  
     <script>

    const isLoggedIn = <?php echo $isLoggedIn ? 'true' : 'false'; ?>;
   
    function handleBuyNow() {
    const purchaseData = {
        productName: currentProductName,
        productPrice: currentProductPrice,
        userEmail: <?php echo json_encode($_SESSION['user']['email']); ?>, // Send user's email
        // Add any other relevant data here
    };

            fetch('../api/purchase.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(purchaseData),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Purchase successful!');
                    // Optionally redirect or update the UI
                } else {
                    alert('Purchase failed: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while processing your purchase.');
            });
        }

           






            
        // JavaScript code for handling the dropdown and smooth scrolling 
            const dropdownItems = document.querySelectorAll('.dropdown-menu li');
                
            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    const departmentId = item.getAttribute('data-value');  
                    const targetSection = document.getElementById(departmentId);  

                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });


                    // DOM elements for the action dialog and cart message
                const priceButtons = document.querySelectorAll('.price-btn');
                const actionDialog = document.getElementById('action-dialog');
                const addToCartButton = document.getElementById('add-to-cart-btn');
                const buyNowButton = document.getElementById('buy-now-btn');
                const closeDialogButton = document.getElementById('close-dialog-btn');
                const cartMessage = document.getElementById('cart-message');
                const thanksMessage = document.getElementById('thankyou-message')
                const detailsSection = document.getElementById("details-section");
                const PaypalButton = document.getElementById('paypal-btn');
                const CodButton = document.getElementById("cod-btn");

                document.getElementById('thankyou-btn-paypal').addEventListener('click', function(event) {
                    event.preventDefault(); 
                    document.getElementById('thankyou-message').classList.remove('hidden');  
                    document.getElementById('paypal-section').classList.add('hidden');  

                    setTimeout(() => {
                            thanksMessage.style.display = 'none';
                        }, 2000); 
                });

                document.getElementById('thankyou-btn-cod').addEventListener('click', function(event) {
                    event.preventDefault();  
                    document.getElementById('thankyou-message').classList.remove('hidden');  
                    document.getElementById('cod-section').classList.add('hidden');  
                    setTimeout(() => {
                            thanksMessage.style.display = 'none';
                        }, 2000); 
                });

            let currentProductName = '';
            let currentProductPrice = 0;

            function showDetailsForm() {
                detailsSection.classList.remove("hidden");
                detailsSection.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
            function showPaypal() {
                document.getElementById("details-section").classList.add("hidden");
                document.getElementById("paypal-section").classList.remove("hidden");
                document.getElementById("cod-section").classList.add("hidden");

                updateTotal();

                paypal.Buttons({
                    createOrder: function(data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: totalAmount.replace('₱', '').trim()  
                                }
                            }]
                        });
                    },
                    onApprove: function(data, actions) {
                        return actions.order.capture().then(function(details) {
                            alert('Transaction completed by ' + details.payer.name.given_name);
                            showThankYouSection();  
                        });
                    },
                    onError: function(err) {
                        console.error('PayPal Error: ', err);
                        alert('An error occurred with the PayPal payment.');
                    }
                }).render('#paypal-button-container');  
            }

            PaypalButton.addEventListener("click", showPaypal);
            CodButton.addEventListener("click", showCod);
            

            function showCod() {
                document.getElementById("details-section").classList.add("hidden");
                document.getElementById("paypal-section").classList.add("hidden");
                document.getElementById("cod-section").classList.remove("hidden");
                document.getElementById("thankyou-section").classList.add("hidden");
                updateTotal();
            }

            function showDetails() {
                document.getElementById("details-section").classList.remove("hidden");
                document.getElementById("paypal-section").classList.add("hidden");
                document.getElementById("cod-section").classList.add("hidden");
                document.getElementById("thankyou-section").classList.add("hidden"); 
                updateOrderSummary(true);
            }

            function showDialog() {
                document.getElementById("details-section").classList.add("hidden");
                document.getElementById("paypal-section").classList.add("hidden");
                document.getElementById("cod-section").classList.add("hidden");
                document.getElementById("dialog-content").classList.remove("hidden");
                document.getElementById("thankyou-section").classList.add("hidden");

                updateOrderSummary(true);
            }

                      // Update the buyNowButton event listener
            buyNowButton.addEventListener('click', function() {
                if (!isLoggedIn) {
                    alert('You must log in to proceed with the purchase!');
                    window.location.href = 'login.php'; // Redirect to login page
                    return;
                }
                handleBuyNow(); // Proceed to handle purchase
            });
                

                
                        // Handle "Add to Cart" click
                        addToCartButton.addEventListener('click', function() {
                        if (!isLoggedIn) {
                            alert('You must log in to add items to your cart!');
                            window.location.href = 'login.php'; // Redirect to login page
                            return;
                        }
                        showMessage(`${currentProductName} has been added to your cart!`);
                        actionDialog.style.display = 'none';
                    });

            
                    // Show confirmation message when an item is added to the cart
                    function showMessage(message) {
                        cartMessage.textContent = message;
                        cartMessage.style.display = 'block';
                        setTimeout(() => {
                            cartMessage.style.display = 'none';
                        }, 3000); 
                    }
                
                    // Handle price button click to open action dialog
                    priceButtons.forEach(button => {
                        button.addEventListener('click', function() {
                            currentProductName = this.closest('.product-item').querySelector('h3').textContent;
                            currentProductPrice = parseFloat(this.getAttribute('data-price'));  
                            actionDialog.style.display = 'block'; 
                        });
                    });

                // Handle "Add to Cart" click
                addToCartButton.addEventListener('click', function() {
                    showMessage(`${currentProductName} has been added to your cart!`);
                    actionDialog.style.display = 'none'; 
                });

            

                // Handle "Close" button click
                closeDialogButton.addEventListener('click', function() {
                    actionDialog.style.display = 'none'; 
                });

                    // Get the search bar and product items
            const searchInput = document.querySelector('.search-bar input');
            const productItems = document.querySelectorAll('.product-item');

            // Add event listener to the search input to listen for user input
            searchInput.addEventListener('input', function() {
                const searchTerm = searchInput.value.toLowerCase();  // Get the input value and convert to lowercase

                // Loop through all the product items and check if they match the search term
                productItems.forEach(function(item) {
                    const productName = item.querySelector('h3').textContent.toLowerCase();  // Get the product name
                    if (productName.includes(searchTerm)) {
                        item.style.display = '';  // Show the item if it matches the search term
                    } else {
                        item.style.display = 'none';  // Hide the item if it does not match
                    }
                });
            });

            let totalAmount = 0;  // This will store the total price

            // Function to update the total display
            function updateTotal() {
                // Update the total amount in PayPal section
                document.getElementById('payment-total-amount').textContent = `₱${totalAmount.toFixed(2)}`;
                document.getElementById('paypal-total-amount').textContent = `₱${totalAmount.toFixed(2)}`;
            }

            // Handle price button click to open action dialog and update the total
            priceButtons.forEach(button => {
                button.addEventListener('click', function() {
                    currentProductName = this.closest('.product-item').querySelector('h3').textContent;
                    const productPrice = parseFloat(this.getAttribute('data-price'));  // Get the price of the selected product

                    // Update the total amount by adding the product price
                    totalAmount += productPrice;

                    // Update the total display
                    updateTotal();

                    actionDialog.style.display = 'block'; // Show action dialog
                });
            });



     </script>
</body>
</html>
