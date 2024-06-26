<!DOCTYPE html>
<html>
    
<head>
    <meta name="viewport" content= "width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/cc5b01fdfb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="images/hh.png">
    <meta name="keywords" content="record label, music label, independent artists, hip-hop, rap, underground rap,
    artist management, music distribution, album releases, concerts, events">

    <title> CineMatch </title>

    <style>

        .wsl {
            background-color: rgba(150, 158, 125, .8);
            height: 35vh;
            width: 55vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 1.9em;
            border-radius: 90px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 3;
            position: relative;
            margin: 70px auto;
        }

        .wsl img {
            width: 125px;
            height: 125px;
        }

        .content {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            background-color: #363636;
            height: 645px;
            
            padding: 40px 50px;
            flex-direction: column;
            text-align: center;
            z-index: 4;
        
        }

        .hbox {
            position: relative;
            flex-direction: column;
            display: flex;
            padding: 28px;
            background-color: rgba(150, 158, 125, .8);
            border-radius: 60px;
            width: 70%;
            font-size: 1.2em;
            height: 115px;
            color: #e9e3e3;;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            font-weight: 600;
            z-index: 900;
        }

        .box {

            position: relative;
            display: flex;
            align-items: center;
            text-align: center;
            padding: 80px;
            background-color: rgba(150, 158, 125, .8);
            border-radius: 60px;
            height: 320px;
            width: 80%;
            color: #e9e3e3;
            margin-top: 30px;
            font-size: 2.4em;
            transition: all 0.3s;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            font-weight: 600;

            
        }

        @media screen and (max-width: 960px) {

            .content {
                height: 600px;
            }
            
            .hbox {
                font-size: 1.1em;
                width: 90%;
            }

            .box {

                position: relative;
                display: flex;
                align-items: center;
                text-align: center;
                padding: 30px;
                background-color: rgba(150, 158, 125, .8);
                border-radius: 60px;
                height: 300px;
                width: 100%;
                margin-top: 30px;
                font-size: 2.2em;
            }

            .popup-menu {
                display: none;
            }
          

            .wsl img {
                width: 125px;
                height: 125px;
            }
        } 

        @media screen and (max-width: 600px) {
            .hbox {
                font-size: 0.8em;
                width: 100%;
            }

            .box {
                font-size: 1.6em;

            }
        }

    </style>
</head>

<body>

    <nav class="navbar">

        <div class="navbar-container">

            <a href="index.html" id="navbar-logo"><img src="/images/hh.png"/> </a>

            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul class="navbar-menu">
                <li class="navbar-item">

                    <button class="nav-button" id="nb1" > Trending Movies </button>
                    <ul id="menu1" class="popup-menu">
                        <div class="popup-menu-container">
                            <li class="navbar-link"> <a href="/artist.html"> Our Artists </a> </li>
                            <li class="navbar-link"> <a href="/trmovies.html"> Trending Movies </a> </li>
                            <li class="navbar-link"> <a href="/trtv.html"> Trending TV Shows </a> </li>
                        </div>
                    </ul>
                </li>

                <li class="navbar-item">
                    <button class="nav-button" id="nb2"> Trending TV </button> 
                    <ul id="menu2" class="popup-menu">
                        <div class="popup-menu-container">
                            <li class="navbar-link"> <a href="/index.html"> CineMatch</a> </li>
                            <li class="navbar-link"> <a href="/trmovies.html">Movies</a> </li>
                        </div>
                    </ul>
                </li>
            </ul>

        </div>

    </nav>
     
    <div id="popup-nav-mobile">

        <ul class="mobile-list">

            <li class="mobile-link"> <a href="/artist.html"> Our Artists </a> </li>
            <li class="mobile-link"> <a href="/catalog.html"> Our Catalog </a> </li>
            <li class="mobile-link"> <a href="/world.html"> Our World </a> </li>
        </ul>
    </div>

    <div class="hero-section">
        
        <video src="images/background.mp4" class="welcome" autoPlay loop muted> 
        </video>

        <div class="wsl">  
            <img src="/images/hh.png"/>  
        </div>

    </div>

    <div class="content">

        <div class="hbox">
             <h1> Welcome to CineMatch </h1>
        </div>
       
    </div>

    <footer>

        <ul class="social-links">
             <li>
                 <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
             </li>
             <li>
                 <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
             </li>
             <li>
                 <a href="/index.html"> <img src="images/hh.png" id="img-link"></img></a>
             </li>
             <li>
                 <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
             </li>
             <li>
                 <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
             </li>
        </ul>
 
        <ul class="menu">
             <li>
                <a href="/index.html">Label</a>
                <a href="/trmovies.html">Artists</a>
                <a href="/trtv.html">Sign</a>
             </li>
        </ul>
        
     </footer>

    <script src="app.js"></script>

</body>
</html> 