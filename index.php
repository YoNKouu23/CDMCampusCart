<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>CDMCAMPUSCART.app</title>
    <link rel="stylesheet" href="./public/styles/global.css">
</head>
<body>
    <?php require("./components/header.php")?>
    <section class="hero">
        <div class="content">
            <div class="contentBlock">
                <h1>Welcome to <br> <span>CDM</span> Campus <br>Cart</h1>
                <div class="search-container">
                    <input id="searchInput" type="text" placeholder="What are you looking for?">
                    <img class="search-icon" src="./public/icons/search.png" alt="" onclick="focusInput()">
                </div>
                <button>LOG IN</button>

            </div>
            <div class="ill">
                <img class="illu" src="./public/images/illustration.png" alt="">
            </div>
        </div>
    </section>

    <section class="product">
             <h1 id="proname"><span>I</span> PRODUCTS</h1>
        <div class="productSec">
            <div>
                <h3>UNIFORMS</h3>
                <div class="productbox"><img src="./public/images/uniform.png" alt=""></div>
                <button>EXPLORE NOW</button>
            </div>
            
            <div>
                <h3>ORGANIZATION SHIRTS</h3>
                <div class="productbox"><img src="./public/images/p.e.png" alt=""></div>
                <button>EXPLORE NOW</button>
            </div>
            
            <div>
                <h3>MERCHANDISE</h3>
                <div class="productbox"><img src="./public/images/pin.png" alt=""></div>
                <button>EXPLORE NOW</button>
            </div>
        </div>
    </section>


    <section class="about">
        
          


    </section>


    <section class="contact">
        <div class="contactsec">
                <div class="contact-details">
                    <img src="./public/images/logo.png" alt="">
                    <h3>Get in touch <br><span>Hello, how can  we help?</span></h3>
                    <form class="form" action="#" >
                        <div class="input-box">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Password">
                        </div>
                        <div class="input-box">
                            <label for="">Message <br></label>
                            <textarea name="" id="" rows="10" cols="38"></textarea>
                            </div>
                        <button>Submit</button>
                    </form>

                </div>

                <div class="contact-illu">
                    <div>
                        <h1>CONTACT <span id="title">CDM</span></h1>
                        <h1 id="titlecol">CAMPUS CART</h1>
                    </div>

                    <div class="illu-img">
                        <img src="./public/images/contact.png" alt="">
                    </div>
                 
                 
                     <div class="flex-vector">
                            <div>
                                <img class="vector" src="./public/icons/vector.png" alt="">
                            </div>
                            <div>
                                <h5>Kasiglahan Village, Rodriguez Rizal</h5>
                            </div>
                     </div>                
                   
                     <div class="flex-vector">
                            <div>
                                <img class="vector" src="./public/icons/vector-1.png" alt="">
                            </div>
                            <div>
                                <h5>000000000000</h5>
                            </div>
                     </div>    
                  
                     <div class="flex-vector">
                            <div>
                                <img class="vector" src="./public/icons/vector-2.png" alt="">
                            </div>   
                            <div>
                                <h5>Cdmcampuscart@gmail.com</h5>
                            </div>
                     </div>    
                </div>
        </div>
    </section>
    
    <footer>
    <div class="footer-section">

        <div>
            <div class="footer-logo">
                <img src="./public/images/logo.png" width="60px" height="60px" alt="">
                <h4><span>CDM</span>CAMPUS CART</h4>
            </div>

            <div>
                <p id="para">Everything you need, right on campus.</p>
            </div>

            <div class="footer-icons">
                <img src="./public/icons/Frame 1.png" alt="">
                <img src="./public/icons/Frame 2.png" alt="">
                <img src="./public/icons/Frame 4.png" alt="">
            </div>
        </div>



        <div class="footer-links">
            <div>
                <pre>
                    <span>ACCOUNT</span>

                    My Account
    
                    Log In / Register
    
                    Cart
    
                    Shop
                </pre>
            </div>
    
    
            <div>
                <pre>
                    <span>QUICK LINKS</span>    
    
                    Customer Support
    
                    Delivery Details
    
                    Terms & Conditions
    
                    Privacy Policy
                </pre>
            </div>
    
            <div>
                <pre>
                    <span>CART</span>    
                    
                    Account
    
                    Manage Delivery
    
                    Orders
    
                    Payments
                </pre>
            </div>

        </div> 
    </div>
        <div class="footer-credit">
            <hr>
            <p>Cdmcampuscart © 2024, All Rights Reserved</p>
        </div>
    </footer>
</body>


<script>
    function focusInput() {
        document.getElementById("searchInput").focus();
    }
</script>

</html>