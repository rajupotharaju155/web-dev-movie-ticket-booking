<?php

$name = $_POST['myCountry'];

        if($name == "avengers"){      
            header("Location: http://localhost/movie/movies/avengers.html"); 
        }
        else if ($name == "spiderman"){   
            header("Location: http://localhost/movie/movies/spiderman.html");    
        }
        else if ($name == "simmba"){   
            header("Location: http://localhost/movie/movies/simmba.html");    
        }
        else if ($name == "deadpool"){   
            header("Location: http://localhost/movie/movies/deadpool.html");    
        }
        else if ($name == "hobbs and show"){   
            header("Location: http://localhost/movie/movies/hobnshow.html");    
        }
        else {
            header("Location: http://localhost/movie/index.php");
        }
?>
