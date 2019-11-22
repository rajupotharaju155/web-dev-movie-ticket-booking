<?php
session_start();
include("connection.php");
?>

<html>
    <head>
        <title>Block My seat| Movies</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href=“https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css”/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
    </head>
<body>
  
<!---------------------Navigation Bar-------------------->
<section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img src="media/images/logo1.png"></a>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                
                <div class="search">
                    <div class="autocomplete" >
                    <form name="frm" action="takeme.php"  method="POST">
                        <input type="text" placeholder="   MOVIES | THEATERS "  id="myInput"  name="myCountry"  required >  
                          <div class="icon">
                              <button type="submit" > <i class="fa fa-search"></i></button> 
                          </div> 
                            
                      </form>
                      </div>   
                  </div>

              </li>
          <li class="nav-item active">
            <a class="nav-link" href="#slider">HOME</a>
          </li>
          <?php  if(isset($_SESSION['username'])){
            echo " <li class=\"nav-item active\"> 
              <a class=\"nav-link\" href=\"logout.php\"> LOG OUT(" .$_SESSION['username']. ") </a> 
            </li> ";
            }else{ 
             echo " <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"login.php\"> LOG IN </a>
              </li> ";
            } ?>
            <li class="nav-item active">
                  <a class="nav-link" href="#top">TOP MOVIES</a>
                </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactus">CONTACT US</a>
          </li>
        </ul>
      </div>
    </nav>
</section>

<!-----------------corousal(image slider)------------------------------------------->
<div id="slider">
  <div id="headerSlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            
            <div class="carousel-item active">
              <img src="media/images/avengers.jpg" class="d-block w-100" alt="...">
              
              <div class="carousel-caption d-none d-md-block">
                <h5>Avengers Infinity War</h5>
                <p>The Earth's Mightiest Heroes Assembeled to defeat Thanos</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="media/images/bahubali.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Bahubali: The Conclusion</h5>
                <p>Epic Story, People's hero fighting for Justice </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="media/images/dead.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Deadpool: 2</h5>
                <p>Journey of an Anti-Hero</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#headerSlide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#headerSlide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
  </div>
</div>

<!----------------------top movies--------------------------->
<section id="top">
  <div class="container">
    <h1>TOP MOVIES</h1>
    <br>
    <h4>Maxus Cinemas, Borivali (W)</h4>
      <div class="row">
        <div class="col-md-3">
          <div class="single-movie">
              <div class="name">
                  <h2>Avengers</h2>
                  <p>2hr:30min</p>
                </div>
                <div class="image">
                  <img src="https://i.redd.it/jtu5lwee8vp21.jpg" alt="">
                </div>
                <div class="button">
                  <a href="movies/avengers.html" class="buy-btn">BOOK NOW</a>
                </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="single-movie">
                <div class="name">
                    <h2>Deadpool 2</h2>
                    <p>2hr:30min</p>
                  </div>
                  <div class="image">
                    <img src="https://ae01.alicdn.com/kf/HTB19H9ka2LsK1Rjy0Fbq6xSEXXa8/Marvel-SuperHero-Deadpool-2-Posters-Good-Quality-Painting-Coated-Poster-White-Paper-For-Home-Bar-Wall.jpg_q50.jpg" alt="">
                  </div>
                  <div class="button">
                    <a href="movies/deadpool.html" class="buy-btn">BOOK NOW</a>
                  </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>Hobbs and Shaw</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="https://i.pinimg.com/originals/1f/ce/f1/1fcef11a800353b97938070532c44208.jpg" alt="">
                    </div>
                    <div class="button">
                      <a href="movies/hobnshow.html" class="buy-btn">BOOK NOW</a>
                    </div>
              </div>
            </div>
            <div class="col-md-3">
                <div class="single-movie">
                    <div class="name">
                        <h2>Far From Home</h2>
                        <p>2hr:30min</p>
                      </div>
                      <div class="image">
                        <img src="https://www.joblo.com/assets/images/joblo/posters/2019/08/1vso0vrm42j31.jpg" alt="">
                      </div>
                      <div class="button">
                        <a href="movies/spiderman.html" class="buy-btn">BOOK NOW</a>
                      </div>
                </div>
              </div>
      </div>
      <br>
      <h4>Cinemax, Infinity Mall, Malad (W)</h4>
      <div class="row">
          <div class="col-md-3">
            <div class="single-movie">
                <div class="name">
                    <h2>Black Panther</h2>
                    <p>2hr:30min</p>
                  </div>
                  <div class="image">
                    <img src="https://i0.wp.com/www.moviescut.com/wp-content/uploads/2017/03/Black-Panther-Movie-Poster-India-Release-2018.jpg" alt="">
                  </div>
                  <div class="button">
                    <a href="#" class="buy-btn">BOOK NOW</a>
                  </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>2.0</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="https://i.pinimg.com/736x/b4/db/ae/b4dbaec2507623fd5ff33cf6cf128e67.jpg" alt="">
                    </div>
                    <div class="button">
                      <a href="#" class="buy-btn">BOOK NOW</a>
                    </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>Robin Hood</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="https://cdn11.bigcommerce.com/s-pfbbr25tq3/images/stencil/2000x2000/products/3738/4718/robinhood2018__48372_1547275056_1280_1280__92009.1547357733.jpg?c=2" alt="">
                    </div>
                    <div class="button">
                      <a href="#" class="buy-btn">BOOK NOW</a>
                    </div>
              </div>
            </div>
              <div class="col-md-3">
                <div class="single-movie">
                    <div class="name">
                        <h2>MIB</h2>
                        <p>2hr:30min</p>
                      </div>
                      <div class="image">
                        <img src="https://lh6.googleusercontent.com/proxy/hcL9JnfMJl7VngB0CXlUSpVgvlVfDYFzxV404Fz8CR1WR91S-TqqtJhcZZljhxeU4ha0HtHMk9zk5XYYUPHVFbzoR6LOnCnNcWACfe_89yw5-GhTAyxWcQe0nWlduyX1cYV6vqmVC7zos8DVgdhjXQI1MjRh7W-HdhzRPKm0OiYKvbD-COjNWVXP=s0-d" alt="">
                      </div>
                      <div class="button">
                        <a href="#" class="buy-btn">BOOK NOW</a>
                      </div>
                </div>
              </div>
        </div>
        <br>
        <h4>PVR, Juhu Tara Rd, Juhu (W)</h4>
        <div class="row">
            <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>Simmba</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="https://images-na.ssl-images-amazon.com/images/I/712-6t1rzML._SY445_.jpg" alt="">
                    </div>
                    <div class="button">
                      <a href="movies/simmba.html" class="buy-btn">BOOK NOW</a>
                    </div>
              </div>
            </div>
            <div class="col-md-3">
                <div class="single-movie">
                    <div class="name">
                        <h2>Super 30</h2>
                        <p>2hr:30min</p>
                      </div>
                      <div class="image">
                        <img src="https://s3.scoopwhoop.com/anj2/5cb6c32cd0aa3850a6a6b18c/4252531a-0448-459e-b88f-cedb113b8f06.jpg" alt="">
                      </div>
                      <div class="button">
                        <a href="#" class="buy-btn">BOOK NOW</a>
                      </div>
                </div>
              </div>
              <div class="col-md-3">
                  <div class="single-movie">
                      <div class="name">
                          <h2>URI</h2>
                          <p>2hr:30min</p>
                        </div>
                        <div class="image">
                          <img src="https://4.bp.blogspot.com/-vXslLzBd0J0/W63cjADUTpI/AAAAAAAAVHU/hJikRvs6tgEeSxg5fysDzuxbz_FTEZYEACLcBGAs/s1600/uri-upcoming-movie-poster-release-date-star-cast-mt-wiki.jpg" alt="">
                        </div>
                        <div class="button">
                          <a href="#" class="buy-btn">BOOK NOW</a>
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="single-movie">
                      <div class="name">
                          <h2>The Intruder</h2>
                          <p>2hr:30min</p>
                        </div>
                        <div class="image">
                          <img src="https://2.bp.blogspot.com/-mBNMFeOobCI/XMiDhK1WQyI/AAAAAAAABIo/VCiNuJ0Y9H8b3dpG4LXjadDyPJmosQghgCLcBGAs/s1600/MV5BMzg1ZjcxNjgtMTliNC00NzU3LWE3NGMtZTBjMWFmYzk4OWE0XkEyXkFqcGdeQXVyMDA4NzMyOA%2540%2540._V1_QL50_SY1000_CR0%252C0%252C674%252C1000_AL_.jpg" alt="">
                        </div>
                        <div class="button">
                          <a href="#" class="buy-btn">BOOK NOW</a>
                        </div>
                  </div>
                </div>
          </div>
  </div>
</section>

<!-------------------ABOUT US----------------------------->
<section id="aboutus" >
  <div class="container">
      <h1>About Us</h1>
      <p class="text-center">BLOCK MY SEAT is a product of SRS group inc.</p>
      <p class="text-center">Founders & Developers</p>
      <div class="row">
          <div class="col-md-4 text-center">
            <div class="profile">
              <img src="media/images/shahid.jpeg" class="user">
              <blockquote>Embraced by the darkness, I'm using the Light</blockquote>
                 <h3> Shahid Shaikh <span>Co-Founder SRS inc/ CTO BMS</span></h3>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="profile">
              <img src="media/images/raju1.jpg" class="user">
              <blockquote>Survived Engineering and made this comapany where people can block their seats</blockquote>
                 <h3> Raju Potharaju <span>Co-Founder SRS inc/ CEO BMS</span></h3>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="profile">
              <img src="media/images/dead.png" class="user">
              <blockquote>I have worked day and night to make this imagination turned into reality</blockquote>
                 <h3> Sahruday sherla <span>Co-Founder SRS inc/ MD BMS</span></h3>
            </div>
          </div>
        </div>
  </div>
</section>

<!--------------Contact US------------------->
<section id="contactus">
  <div class="container">
      <h1>Contact Us</h1>
      
      <div class="contact-box">
          <form name="contact" method="POST" action="contactus.php">
          <div class="row">
              <div class="col-md-4 email">
                      <label>Name</label> 
                     <div class="inp"><input type="text" size="20" name="name" required> </div>
              </div>
              <div class="col-md-4 email">
                      <label>Email</label>
                     <div  class="inp"> <input type="email" name="email"  required>  </div>
              </div>
              <div class="col-md-4 email">
                      <label>Phone</label> 
                    <div  class="inp">    <input  type="number" name="phone"  required>  </div>
              </div>
          </div>
          <div class="abc">
                  <label>Message</label> <br>
                  <textarea cols="100" rows="7" name="msg" onkeyup="cnt(this)" placeholder="Type your concern here.We would love to help!!"  required></textarea> <br>
                  <input class="btn btn-primary" type="submit" name="submit" value="SEND"/>
          </div>  
        </form>
        </div>



       <div class="logo">
          <div class="l"></div> 
          <img src="media/images/logo1.png" alt="">
          <div class="l1"></div>
       </div>

      <div class="social" >
          <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-linkedin"></i></li>
              <li><i class="fa fa-youtube"></i></li>
              <li><i class="fa fa-instagram"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
          </ul>
        </div>
        <div class="copy">
          <p>Copyright 2019 © SRS Inc Pvt. Ltd. All Rights Reserved. <br>
The content and images used on this site are copyright protected and copyrights vests with the respective owners.
The usage of the content and images  on this website is intended to promote the works and no
endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.</p>
        </div>
    </div>
</section>

<script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>

</body>
</html>
