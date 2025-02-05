<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/about.css">
    <link rel="stylesheet" href="../../css/contact.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    

</style>
<body>
    <div class="preloader">
        <img src="../../assets/carl.tonmedia white main.png" alt="">

    </div>
    <?php
    require "../../components/nav.php"

    ?>
    <div class="container">
        <nav>
            <span onclick="location.href='../home/'">
                <img src="../../assets/carl.tonmedia white main.png" alt="">
            </span>
            <span class="main_nav">
                <div onclick="location.href='../about/'" class="nav_item">About</div>
                <div onclick="location.href='../contact/'" class="nav_item">Contact Us</div>
                <div onclick="location.href='../portfolio/'" class="nav_item">Portfolio</div>
                <div onclick="location.href='../book now/'" class="nav_item">Book Now</div>
            </span>
            <div class="m_ham" onclick="toggle_mobile_nav(); ">
                <aside class="a1"></aside>
                <aside class="a2"></aside>
                <aside class="a3"></aside>
            </div>

        </nav>
        <div class="a_hero cen">
            <h2>Contact Us</h2>
        </div>

        <div class="contact_form">
            <aside>
                <form action="">
                    <div class="input">
                         <input type="text" placeholder="Your Name">
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Reason For Contact">
                    </div>
                    <div class="input">
                         <textarea name="" id="">Your Message</textarea>
                    </div>
                    <button>Send Message</button>
                </form>
            </aside>
            <aside class="contact">
                <span>
                    <div class="con">
                        <h6>Location</h6>
                        <h5>USA, NewYour, 520 E</h5>
                        <h5>6th St, NY20005</h5>
                    </div>
                    <div class="con2">
                        <h6>Location</h6>
                        <h5>+233 00 000 0000</h5>
                        <h5>+233 00 000 0000</h5>
                    </div>
                    <div class="con2">
                        <h6>Email</h6>
                        <h5>Support@caltonmedia.com</h5>
                     </div>
                     <div class="con2">
                        <h6>Social</h6>
                        <div class="socials">
                            <i class="bi bi-instagram "></i>
                            <i class="bi bi-youtube"></i>    
                            <i class="bi bi-whatsapp"></i>               
                            <i class="bi bi-tiktok"></i>
                            
                        </div>                     </div>
                     
                    
                </span>
                <span class="white">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d848762.7967134347!2d-0.40474021942597895!3d5.614818282880851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b6c3cd8a9f3%3A0x8cdcf45d2f2a72d!2sAccra%2C%20Ghana!5e0!3m2!1sen!2sgh!4v1698384315408!5m2!1sen!2sgh" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </span>
            </aside>

        </div>

         
      
    
        <footer class="cen">
            <img src="../../assets/FOOTER.png" alt="">
            <div class="socials">
                <i class="bi bi-instagram "></i>
                <i class="bi bi-youtube"></i>    
                <i class="bi bi-whatsapp"></i>               
                <i class="bi bi-tiktok"></i>
                
            </div>

            <h6>
                <div class="num">+233 00 000 0000</div>
                <div class="bar"></div>
                <div class="num">+233 00 000 0000</div>
                <div class="bar"></div>
                <div class="num">support@carltonmedia.com</div>

            </h6>
            <h5>Financial Drive, Ministries, Accra</h5>

            <div class="copyright cen">
                2024 Carl.tonmedia. All rights reserved.
            </div>
             

        </footer>
        
    </div>
    <script src="../../script/script.js"></script>

 
    
</body>
</html>