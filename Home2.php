<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Haraya</title>        
      
        <link rel="stylesheet" type="text/css" href="css/style_02.css">
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

                    <table class="icons">
                        <tr>
                            <th>
                                <a href=""><img src="images/icon/pencil.png"></a>
                            </th>
                            <th>
                                <a href=""><img src="images/icon/shopping-bag.png"></a>
                            </th>
                            <th>
                                <button onclick="myFunction()" class="dropbtn"><img  src="images/icon/user.png"></button>
                            </th>
                        </tr>
                        
                    </table>
                    <input type="text" placeholder="Search..">
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Subscribed</a>
                        <a href="#">Coins</a>
                        <a href="#">Invites</a>
                        <a href="#">Account</a>
                        <a href="#">Works</a>
                        <a href="#">Logout</a>
                        
                    </div>                
                
                </div>


                
                <div class="today_pick">
                    <h2>Today's Pick</h2>
                    <a href="#"><img src="images/covers/photo_1.jpg"></a>
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
            
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }

</script>  
    
    	
    </body>