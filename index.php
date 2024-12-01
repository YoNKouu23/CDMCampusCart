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
                <a href="./controllers/login.php">
                    <button>LOG IN</button>
                </a>

            </div>
            <div class="ill">
                <img class="illu" src="./public/images/illustration1.png" alt="">
            </div>
        </div>
    </section>

    <section class="product">
             <h1 id="proname"><span>I</span> PRODUCTS</h1>
        <div class="productSec">
            <div>
                <h3>UNIFORMS</h3>
                <div class="productbox"><img src="./public/images/uniform.png" alt=""></div>
                <a href="./controllers/products.php">
                    <button>EXPLORE NOW</button>
                </a>
            </div>
            
            <div>
                <h3>ORGANIZATION SHIRTS</h3>
                <div class="productbox1"><img src="./public/images/p.e.png" alt=""></div>
                <a href="./controllers/products.php">
                    <button>EXPLORE NOW</button>
                </a>
            </div>
            
            <div>
                <h3>MERCHANDISE</h3>
                <div class="productbox2"><img src="./public/images/pin.png" alt=""></div>
                <a href="./controllers/products.php">
                    <button>EXPLORE NOW</button>
                </a>
            </div>
        </div>
    </section>
    
    <section class="about" id="about">
        <div class="about-sec">
            <div>
                <h2><span>l</span> About Us</h2>
            </div>
            <div>
                <pre>
                    Welcome to CDM Campus Cart, your go-to online destination for all things 
                                            related to student essentials! 
                We’re here to make life easier for students by offering a comprehensive range of
                             products tailored to each institute's unique needs.
                </pre>
            </div>
        </div>

        
        <div class="about-content">
                <div class="content-logo">
                    <div class="logo-box"><img src="./public/images/itelogo.png" alt=""></div>
                    <div class="logo-box1"><img src="./public/images/icslogo.png" alt=""></div>
                    <div class="logo-box"><img src="./public/images/ioblogo.png" alt=""></div>
                </div>

                <div class="content-story">
                    <h3>Our Story</h3>
                    <pre>
                        CDM Campus Cart is built by students, for students. 
                        Our diverse team has come together to create an intuitive, easy-to-use 
                        platform that meets the unique needs of campus life.
                        From flowchart designers and UI creators to our front-end, back-end, and 
                        documentation experts, each team member plays a crucial role in 
                        delivering a smooth, reliable experience. 
                        With CDM Campus Cart, you can expect quality, convenience, and support
                        —all designed to make campus life easier. Welcome to your all-in-one 
                        solution for uniforms, institute merchandise, and program essentials!
                    </pre>
                    <a href="#meet"><button>Meet the Team</button></a>
                </div>
        </div>

        <div class="mission-content">
            <div class="mission-box">   
                <div>
                    <h3>Our Mission</h3>
                    <p>
                    We aim to support students by providing high-quality uniforms, institute-specific merchandise, and program-related items. Our goal is to enhance student life with accessible, affordable, and stylish essentials.
                    </p>
                </div>
                <div>
                    <h3>What We Offer</h3>
                    <p>From uniforms to exclusive institute merchandise, CDM Campus Cart brings you everything you need to represent your school with pride. Whether you’re looking for clothing, pins, or specialty items, we’ve got you covered</p>
                </div>
            </div>

            <div class="mission-box1">
                <h4>Why Choose Us?</h4>
                <p>
                    Our platform is designed with students in mind,
                    bringing together a diverse selection of quality products for a seamless shopping experience. 
                    With a user-friendly interface and dedicated customer support, 
                    we strive to make your shopping easy and enjoyable
                </p>
            </div>

        </div>

        <div class="team-content">
            <div id="meet">
                <h1>Meet our <span>Team!</span></h1>
            </div>

            <div class="team-section">
                <div class="team-card">
                    <img src="./public/images/emman.jpg" alt="">
                    <div class="team-info">
                        <h3>Emmanuel Pornel</h3>
                        <p>Project Manager</p>
                    </div>   
                </div>

                <div class="team-card">
                    <img src="./public/images/daniel.jpg" alt="">
                    <div class="team-info">
                        <h3>Daniel Atolle</h3>
                        <p>Front-End Developer</p>
                    </div>   
                </div>

                <div class="team-card">
                    <img src="./public/images/john.jpg" alt="">
                    <div class="team-info">
                        <h3>John Lee Teofilo</h3>
                        <p>Full-stack Developer</p>
                    </div>   
                </div>

                <div class="team-card">
                    <img src="./public/images/ella1.jpg" alt="">
                    <div class="team-info">
                        <h3>Ella Tebelin</h3>
                        <p>UI Designer</p>
                    </div>   
                </div>

                <div class="team-card">
                    <img src="./public/images/lim.jpg" alt="">
                    <div class="team-info">
                        <h3>Russel Lance Lim</h3>
                        <p>UI Designer</p>
                    </div>   
                </div>

                <div class="team-card">
                    <img src="./public/images/julie.jpg" alt="">
                    <div class="team-info">
                        <h3>Julie Ann Quilbio</h3>
                        <p>Documentation</p>
                    </div>   

                </div>
                <div class="team-card">
                    <img src="./public/images/lovely.jpg" alt="">
                    <div class="team-info">
                        <h3>Lovely Pantaleon</h3>
                        <p>Documentation</p>
                    </div>   
                </div>

                <div class="team-card">
                    <img src="./public/images/eric.jpg" alt="">
                    <div class="team-info">
                        <h3>Eric Arsolon</h3>
                        <p>Documentation</p>
                    </div>   
                </div>

                <div class="team-card">
                    <img src="./public/images/elton.jpg" alt="">
                    <div class="team-info">
                        <h3>Elton Jhon Polizon</h3>
                        <p>Documentation</p>
                    </div>   
                </div>

                <div class="team-card">
                    <img src="./public/images/aries.jpg" alt="">
                    <div class="team-info">
                        <h3>Aries Panganiban</h3>
                        <p>Documentation</p>
                    </div>   
                </div>
            </div>

        </div>

    </section>


    <section class="contact">
        <div class="contactsec" id="contact">
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
                        <img src="./public/images/contact1.png" alt="">
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


    function toggleMenu() {
        const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.style.display = mobileMenu.style.display === 'flex' ? 'none' : 'flex';
    }

</script>

</html>