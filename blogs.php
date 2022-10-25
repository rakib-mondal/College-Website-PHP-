<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSMS-A Premier Institute for Management</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io (2)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io (2)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io (2)/favicon-16x16.png">
    <link rel="manifest" href="favicon_io (2)/site.webmanifest">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="img/logo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>

                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="blogs.html">BLOGS</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <h1>Our Certification & Online Programs For 2021</h1>
    </section>
<!-- -----------------------blog page content --------------------------------------------------- -->
    <section class="blog-content">

        <div class="row">
            <div class="blog-left">
                <img src="img/certificate.jpg" alt="" >
                <h2>Our Certification & Online Programs For 2021</h2>
            </div>
            <div class="blog-right">

            </div>
        </div>
    </section>

        
    <!-- FOOTER SECTION  -->
    <section class="footer">
        <footer>
            <div class="newsletter">
                <h3 class="news-heading">NEWSLETTER</h3>
                <form action="">
                    <i class="far fa-envelope news-env"></i>
                    <input type="email" placeholder="Enter Your Email">
                    <button type="submit"> <i class="fas fa-arrow-right"></i></button>
                </form>
            </div>
            <div class="row-footer">
                <div class="col1">
                    <img src="img/logo.png" alt="" class="logo">
                    <p>DSMS is the Jewel-in-the-Crown of management colleges. Currently it is the one of most renowned
                        colleges in eastern India, the best management college in West Bengal. It has earned its
                        reputation through its huge number of DSMS alumni working with great success and accomplishment
                        in countries like USA, UK, France, Italy, Switzerland, Austria, Australia, New Zealand just to
                        name a few over the last three decades. A large number of such alumni hail from the hotel
                        management background.</p>
                </div>
                <div class="col1">
                    <h3>Address <div class="underline"><span></span></div> 
                    </h3>
                    <p>Dr Zakir Hussian Avenue <br>
                        Bidhannagar, Hudcomore <br>
                        Durgapur, West Bengal 713206 <br>
                        Phone: <span> 0343 253 6993 </span> <br>
                        9932077701 & 7407437777 <br>
                        (For Admission – WhatsApp also Available)</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d29261.784144492416!2d87.35465428661097!3d23.542462620290415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d23.5664291!2d87.40486489999999!4m5!1s0x39f77049483b2095%3A0xb8c4a03201986468!2sDSMS%20Group%20of%20Institution%20DSMS%20Group%20of%20Institution%2C%20Dr%20Zakir%20Hussain%20Ave%2C%20Hudcomore%2C%20Bidhannagar%2C%20Durgapur%2C%20West%20Bengal%20713206!3m2!1d23.5225518!2d87.3400587!5e0!3m2!1sen!2sin!4v1638432411635!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        class="map"></iframe>
                </div>
                <div class="col1">
                    <h3>Navigation links <div class="underline"><span></span></div>
                    </h3>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Courses</a></li>
                        <li><a href="">Blogs</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                    <h3>Social links <div class="underline"><span></span></div>
                    </h3>
                    <a href="https://www.facebook.com/DSMSgroupofinstitution"> <i class="fab fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/duragapur-society-of-management-science-dsms"><i
                            class="fab fa-linkedin"></i></a>

                    <a href="https://twitter.com/DSMScollege"><i class="fab fa-twitter-square"></i></a>

                    <a href="https://www.instagram.com/dsmscollege/"> <i class="fab fa-instagram"></i></a>


                </div>



            </div>
            <hr>
            <p class="copyright">Copyright &copy; DSMS College Of Tourism And Management</p>
        </footer>
    </section>
    
  



    <!-- Javascript for toggle Menu -->
    <script>
        var navLinks = document.getElementById("navLinks");


        function showMenu() {
            navLinks.style.right = "0";

        }
        function hideMenu() {
            navLinks.style.right = "-250px";


        }


    </script>



</body>

</html>