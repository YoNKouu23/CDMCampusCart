<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/styles/cart.css">
</head>
<body>
    <?php require("../components/navbar.php")?>

    <main>
        <div class="main-content">
            <img src="../public/img/logo1.png" alt="Logo" class="logo">
            <div class="search-bar">
                <input type="text" placeholder="Search for products...">
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>
        
       
<div id="cart-section" class="section">
    <h2><span>CART</span> ITEMS</h2>

    <!-- Flex container for cart items and order summary -->
    <div class="cart-container">
        <!-- Left side: Cart items -->
        <div class="cart-items">    
            <div class="cart-item" data-id="1" data-price="30">
                <div class="image-box">
                    <img src="../public/img/jumper.png" alt="Product Image">
                </div>
                <div class="item-details">
                    <p><strong>Product Name</strong></p>
                    <p>₱30</p>
                    <div class="quantity-controls">
                        <button class="minus-btn">-</button>
                        <input type="text" class="quantity-input" value="1">
                        <button class="plus-btn">+</button>
                    </div>
                </div>
                <button class="remove-item">
                    <i class="fas fa-trash"></i>
                </button>
            </div>

            <div class="cart-item" data-id="2" data-price="60">
                <div class="image-box">
                    <img src="../publi/img/esp32.png" alt="Product Image">
                </div>
                <div class="item-details">
                    <p><strong>Product Name</strong></p>
                    <p>₱60</p>
                    <div class="quantity-controls">
                        <button class="minus-btn">-</button>
                        <input type="text" class="quantity-input" value="1">
                        <button class="plus-btn">+</button>
                    </div>
                </div>
                <button class="remove-item">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>

        <!-- Right side: Order Summary -->
        <div class="order-summary">
            <h3>Order Summary</h3>
            <div class="summary-items">
                <!-- Dynamically updated items here -->
            </div>
            <hr>
            <div class="summary-item total">
                <strong>Total:</strong>
                <strong id="total-amount">₱0</strong>
            </div>
            <button class="proceed-button" onclick="showDetails()">Proceed to Details</button>
        </div>
    </div>
</div>


        <!-- Details Section (hidden by default) -->
        <div id="details-section" class="section hidden">
            <h2><span>CHECK</span>OUT</h2>
            <form id="details-form">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Shipping Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <!-- Payment Method Selection -->
            <label for="payment-method">Payment Method:</label>
            <select id="payment-method" name="payment-method" required>
             <option value="gcash">Gcash</option>
            <option value="cod">Cash on Delivery (COD)</option>
            </select>
            </form>

           <button class="proceed-button" onclick="showPayment()">Proceed to Payment</button>
            <button class="back-button" onclick="showCart()">Back to Cart</button>
        </div>

        <div id="payment-section" class="section hidden">
            <h2>PAYMENT</h2>
            <div class="just-logo">
                <img src="../public/img/logo1.png" alt="Logo" class="logo">
                <h3>CDM CAMPUS CART</h3>
            </div>
        
            <form>
                <div class="gcash-qr-section">
                    <h4>Scan the QR Code to Pay</h4>
                    <img src="./public/img/qr.jpg" alt="GCash QR Code" class="gcash-qr-img">
                    <p>Cdm Campus Cart</p>
        
                    <!-- Total amount inside the same box as QR code -->
                    <div class="payment-summary">
                        <h3>Total: <span id="payment-total-amount">₱0</span></h3>
                    </div>

                    <button type="button" class="proceed-button" onclick="showThankYouSection()">Complete Purchase</button>
                </div>
                
            </form>
        
            <button class="back-button" onclick="showDetails()">Back to Details</button>
        </div>


        <div id="thankyou-section" class="section hidden">
            <h2>PAYMENT</h2>
            <div class="just-logo">
                <img src="./img/logo1.png" alt="Logo" class="logo">
                <h3>CDM CAMPUS CART</h3>
            </div>
        
            <form>
                <div class="thankyou-section">
                    <img src="../public/img/checkk.png" alt="check" class="check-img">
                    <h4>Thank You!</h4>
                    <p>Your payment has been sucessfully processed.</p>
                    <p>___________________________________________</p>
        
                    <!-- Total amount inside the same box as QR code -->
                    <div class="payment-summary">
                        
                        <h3>Total: <span id="thankyou-total-amount">₱0</span></h3>
                    </div>

                    <button type="submit" class="proceed-button">Complete Purchase</button>
                </div>
                
            </form>
        
            <button class="back-button" onclick="showDetails()">Back to Details</button>
        </div>
        

    </main>
    <footer>
        <p>&copy; 2024 CDM CAMPUS CART. All rights reserved.</p>
    </footer>

    <script>

document.addEventListener('DOMContentLoaded', function() {
    updateCart(); 
});

// Function to update the cart on the cart.html page
function updateCart() {
    const cartItemsList = document.querySelector('.cart-items'); 
    const totalPriceElement = document.getElementById('total-amount'); 
    const cart = JSON.parse(localStorage.getItem('cart')) || []; 

    cartItemsList.innerHTML = ''; 
    let totalPrice = 0;

    // Loop through cart and display items
    cart.forEach(item => {
        const listItem = document.createElement('div');
        listItem.classList.add('cart-item');
        listItem.setAttribute('data-id', item.id); 
        listItem.setAttribute('data-price', item.price);

        listItem.innerHTML = `
            <div class="image-box">
                <img src="${item.image}" alt="${item.name}">
            </div>
            <div class="item-details">
                <p><strong>${item.name}</strong></p>
                <p>₱${item.price.toFixed(2)}</p>
                <div class="quantity-controls">
                    <button class="minus-btn">-</button>
                    <input type="number" class="quantity-input" value="${item.quantity}" min="1">
                    <button class="plus-btn">+</button>
                </div>
            </div>
            <button class="remove-item"><i class="fas fa-trash"></i></button>
        `;

        cartItemsList.appendChild(listItem);
        totalPrice += item.price * item.quantity; 
    });

    // Update the total price in the cart
    totalPriceElement.textContent = `₱${totalPrice.toFixed(2)}`;

    // Add event listeners to dynamic elements
    initializeCart(); 
}

// Initialize the cart's quantity input handlers
function initializeCart() {
    document.querySelectorAll('.quantity-input').forEach(function(input) {
        input.addEventListener('input', function() {
            updateOrderSummary(); 
        });
    });

    // Handle item removal (trash icon)
    document.querySelectorAll('.remove-item').forEach(function(button) {
        button.addEventListener('click', function() {
            const item = this.closest('.cart-item');
            item.remove();
            updateOrderSummary(); 
        });
    });

    // Handle quantity changes (+ and - buttons)
    document.querySelectorAll('.plus-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const quantityInput = this.previousElementSibling;
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
            updateOrderSummary(); 
        });
    });

    document.querySelectorAll('.minus-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const quantityInput = this.nextElementSibling;
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                updateOrderSummary(); 
            }
        });
    });
}

// Update order summary based on current cart items
function updateOrderSummary() {
    const summaryItemsContainer = document.querySelector('.summary-items');
    const cartItems = document.querySelectorAll('.cart-item');
    let totalAmount = 0;

    summaryItemsContainer.innerHTML = ''; 

    cartItems.forEach(function(item) {
        const price = parseFloat(item.getAttribute('data-price')); 
        const quantity = parseInt(item.querySelector('.quantity-input').value);
        const total = price * quantity;

        const summaryItem = document.createElement('div');
        summaryItem.classList.add('summary-item');
        summaryItem.innerHTML = `
            <p><strong>Product:</strong> ₱${price} x ${quantity} = ₱${total}</p>
        `;
        summaryItemsContainer.appendChild(summaryItem);

        totalAmount += total; // Add to the total amount
    });

    // Update total price for the cart
    document.getElementById('total-amount').textContent = `₱${totalAmount.toFixed(2)}`;
}

         // Functions to show/hide sections
         function showCart() {
            document.getElementById("cart-section").classList.remove("hidden");
            document.getElementById("details-section").classList.add("hidden");
            document.getElementById("payment-section").classList.add("hidden");
            document.getElementById("thankyou-section").classList.add("hidden");
        }

        function showDetails() {
            document.getElementById("cart-section").classList.add("hidden");
            document.getElementById("details-section").classList.remove("hidden");
            document.getElementById("payment-section").classList.add("hidden");
            document.getElementById("thankyou-section").classList.add("hidden");
        }

        function showPayment() {
            document.getElementById("cart-section").classList.add("hidden");
            document.getElementById("details-section").classList.add("hidden");
            document.getElementById("payment-section").classList.remove("hidden");
            document.getElementById("thankyou-section").classList.add("hidden");
            updateOrderSummary(true);
        }

        function showThankYouSection() {
            document.getElementById("cart-section").classList.add("hidden");
            document.getElementById("details-section").classList.add("hidden");
            document.getElementById("payment-section").classList.add("hidden");
            document.getElementById("thankyou-section").classList.remove("hidden");
            updateOrderSummary(true);

             // Get the total amount from the payment section
             const totalAmount = document.getElementById('payment-total-amount').textContent;

            // Update the total amount in the thank-you section
             document.getElementById('thankyou-total-amount').textContent = totalAmount;
        }
    
        // Handle item removal (trash icon)
        document.querySelectorAll('.remove-item').forEach(function(button) {
            button.addEventListener('click', function() {
                const item = this.closest('.cart-item');
                item.remove();
                updateOrderSummary(); 
            });
        });
    
        // Handle quantity changes (+ and - buttons)
        document.querySelectorAll('.plus-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                const quantityInput = this.previousElementSibling;
                let quantity = parseInt(quantityInput.value);
                quantityInput.value = quantity + 1;
                updateOrderSummary(); 
            });
        });
    
        document.querySelectorAll('.minus-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                const quantityInput = this.nextElementSibling;
                let quantity = parseInt(quantityInput.value);
                if (quantity > 1) {
                    quantityInput.value = quantity - 1;
                    updateOrderSummary(); 
                }
            });
        });
    
        // Update order summary based on current cart items
        function updateOrderSummary(isPayment = false) {
            const summaryItemsContainer = isPayment
                ? document.querySelector('.payment-summary')
                : document.querySelector('.summary-items');
            const cartItems = document.querySelectorAll('.cart-item');
            let totalAmount = 0;
            
            if (!isPayment) {
                summaryItemsContainer.innerHTML = ''; 
            }
    
            cartItems.forEach(function(item) {
                // Retrieve price and quantity
                const price = parseFloat(item.getAttribute('data-price')); 
                const quantity = parseInt(item.querySelector('.quantity-input').value);
                const total = price * quantity;
    
                if (!isPayment) {
                    // Add to the summary section for the cart
                    const summaryItem = document.createElement('div');
                    summaryItem.classList.add('summary-item');
                    summaryItem.innerHTML = `
                        <p><strong>Product:</strong> ₱${price} x ${quantity} = ₱${total}</p>
                    `;
                    summaryItemsContainer.appendChild(summaryItem);
                }
    
                totalAmount += total; 
            });
    
            // Update total price for both sections (cart and payment)
            if (isPayment) {
                document.getElementById('payment-total-amount').textContent = `₱${totalAmount.toFixed(2)}`;
            } else {
                document.getElementById('total-amount').textContent = `₱${totalAmount.toFixed(2)}`;
            }
        }
    
        // Update the quantity inputs after loading the page to ensure they are interactive
        function initializeCart() {
            document.querySelectorAll('.quantity-input').forEach(function(input) {
                input.addEventListener('input', function() {
                    updateOrderSummary(); 
                });
            });
        }
    
        // Initial update of the order summary and setting up event listeners for quantity inputs
        initializeCart();
        updateOrderSummary();
        
        // Cart page (cart.html) display logic
document.addEventListener('DOMContentLoaded', function() {
    updateCart();
});

// Function to update the cart on the cart.html page
function updateCart() {
    const cartItemsList = document.getElementById('cart-items');
    const totalPriceElement = document.getElementById('total-price');
    const cart = JSON.parse(localStorage.getItem('cart'));

    cartItemsList.innerHTML = ''; 
    let totalPrice = 0;

    // Loop through cart and display items
    cart.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - ₱${item.price.toFixed(2)}`;
        cartItemsList.appendChild(listItem);
        totalPrice += item.price;
    });

    // Update the total price
    totalPriceElement.textContent = `₱${totalPrice.toFixed(2)}`;
}


    
    </script>
    
</body>
</html>
