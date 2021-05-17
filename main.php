<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sam-Car Rentals</title>

    <link rel="stylesheet" href="style.css">

    <!--FROM SLICK SLIDER--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    
    
        
        
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!--font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    


</head>
<body>

    <header>
        <nav>
            <div class="top-header">
                <small> Drive good, feel good!</small>

                <div class="nav-icons">
                    <ion-icon name="search-outline"></ion-icon>
                    <ion-icon name="person-outline"></ion-icon>

                </div>
    
            </div>
            <div class="bottom-header">
                <div class="brand">
                    <h5> <strong>Sam-Car Rentals</strong></h5>

                </div>
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="search.html">Search</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="audi.html">More Cars</a></li>
                </ul>
                
            </div>
        </nav>
    </header>  

    <div class="hero-wrapper">
        <div class="hero-section">
            <div class="slide-container">
                <h2>Have a LIEFSYLE</h2>
                <p>Rent exclusive car for your special occassion.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-start">
            <!-- first column in the row -->
            <!--search box-->
           <div class="col">
               <!--
            <div class="hero-search">
                <div class="wrapper">
                    <div class="search-grid">
                        <div>
                            <select name="" class="selector" id="">
                                <option value="">Vehicle Type</option>
                                <option value="">SUV Van</option>
                                <option value="">Mini SUV</option>
                                <option value="">Sedans</option>
                                <option value="">Mid size SUV</option>
                            </select>
                        </div>
                        <div>
                            <select name="" class="selector" id="">
                                <option value="">Year Model</option>
                                <option value="">1990 to 2000</option>
                                <option value="">2000 to 2005</option>
                                <option value="">2005 to 2010</option>
                                <option value="">2010 to 2015</option>
                                <option value="">2015 to 2021</option>
                            </select>
                        </div>
                        <div>
                            <select name="" class="selector" id="">
                                <option value="">Brand</option>
                                <option value="">Toyota</option>
                                <option value="">BMW</option>
                                <option value="">Mercedes</option>
                                <option value="">Audi</option>
                                <option value="">Ford</option>
                                <option value="">Nissan</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-main btn-block">SEARCH</button>
                        </div>
                    </div>
                    
                </div>
           </div>
-->
           <!--test test test-->

           <div class="vehicle-">
                   <h3> <strong>Luxury Sports</strong> </h3>
               </div>
            <div class="slider-wrapper">
                <div class="slider-container">
                    <div class="slider">
                        <div class="slide-img" style="background-image: url(photos/ferrari1.jpg); background-color: whitesmoke;">
                            <div class="slide-badge">
                                <div>Ferrari</div>
                                <span>Luxury Sports</span>
                                <span>Starting  $50/hr</span>
                            </div>
                        </div>
                        <div class="slide-info">
                            <div>Power: 220hp</div>
                            <span>Acceleration: 8.0 sec</span>
                            <p>Torque: 350lb-ft</p>
                            <p><a href="search.html">View others</a></p>

                            <div class="slide-btn">
                                <a href="rent.php" class="w3-button w3-block w3-grey">Rent</a>
                            </div>
                        </div>
                    </div>

                    <!-- 1/2 -->
                    <div class="slider">
                        <div class="slide-img" style="background-image: url(photos/lambro.jpg); background-color: whitesmoke;">
                            <div class="slide-badge">
                                <div>Lambroghini</div>
                                <span>Luxury Sport</span>
                                <span>Starting  $200/hr</span>
                            </div>
                        </div>
                        <div class="slide-info">
                            <div class="info">
                                <div>Power: 330hp</div>
                                <span>Acceleration: 8.5 sec</span>
                                <p>Torque: 210lb-ft</p>
                                <p><a href="search.html">View others</a></p>
                            </div>
                            <div class="slide-btn">
                                <a href="rent.php" class="w3-button w3-block w3-grey">Rent</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--bigger suv-->
                <!--
                <div class="vehicle-">
                    <h3> <strong>4X4 SUV</strong> </h3>
                </div>
-->
                <div class="slider">
                    <div class="slide-img" style="background-image: url(photos/porche.jpg); background-color: whitesmoke;">
                        <div class="slide-badge">
                            <div>Porche</div>
                            <span>Luxury Sports</span>
                            <span>Starting  $80/hr</span>
                        </div>
                    </div>
                    <div class="slide-info">
                        <div class="info">
                            <div>Power: 180hp</div>
                            <span>Acceleration: 4.2 sec</span>
                            <p>Torque: 210lb-ft</p>
                            <p><a href="search.html">View others</a></p>
                        </div>
                        <div class="slide-btn">
                            <a href="rent.php" class="w3-button w3-block w3-grey">Rent</a>
                        </div>
                    </div>
                </div>

            </div>

           </div>

           <!--second column in the row //SUV Van-->
           <!-- first car-->
           <div class="col">
               <div class="vehicle-">
                   <h3> <strong>SUV Vans</strong> </h3>
               </div>
            <div class="slider-wrapper">
                <div class="slider-container">
                    <div class="slider">
                        <div class="slide-img" style="background-image: url(photos/benzvan.jpg); background-color: whitesmoke;">
                            <div class="slide-badge">
                                <div>Sprinter Crew</div>
                                <span>Van</span>
                                <span>Starting  $50/hr</span>
                            </div>
                        </div>
                        <div class="slide-info">
                            <div>Power: 180hp</div>
                            <span>Acceleration: 4.0 sec</span>
                            <p>Torque: 200lb-ft</p>
                            <p><a href="search.html">View others</a></p>

                            <div class="slide-btn">
                                <a href="rent.php" class="w3-button w3-block w3-grey">Rent</a>
                            </div>
                        </div>
                    </div>

                    <!-- 1/2 -->
                    <div class="slider">
                        <div class="slide-img" style="background-image: url(photos/van.jpg); background-color: whitesmoke;">
                            <div class="slide-badge">
                                <div>Vito Crew </div>
                                <span>Van</span>
                                <span>Starting  $40/hr</span>
                            </div>
                        </div>
                        <div class="slide-info">
                            <div class="info">
                                <div>Power: 180hp</div>
                                <span>Acceleration: 4.2 sec</span>
                                <p>Torque: 210lb-ft</p>
                                <p><a href="search.html">View others</a></p>
                            </div>
                            <div class="slide-btn">
                                <a href="rent.php" class="w3-button w3-block w3-grey">Rent</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--bigger suv-->
 <!--               <div class="vehicle-">
                    <h3> <strong>4X4 SUV</strong> </h3>
                </div>
-->
                <div class="slider">
                    <div class="slide-img" style="background-image: url(photos/lexus1.jpg); background-color: whitesmoke;">
                        <div class="slide-badge">
                            <div>Lexus </div>
                            <span>SUV</span>
                            <span>Starting  $50/hr</span>
                        </div>
                    </div>
                    <div class="slide-info">
                        <div class="info">
                            <div>Power: 180hp</div>
                            <span>Acceleration: 4.2 sec</span>
                            <p>Torque: 210lb-ft</p>
                            <p><a href="search.html">View others</a></p>
                        </div>
                        <div class="slide-btn">
                            <a href="rent.php" class="w3-button w3-block w3-grey">Rent</a>
                        </div>
                    </div>
                </div>

            </div>
           </div>

           <!-- third column in the row-->
           <div class="col">
               <div class="vehicle-">
                 <h3> <strong>SUV</strong> </h3>
               </div>
            <div class="slider-wrapper">
                <div class="slider-container">
                    <!--1st car-->
                    <div class="slider">
                        <div class="slide-img" style="background-image: url(photos/bmw1.jpg); background-color: whitesmoke;">
                            <div class="slide-badge">
                                <div>2021 BMW</div>
                                <span>Sports</span>
                                <span>Starting  $30/hr</span>
                            </div>
                        </div>
                        <div class="slide-info">
                            <div>Power: 180hp</div>
                            <span>Acceleration: 4.2 sec</span>
                            <p>Torque: 210lb-ft</p>
                            <p><a href="search.html">View others</a></p>

                            <div class="slide-btn">
                                <a href="rent.php" class="w3-button w3-block w3-grey">Rent</a>
                            </div>
                        </div>
                    </div>

                    <!--2nd car-->
                    <div class="slider">
                        <div class="slide-img" style="background-image: url(photos/benz3.jpg); background-color: whitesmoke;">
                            <div class="slide-badge">
                                <div>2015 Audi</div>
                                <span>Sports</span>
                                <span>Starting  $20/hr</span>
                            </div>
                        </div>
                        <div class="slide-info">
                            <div>Power: 180hp</div>
                            <span>Acceleration: 4.2 sec</span>
                            <p>Torque: 210lb-ft</p>
                            <p><a href="search.html">View others</a></p>

                            <div class="slide-btn">
                                <a href="rent.php" class="w3-button w3-block w3-grey">Rent</a>
                            </div>
                        </div>
                    </div>

                    <!--mini suvs-->
 <!--                   <div class="vehicle-">
                        <h3> <strong>Mini SUV</strong> </h3>
                    </div>
-->

                    <div class="slider">
                        <div class="slide-img" style="background-image: url(photos/mini.jpg); background-color: whitesmoke;">
                            <div class="slide-badge">
                                <div>2015 Audi</div>
                                <span>Sports</span>
                                <span>Starting  $20/hr</span>
                            </div>
                        </div>
                        <div class="slide-info">
                            <div>Power: 180hp</div>
                            <span>Acceleration: 4.2 sec</span>
                            <p>Torque: 210lb-ft</p>
                            <p><a href="search.html">View others</a></p>

                            <div class="slide-btn">
                                <a href="rent.php" class="w3-button w3-block w3-grey">Rent</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </div>
    </div>

    <br>


    <footer class="footer">
        <div class="container">
            <div class="footer-rows">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="">About us</a></li>
                        <li><a href="">Our Services</a></li>
                        <li><a href="">Privacy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Rental Details</a></li>
                        <li><a href="">Payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <ul class="social-media">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/prof_addy/?hl=en"><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-github"></i></a></li>
                    </ul> 
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy;2021 Sam Devs. All Rights Reserved.</p>
        </div>

    </footer>


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>