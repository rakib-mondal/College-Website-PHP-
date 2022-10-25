
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
    <link rel="stylesheet" href="contact.css">
</head>

<body>
<?php
// // if(isset($_POST['send']))
// // {
// //     $fn =$_POST['fname'];
// //     $ln =$_POST['lname'];
// //     $mobi=$_POST['mobi'];
// //     $email=$_POST['fromEmail'];
// //     $msg=$_POST['message'];
    
// //     include("connection.php");

// //     mysqli_query($conn,"insert into contact(fname,lname,mobi,email,msg)
// //     values('$fn','$ln','$mobi','$email','$msg')");

// }
?> 
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="img/logo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>

                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="#">BLOGS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <h1>Contact Us</h1>
    </section>
    <section class="form">
        <section class="contact-us">
            <section class="contact">
                <div class="contactinfo">
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <span style="opacity: 0.5;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg></span>
                            <span style="color: #fff;padding-left:15px ; opacity: 0.5; "> Dr Zakir Hussian Avenue <br>
                                Bidhannagar, Hudcomore <br>
                                Durgapur, West Bengal 713206 <br>
                            </span>
                            </li>
                            <li>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg></span>
                                <span>dsms@gmail.com</span>
                            </li>
                            <li>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg></span>
                                <span> 0343 253 6993 <br>
                                    9932077701 & 7407437777 <br></span>
                            </li>
                        </ul>
                        <ul class="sci">
                            <li><a href="https://www.facebook.com/DSMSgroupofinstitution"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg></a></li>
                            <li><a href="https://twitter.com/DSMScollege"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="25" height="25" fill="currentColor" class="bi bi-twitter"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg></a></li>
                            <li><a href="https://www.instagram.com/dsmscollege/"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="25" height="25" fill="currentColor" class="bi bi-instagram"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg></a></li>
                            <li><a href="https://www.linkedin.com/company/duragapur-society-of-management-science-dsms"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>

                <form class="contactform" method ='POST' action='email-script.php' >
                    <h2>Send a Message</h2>
                     <div class="formbox" >
                        <div class="inputbox w50">
                            <input type="text" name="fname" id="fname" required>
                            <span>First Name</span>
                        </div>

                        <div class="inputbox w50">
                            <input type="text" name="lname" id="lname" required>
                            <span>Last Name</span>
                        </div>

                        <div class="inputbox w50">
                            <input type="text" name="fromEmail" id="fromEmail" required >
                            <span >Email Address</span>
                        </div>

                        <div class="inputbox w50">
                            <input type="text" name="mobi" id="mobi" required>
                            <span>Mobile Number</span>
                        </div>

                        <div class="inputbox w100">
                            <textarea name="message" id="message" cols="30" rows="5" required></textarea>
                            <span>Write your message here.....</span>
                        </div>

                        <div class="inputbox w100">
                            <input type="submit" value="Send" name="send">
                        </div>

</form>
                    
                </div>
            </section>
        </section>
    </section>

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="course.php">Courses</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
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

   