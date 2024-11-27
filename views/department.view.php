<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/styles/department.css">
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

            <section class="product-section ics-section" id="ics">
                <h2><span>ICS</span> DEPARTMENT</h2>
            
                <div class="product-grid">
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/esp32.png" alt="Product 1 Image"> 
                        </div>
                        <h3>ESP 32</h3>
                        <button class="price-btn" data-id="1" data-name="Esp32" data-price="200" data-image="./img/esp32.png">₱200.00 | BEST SELLER</button>

                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/jumper.png"  alt="Product 1 Image"> 
                        </div>
                        <h3>JUMPER WIRE</h3>
                        <button class="price-btn" data-id="2" data-name="Jumper" data-price="250" data-image="./img/jumper.png">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/battery.png" alt="Product 1 Image"> 
                        </div>
                        <h3>9 VOLTS BATTERY CONNECTOR</h3>
                        <button class="price-btn" data-id="3" data-name="Battery" data-price="220" data-image="./img/battery.png">₱220.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/ledlight.png" alt="Product 1 Image"> 
                        </div>
                        <h3>LED LIGHTS</h3>
                        <button class="price-btn" data-id="4" data-name="Ledlight" data-price="200" data-image="./img/ledlight.png">₱200.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/button.png" alt="Product 1 Image"> 
                        </div>
                        <h3>PUSH BUTTON</h3>
                        <button class="price-btn" data-id="5" data-name="Button" data-price="180" data-image="./img/button.png">₱180.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/resistor.png" alt="Product 1 Image">   
                        </div>
                        <h3>220-OHM RESISTOR</h3>
                        <button class="price-btn" data-id="6" data-name="Resistor" data-price="200" data-image="./img/resistor.png">₱200.00 | BEST SELLER</button>
                    </div>

                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/tester.png" alt="Product 1 Image"> 
                        </div>
                        <h3>NETWORK LAN TESTER</h3>
                        <button class="price-btn" data-id="7" data-name="Tester" data-price="230" data-image="./img/tester.png">₱230.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/crimping.png"  alt="Product 1 Image"> 
                        </div>
                        <h3>CRIMPING</h3>
                        <button class="price-btn" data-id="8" data-name="Crimping" data-price="210" data-image="./img/crimping.png">₱210.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/rj45connector.png" alt="Product 1 Image"> 
                        </div>
                        <h3>RJ45 CONNECTOR</h3>
                        <button class="price-btn" data-id="9" data-name="Connector" data-price="150" data-image="./img/rj45connector.png">₱150.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/tweezer.png" alt="Product 1 Image"> 
                        </div>
                        <h3>ELBOW TWEEZER</h3>
                        <button class="price-btn" data-id="10" data-name="Tweezer" data-price="200" data-image="./img/tweezer.png">₱200.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/rubberboots.png" alt="Product 1 Image"> 
                        </div>
                        <h3>RUBBER BOOTS</h3>
                        <button class="price-btn" data-id="11" data-name="Rubber" data-price="170" data-image="./img/rubberboots.png">₱170.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/cable.png" alt="Product 1 Image">   
                        </div>
                        <h3>UTP CABLE</h3>
                        <button class="price-btn" data-id="12" data-name="Cable" data-price="230" data-image="./img/cable.png">₱230.00 | BEST SELLER</button>
                    </div>

                
                </div>
                
            </section>

            <section class="product-section iob-section" id="iob">
                <h2><span>IOB</span> DEPARTMENT</h2>
                <div class="product-grid">
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/organization4.png" alt="Product 1 Image"> 
                        </div>
                        <h3>IOB POLO SHIRT</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/pin.png" alt="Product 1 Image"> 
                        </div>
                        <h3>IOB PIN</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/booth.png" alt="Product 1 Image"> 
                        </div>
                        <h3>PROMOTIONAL BOOTH</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/calculator.png" alt="Product 1 Image"> 
                        </div>
                        <h3>CALCULATOR</h3>
                        <button class="price-btn">₱250.00 | BEST SELLER</button>
                    </div>

                </div>
                
            </section>

            <section class="product-section ite-section" id="ite">
                <h2><span>ITE</span> DEPARTMENT</h2>
                <div class="product-grid">
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/nameplate.png" alt="Product 1 Image"> 
                        </div>
                        <h3>NAMEPLATE</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/bondpaper.png" alt="Product 1 Image"> 
                        </div>
                        <h3>BONDPAPER</h3>
                        <button class="price-btn" data-price="200.00">₱200.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/iteojt.png" alt="Product 1 Image"> 
                        </div>
                        <h3>OJT UNIFORM</h3>
                        <button class="price-btn" data-price="230.00">₱230.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/binder.png" alt="Product 1 Image"> 
                        </div>
                        <h3>BINDER NOTEBOOK</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/cartolina.png" alt="Product 1 Image"> 
                        </div>
                        <h3>CARTOLINA PAPER</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>
                
                    <div class="product-item">
                        <div class="product-card">
                            <img src="../public/img/marker.png" alt="Product 1 Image">  
                        </div>
                        <h3>COLORED MARKER</h3>
                        <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                    </div>

              
                </div>
                
            </section>
         

        </div>


        <section class="product-section ite-section" id="ite">
            <h2><span>ITE</span> DEPARTMENT</h2>
            <div class="product-grid">
                <div class="product-item">
                    <div class="product-card">
                        <img src="../public/img/nameplate.png" alt="Product 1 Image"> 
                    </div>
                    <h3>NAMEPLATE</h3>
                    <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                </div>
            
                <div class="product-item">
                    <div class="product-card">
                        <img src="../public/img/bondpaper.png" alt="Product 1 Image"> 
                    </div>
                    <h3>BONDPAPER</h3>
                    <button class="price-btn" data-price="200.00">₱200.00 | BEST SELLER</button>
                </div>
            
                <div class="product-item">
                    <div class="product-card">
                        <img src="../public/img/iteojt.png" alt="Product 1 Image"> 
                    </div>
                    <h3>OJT UNIFORM</h3>
                    <button class="price-btn" data-price="230.00">₱230.00 | BEST SELLER</button>
                </div>
            
                <div class="product-item">
                    <div class="product-card">
                        <img src="../public/img/binder.png" alt="Product 1 Image"> 
                    </div>
                    <h3>BINDER NOTEBOOK</h3>
                    <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                </div>
            
                <div class="product-item">
                    <div class="product-card">
                        <img src="../public/img/cartolina.png" alt="Product 1 Image"> 
                    </div>
                    <h3>CARTOLINA PAPER</h3>
                    <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                </div>
            
                <div class="product-item">
                    <div class="product-card">
                        <img src="../public/img/marker.png" alt="Product 1 Image">  
                    </div>
                    <h3>COLORED MARKER</h3>
                    <button class="price-btn" data-price="250.00">₱250.00 | BEST SELLER</button>
                </div>

          
            </div>
            
        </section>

        
     
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

        if (!localStorage.getItem('cart')) {
            localStorage.setItem('cart', JSON.stringify([])); 
        }
    
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

    const totalAmount = document.getElementById('payment-total-amount').textContent;
    document.getElementById('paypal-total-amount').textContent = totalAmount;

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
   updateOrderSummary(true);
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

buyNowButton.addEventListener("click", showDetailsForm);
    
    // Handle "Add to Cart" click
    addToCartButton.addEventListener('click', function() {
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
 
// Close the dialog box when the close button is clicked
closeDialogButton.addEventListener('click', function() {
    const dialog = document.getElementById('action-dialog');
    dialog.style.display = 'none';
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
        
            showMessage(`Thank you for your purchase, ${name}! Your payment of ₱${currentProductPrice} was successful.`);
            localStorage.setItem('cart', JSON.stringify([]));
            detailsDialog.style.display = 'none';
        });

function updatePaymentTotal() {
    let totalAmount = 0;
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    cart.forEach(item => {
        totalAmount += item.price;
    });
    document.getElementById('payment-total-amount').textContent = '₱' + totalAmount.toFixed(2);
}
 
    </script>
    
    
</body>
</html>
