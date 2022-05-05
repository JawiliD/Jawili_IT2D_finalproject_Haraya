<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Haraya</title>        
      
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body >
        <div class="wrapper">            
                <div class="nav">
                    <img id="header" src="images/banner.png">
                    <img id="logo" src="images/logo.png">
                    <ul>                        
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Discover</a></li>
                        <li><a href="#">Directory</a></li>
                        <li><a href="#">Events</a></li>                    
                    </ul>
                    <input type="text" placeholder="Search..">
                    <button onclick="openForm()">Sign Up/Login</button>
                                                  
                
                </div>
                <div class="form-popup" id="myForm">
                    <form class="form">
                        <img class="close"  onclick="closeForm()" src="images/icon/close-button.png">
                        <h4 id="greeting">Log In and enjoy special features</h4>
                        <input type="text" placeholder="Email Address">
                        <input type="password" placeholder="password">
                        <a href="#"><button>Sign Up</button></a>
                        <button type="submit" id="login">Log In</button>
                        <a href="#" id="forgot_psw">Forgot Password?</a>
                        <h3>Or Log In With</h3>                        
                        <img id="gif_01"src="images/gif_01.gif">
                        <a href="#"><img id="fb" src="images/icon/facebook.png"></a>
                        <a href="#"><img id="gmail" src="images/icon/gmail.png"></a>
                        <a href="#"><img id="twitter"src="images/icon/twitter.png"></a>
                    </form>
                </div>

                <div class="signup">
                        <img src="images/covers/photo_16.jpg">
                        <div class="form_1">
                            <h2>Sign Up</h2>
                            <div class="form_2">
                                <p>EMAIL ADDRESS</p>
                                <input type="text" placeholder="EMAIL ADDRESS">
                                <p>PASSWORD</p>
                                <input type="password" placeholder="PASSWORD">
                                <p>RE-TYPE PASSWORD</p>
                                <input type="password" placeholder="RE-TYPE PASSWORD">
                                <p>NICKNAME</p>
                                <input type="text" placeholder="NICKNAME">
                                <p>*OPTIONAL</p>
                                <input id="code" type="text" placeholder="ENTER INVITE CODE">
                                <p class="terms">By signing up, I agree to the Terms of Use and Privacy Policy of HARAYA</p>
                                <button onclick="openForm()">Sign Up Now</button>
                                <h4>OR Log In with</h4>
                                <a href="#"><img id="fb_1" src="images/icon/facebook.png"></a>
                                <a href="#"><img id="gmail_1" src="images/icon/gmail.png"></a>
                                <a href="#"><img id="twitter_1"src="images/icon/twitter.png"></a>
                            </div>
                            
                        </div>
                    </div>   
                
                
              
            </div>         
            

                
            
            <div class="footer">
                <p>&copy; 2022 Haraya</p>

                
                
            </div>


        </div>
        <script>
            function openForm(){
                document.getElementById("myForm").style.display = "block";
            }
            function closeForm(){
                document.getElementById("myForm").style.display = "none";
            }
        </script>
         <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
    </body>