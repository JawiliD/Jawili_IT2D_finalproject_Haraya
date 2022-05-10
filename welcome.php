<?php
    session_start();   
    

    $xml=simplexml_load_file('files/account.xml');
    $email = $xml->email_address;
    $pass = $xml->Password;
    $_nickname = $xml->nick_name;
    $_code = $xml->Code;

    $_SESSION['ses_email_add'] = $email;
    $_SESSION['ses_password'] = $pass;
    $_SESSION['ses_nickname'] = $_nickname;
    $_SESSION['ses_Code'] = $_code;

    $url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

    if (isset($_REQUEST['login'])=== true) {

       if ($_REQUEST['login_email'] != $email) {
           header("Location: ".$url_add."?notexist");
       }
       if ($_REQUEST['login_email'] != $email && $_REQUEST['login_pass'] == $pass) {
           header("Location: ".$url_add."?notexist");
       }

        elseif ($_REQUEST['login_email'] == $email && $_REQUEST['login_pass'] != $pass) {
            header("Location: ".$url_add."?wrongpass");
        }
        elseif (isset($_REQUEST['login_email']) == $email && $_REQUEST['login_pass'] == $pass) 
       {
        header('Location: Home2.php');
        }
    }
?>
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
                    
                                                  
                
                </div>
                <div method="POST" class="form-popup" id="myForm">
                    <form class="form">                        
                        <img class="close"  onclick="closeForm()" src="images/icon/close-button.png">
                        <h4 id="greeting">Log In and enjoy special features</h4>
                        <?php
                        if (isset($_REQUEST['notexist']) === true) 
                        {
                            echo"<div style='background-color:red;color:white;padding:10px;width:200px;margin:0px 65px;opacity:0.5;'> Username does not exist...</div>";
                            echo "<body onload='openForm();'></body>";
                        }
                        else if (isset($_REQUEST['wrongpass']) === true) 
                        {
                            echo"<div style='background-color:orange;color:white;padding:10px;width:200px;margin:0px 65px;opacity:0.5;'> Incorrect password...</div>";
                            echo "<body onload='openForm();'></body>";
                        }

                        ?>
                        <input name="login_email" type="text" placeholder="Email Address">
                        <input name="login_pass" type="password" placeholder="password">
                        <a href="#"><button>Sign Up</button></a>
                        <button name="login" type="submit" id="login">Log In</button>
                        <a href="#" id="forgot_psw">Forgot Password?</a>
                        <h3>Or Log In With</h3>                        
                        <img id="gif_01"src="images/gif_01.gif">
                        <a href="#"><img id="fb" src="images/icon/facebook.png"></a>
                        <a href="#"><img id="gmail" src="images/icon/gmail.png"></a>
                        <a href="#"><img id="twitter"src="images/icon/twitter.png"></a>
                    </form>
                </div>
               <div class="welcome">
                <h2>Welcome to</h2>
                <ul>
                    <li><img id="logo_1" src="images/logo_1.png"></li>
                    <li><img id="haraya" src="images/haraya_1.png"></li>
                </ul>
                <button id="login_btn" onclick="openForm()">LOGIN</button>
                

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
        
        
    </body>