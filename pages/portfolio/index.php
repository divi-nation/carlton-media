<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/about.css">
    <link rel="stylesheet" href="../../css/contact.css">
    <link rel="stylesheet" href="../../css/portfolio.css">
    <link rel="stylesheet" href="../../css/responsive.css">

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
        <div class="a_hero cen col2">
            <h2>Portfolio</h2>

            <div class="tab_list">
                <span class="active" onclick="location.href='../portfolio/'">Photography</span>
                <span onclick="location.href='../videography/'">Videography</span>
                <span onclick="location.href='../graphic_design/'">Graphic Design</span>
            </div>
        </div>

        <div class="img_content">
            <aside class="a1">
                <div class="img_item"></div>
                <div class="img_item"></div>
                <div class="img_item"></div>
                <div class="img_item"></div>
                
            </aside>
            <aside class="a2">
                <div class="img_item"></div>
                <div class="img_item"></div>
                <div class="img_item i1"></div>
            </aside>
            <aside class="a3">
                <div class="img_item"></div>
                <div class="img_item"></div>
                <div class="img_item i2"></div>
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