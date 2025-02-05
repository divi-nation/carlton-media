<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlton Media</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    

</style>
<body>

    <!-- <div class="preloader">
        <img src="../../assets/carl.tonmedia white main.png" alt="">

    </div> -->

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
        
        <div class="hero">
            <div class="hero_text">
                <h4 class="y">Photography <br>Studio</h4>
                <h6>Who We Are?</h6>
                <p>We’re Carl.tonmedia—a team of passionate creatives who love bringing ideas to life. From capturing beautiful photos to designing eye-catching graphics and producing stunning videos, we’re all about helping you tell your story. Our goal is simple: to create content that feels authentic, connects with people, and leaves a lasting impression.

                </p>
                <button class="">READ MORE ABOUT US</button>
                <div class="socials">
                    <i class="bi bi-instagram "></i>
                    <i class="bi bi-youtube"></i>    
                    <i class="bi bi-whatsapp"></i>               
                    <i class="bi bi-tiktok"></i>
                    
                </div>
            </div>
            <div class="image_section">
                <div class="order">
                    <div class="order_item">
                        <div class="trans"></div>
                        <h4>01</h4>
                    </div>
                    
                    
                    <div class="slant"></div>
                    <div class="order_item o2">03</div>
                </div>

                <div class="elipse bgs cen">

                </div>
                <div class="opacity h1">
                    
                </div>

            </div>

        </div>
        <div class="shots">
            <section class="text_section">
                <h4 class="y">
                    Best Shots
                </h4>
                <p>I don’t rush or force things to fit a mold. I immerse myself fully in the moment, embracing the emotions as they naturally unfold. I capture moments as they come—raw, authentic, and full of life.</p>
                <div class="fw">
                    
                </div>

                <button>Browse All Images</button>

            </section>
            <section class="cen nop oxh">
                <div class="shade"></div>

                <div class="image_cau">
                    <div class="wrap" id="carousel">
                        <div class="ele cen active">
                            <img src="../../assets/BEST SHOTS/AD 1.jpg" alt="">
                        </div>
                        <div class="ele cen">
                            <img src="../../assets/BEST SHOTS/AD 2.jpg" alt="">
                        </div>
                        <div class="ele">
                            <img src="../../assets/BEST SHOTS/AD 3.jpg" alt="">
                        </div>
                        <div class="ele">
                            <img src="../../assets/BEST SHOTS/AD 4.jpg" alt="">
                        </div>
                        <div class="ele">
                            <img src="../../assets/BEST SHOTS/AD 5.jpg" alt="">
                        </div>
                    </div>
                    <div class="carousel-controls">
                        <button class="prev" id="prevBtn">Prev</button>
                        <button class="next" id="nextBtn">Next</button>
                    </div>
                </div>

                
            </section>

        </div>
        <div class="categories">

            <div class="cat s">
                <div class="top">
                    <div class="icon">
                        <img src="../../icons/Shooting.svg" alt="">
                    </div>
                    <h4 class="y">Shooting</h4>
                    <p class="w">Capture breathtaking moments with precision and creativity, tailored for any occasion.</p>
                </div>
            </div>
            
            <div class="cat v">
                <div class="top">
                    <div class="icon">
                        <img src="../../icons/video.svg" alt="">
                    </div>
                    <h4 class="y fw">Video</h4>
                    <p class="w">Bring stories to life with high-quality video production that engages and inspires.</p>
                </div>
            </div>
            
            <div class="cat e">
                <div class="top">
                    <div class="icon">
                        <img src="../../icons/editing.svg" alt="">
                    </div>
                    <h4 class="y">Editing</h4>
                    <p class="w">Transform raw footage into captivating visual masterpieces with our expert editing services.</p>
                </div>
            </div>
            

        </div>
        <div class="embed cen">
            <div class="bg_img">

            </div>

            <div class="e_content">
                <span class="cen">
                    <div class="frame">

                    </div>

                </span>
                <span class="ver">
                    <h4 class="y">Videos</h4>
                    <p class="w">Immerse your audience with stunning visuals and engaging narratives. From conceptualization to production, our video services ensure every frame delivers impact. Whether it’s promotional content, event coverage, or cinematic storytelling, we use state-of-the-art equipment and creative expertise to bring your vision to life with precision and passion.</p>
                    <button>See More</button>
                </span>

            </div>

        </div>
        <div class="portfolio">
            <h4 class="y">Portfolio</h4>
            <div class="tabs">
                <span>All</span>
                <span>Photoshoot</span>
                <span>Wedding</span>
                <span>Flyers</span>
                <span>Engagement</span>
                <span>Funeral</span>
                <span>Others</span>
            </div>
            <div class="images">
                <div class="wrap2">
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>
                    <div class="image"></div>

                </div>
                
            </div>

        </div>
        <div class="fw">
            <button class="pl">BROWSE ALL IMAGES</button>


        </div>
        <div class="wwd">
            <aside class="cen">
                <div class="imgbx"></div>
                <img src="" alt="">

            </aside>

            <aside class="cen col">
                <h4 class="y ww">What We Do</h4>
              
                 <h6>Everything Media </h6>
                <p class="w">At Carl.TonMedia, we believe in the power of diverse media to tell your story in the most engaging way possible. Whether it’s photography, video, graphic design, or something entirely unique, we offer a full spectrum of media services to bring your ideas to life. No project is too big or too small—we’re here to help you create, connect, and leave a lasting impression through every medium. Let’s collaborate and make your vision shine across all platforms.</p>

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