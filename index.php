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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Discover</a></li>
                        <li><a href="#">Directory</a></li>
                        <li><a href="#">Events</a></li>                    
                    </ul>
                    <input type="text" placeholder="Search..">
                    <button onclick="openForm()">Sign Up/Login</button>             
                
                </div>
                <div class="form-popup" id="myForm">
                    <form class="form">
                        <img class="close"  onclick="closeForm()" src="images/close-button.png">
                        <h4 id="greeting">Log In and enjoy special features</h4>
                        <input type="text" placeholder="Email Address">
                        <input type="password" placeholder="password">
                        <a href="#"><button>Sign Up</button></a>
                        <button type="submit" id="login">Log In</button>
                        <a href="#" id="forgot_psw">Forgot Password?</a>
                        <h3>Or Log In With</h3>                        
                        <img id="gif_01"src="images/gif_01.gif">
                        <img id="fb" src="images/icon/facebook.png">
                        <img id="gmail" src="images/icon/gmail.png">
                        <img id="twitter"src="images/icon/twitter.png">
                    </form>
                </div>
                <div class="today_pick">
                    <h2>Today's Pick</h2>
                    <a href=""><img src="images/covers/photo_1.jpg"></a>
                    <img src="images/covers/photo_2.jpg">
                    <img src="images/covers/photo_3.png">
                    <img src="images/covers/photo_4.png">
                </div>
                <div class="latest_update">
                    <h2>Latest Update</h2>
                    <table>
                        <tr>
                            <td id="">
                                <img src="images/covers/photo_5.jpg">
                                <p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>
                            </td>
                            <td id="">
                                <img src="images/covers/photo_6.jpg">
                                <p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>
                            </td>
                        </tr>
                        <tr>
                            <td id="">
                                <img src="images/covers/photo_7.jpg">
                                <p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>
                            </td>
                            <td id="">
                                <img src="images/covers/photo_8.jpg">
                                <p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>
                            </td>
                        </tr>
                        <tr>
                            <td id="">
                                <img src="images/covers/photo_11.jpg">
                                <p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>
                            </td>
                            <td id="">
                                <img src="images/covers/photo_10.jpg">
                                <p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>
                            </td>
                        </tr>
                    </table>
                    <button>Show more</button>
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