<?php
    session_start();       
    

    if (isset($_REQUEST['signup'])) {

        $accounts = simplexml_load_file('files/account.xml');


        $account = $accounts->addChild('account');

        $account->addChild('email_address', $_REQUEST['email']);
        $account->addChild('Password', $_REQUEST['password']);
        $account->addChild('nick_name', $_REQUEST['nickname']);
        $account->addChild('Code', $_REQUEST['code']);

        $dom = new DomDocument();
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($account->asXML());
        $dom->save('files/account.xml');        
        header('Location: welcome.php');



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

                <div class="signup">
                    <form method="POST">                       
                        <img src="images/covers/photo_16.jpg">
                        <div class="form_1">
                            <h2>Sign Up</h2>
                            <div class="form_2">
                                <p>EMAIL ADDRESS</p>
                                <input name="email" type="text" placeholder="EMAIL ADDRESS">
                                <p>PASSWORD</p>
                                <input name="password" type="password" placeholder="PASSWORD">
                                <p>RE-TYPE PASSWORD</p>
                                <input type="password" placeholder="RE-TYPE PASSWORD">
                                <p>NICKNAME</p>
                                <input name="nickname" type="text" placeholder="NICKNAME">
                                <p>*OPTIONAL</p>
                                <input name="code" type="text" placeholder="ENTER INVITE CODE">
                                <p class="terms">By signing up, I agree to the Terms of Use and Privacy Policy of HARAYA</p>
                                <button name="signup">Sign Up Now</button>
                                <h4>OR Log In with</h4>
                                <a href="#"><img id="fb_1" src="images/icon/facebook.png"></a>
                                <a href="#"><img id="gmail_1" src="images/icon/gmail.png"></a>
                                <a href="#"><img id="twitter_1"src="images/icon/twitter.png"></a>
                            </div>
                            
                        </div>
                        </form>
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