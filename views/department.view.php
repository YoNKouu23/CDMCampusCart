<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/styles/department.css">
    <link rel="stylesheet" href="../public/styles/nav-bar.css">

</head>
<body>
    
    <?php require("../components/navbar.php")?>

    <main>
       

        <!-- Main Content -->
        <div class="main-content">
            <img src="../public/img/logo1.png" alt="Logo" class="logo">
            <div class="search-bar">
                <input type="text" placeholder="Search for products...">
                <button><i class="fas fa-search"></i></button>
            </div>

            <section class="product-section ics-section" id="ics">
                <h2><span>ICS</span> DEPARTMENT</h2>
            
                <div class="product-grid">
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/esp32.png" alt="Product 1 Image"> 
                        </div>
                        <h3>ESP 32</h3>
                        <button class="price-btn"  data-id="1" data-name="Esp32" data-price="200" data-image="./img/esp32.png" >₱200.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/jumper.png"  alt="Product 1 Image"> 
                        </div>
                        <h3>JUMPER WIRE</h3>
                        <button class="price-btn"  data-id="2" data-name="Jumper Wire (M to M)" data-price="250" data-image="./img/jumper.png">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/battery.png" alt="Product 1 Image"> 
                        </div>
                        <h3>9 VOLTS BATTERY CONNECTOR</h3>
                        <button class="price-btn"  data-id="3" data-name="Jumper Wire (F to F)" data-price="30 " data-image="./img/jumperff.png" >₱300.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/ledlight.png" alt="Product 1 Image"> 
                        </div>
                        <h3>LED LIGHTS</h3>
                        <button class="price-btn" data-product="Product 4" data-price="350" >₱350.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/button.png" alt="Product 1 Image"> 
                        </div>
                        <h3>PUSH BUTTON</h3>
                        <button class="price-btn" data-product="Product 5" data-price="270">₱270.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/resistor.png" alt="Product 1 Image">   
                        </div>
                        <h3>220-OHM RESISTOR</h3>
                        <button class="price-btn" data-product="Product 6" data-price="290">₱290.00 | BEST SELLER</button>
                    </div>

                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/tester.png" alt="Product 1 Image"> 
                        </div>
                        <h3>NETWORK LAN TESTER</h3>
                        <button class="price-btn"  data-id="1" data-name="Esp32" data-price="200" data-image="./img/esp32.png" >₱200.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/crimping.png"  alt="Product 1 Image"> 
                        </div>
                        <h3>CRIMPING</h3>
                        <button class="price-btn"  data-id="2" data-name="Jumper Wire (M to M)" data-price="250" data-image="./img/jumper.png">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/rj45connector.png" alt="Product 1 Image"> 
                        </div>
                        <h3>RJ45 CONNECTOR</h3>
                        <button class="price-btn"  data-id="3" data-name="Jumper Wire (F to F)" data-price="30 " data-image="./img/jumperff.png" >₱300.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/tweezer.png" alt="Product 1 Image"> 
                        </div>
                        <h3>ELBOW TWEEZER</h3>
                        <button class="price-btn" data-product="Product 4" data-price="350" >₱350.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/rubberboots.png" alt="Product 1 Image"> 
                        </div>
                        <h3>RUBBER BOOTS</h3>
                        <button class="price-btn" data-product="Product 5" data-price="270">₱270.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/cable.png" alt="Product 1 Image">   
                        </div>
                        <h3>UTP CABLE</h3>
                        <button class="price-btn" data-product="Product 6" data-price="290">₱290.00 | BEST SELLER</button>
                    </div>

                
                </div>
                
            </section>

            <section class="product-section iob-section" id="iob">
                <h2><span>IOB</span> DEPARTMENT</h2>
                <div class="product-grid">
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/esp32.png" alt="Product 1 Image"> 
                        </div>
                        <h3>Esp 32</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/jumper.png" alt="Product 1 Image"> 
                        </div>
                        <h3>Jumper Wire (M to M)</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/jumperff.png" alt="Product 1 Image"> 
                        </div>
                        <h3>Jumper Wire (F to F)</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/jumperfm.png" alt="Product 1 Image"> 
                        </div>
                        <h3>Jumper Wire (F to M)</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public//img/battery.png" alt="Product 1 Image"> 
                        </div>
                        <h3>9 Volts Battery Snap Connector</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/ledlight.png" alt="Product 1 Image"> 
                        </div>
                        <h3>Led Lights</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>

                </div>
                
            </section>

            <section class="product-section ite-section" id="ite">
                <h2><span>ITE</span> DEPARTMENT</h2>
                <div class="product-grid">
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/esp32.png" alt="Product 1 Image"> 
                        </div>
                        <h3>Esp 32</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/jumper.png" alt="Product 1 Image"> 
                        </div>
                        <h3>Jumper Wire (M to M)</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/jumperff.png" alt="Product 1 Image"> 
                        </div>
                        <h3>Jumper Wire (F to F)</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/jumperfm.png" alt="Product 1 Image"> 
                        </div>
                        <h3>Jumper Wire (F to M)</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public//img/battery.png" alt="Product 1 Image"> 
                        </div>
                        <h3>9 Volts Battery Snap Connector</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/ledlight.png" alt="Product 1 Image">  
                        </div>
                        <h3>Led Lights</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>

              
                </div>
                
            </section>


        </div>
    </main>
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
        // JavaScript for handling department dropdown navigation and smooth scrolling
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
    
        // Initialize cart if it doesn't exist
        if (!localStorage.getItem('cart')) {
            localStorage.setItem('cart', JSON.stringify([])); 
        }
    
        // DOM elements for action dialog and cart message
        const priceButtons = document.querySelectorAll('.price-btn');
        const actionDialog = document.getElementById('action-dialog');
        const addToCartButton = document.getElementById('add-to-cart-btn');
        const buyNowButton = document.getElementById('buy-now-btn');
        const closeDialogButton = document.getElementById('close-dialog-btn');
        const cartMessage = document.getElementById('cart-message');
    
        let currentProductName = '';
        let currentProductPrice = 0;
    
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

        // Handle "Close" button click on action dialog
        closeDialogButton.addEventListener('click', function() {
            actionDialog.style.display = 'none'; 
        });
    
    
    
        // DOM elements for payment dialo
        const submitPaymentButton = document.getElementById('submit-payment');
        const closeDetailsDialogButton = document.getElementById('close-details-dialog-btn');
       
        // Handle "Buy Now" button click (opens payment form)
        buyNowButton.addEventListener('click', function() {
            window.location.href = "./views/buy.view.php";
            
        });
    
        // Handle closing the payment dialog
        closeDetailsDialogButton.addEventListener('click', function() {
            detailsDialog.style.display = 'none'; 
        });
    
        // Handle payment form submission (simulated)
        document.getElementById('details-form').addEventListener('submit', function(event) {
            event.preventDefault(); 
    
            // Get payment details
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const address = document.getElementById('address').value;
            const phone = document.getElementById('phone').value;
        
            // Simulate a successful payment
            showMessage(`Thank you for your purchase, ${name}! Your payment of ₱${currentProductPrice} was successful.`);
    
            // Clear the cart after payment
            localStorage.setItem('cart', JSON.stringify([]));
    
            // Close the payment dialog
            detailsDialog.style.display = 'none';
        });
      
         // Function to show the payment dialog
    function showDetails() {
        document.getElementById("details-dialog").classList.remove("hidden");
        document.getElementById("payment-dialog").classList.add("hidden");
        document.getElementById("thankyou-dialog").classList.add("hidden");
    }

    function showPayment(event) {
    event.preventDefault();  // Prevent form submission
    document.getElementById("details-dialog").classList.add("hidden");
    document.getElementById("payment-dialog").classList.remove("hidden");
    document.getElementById("thankyou-dialog").classList.add("hidden");
    updatePaymentTotal();
}


    // Show Thank You Page
    function showThankYou() {
        document.getElementById("details-dialog").classList.add("hidden");
        document.getElementById("payment-dialog").classList.add("hidden");
        document.getElementById("thankyou-dialog").classList.remove("hidden");
        updateOrderSummary();
    }



// Function to update the total payment amount in the payment dialog
function updatePaymentTotal() {
    let totalAmount = 0;
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Sum up the prices of all items in the cart
    cart.forEach(item => {
        totalAmount += item.price;
    });

    // Update the total amount shown in the payment dialog
    document.getElementById('payment-total-amount').textContent = '₱' + totalAmount.toFixed(2);
}

// Proceed to Payment button listener
const proceedButton = document.querySelector('.proceed-button');
if (proceedButton) {
    proceedButton.addEventListener('click', function() {
        showPayment();
    });
}

    // Handle "Add to Cart" click
    addToCartButton.addEventListener('click', function() {
        showMessage(`${currentProductName} has been added to your cart!`);
        actionDialog.style.display = 'none'; 
    });

    </script>
    
    
</body>
</html>

