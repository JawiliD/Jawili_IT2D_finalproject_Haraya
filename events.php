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
                        <li><a href="Home2.php">Home</a></li>
                        <li><a href="discover.php">Discover</a></li>
                        <li><a href="directory.php">Directory</a></li>
                        <li><a href="events.php">Events</a></li>                    
                    </ul>

                    <table class="icons">
                        <tr>
                            <th>
                                <a href="Home3.php"><img src="images/icon/pencil.png"></a>
                            </th>                            
                            <th>
                                <button onclick="myFunction()" class="dropbtn"><img  src="images/icon/user.png"></button>
                            </th>
                        </tr>
                        
                    </table>
                    <input type="text" placeholder="Search..">
                    <div id="myDropdown" class="dropdown-content">                                  
                        <a href="Home3.php">Works</a>
                        <a href="/Haraya/index.php">Logout</a>                        
                    </div>         
                </div>
                <div class="events">
                    <h1>Events</h1>
                    <table>
                        <tr>
                            <td >
                                <?php
                                echo'<img src="images/covers/photo_12.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                                <button type="submit">Participate</button>
                            </td>
                            <td >
                                <?php
                                echo'<img src="images/covers/photo_13.png">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                                <button type="submit">Participate</button>
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <?php
                                echo'<img src="images/covers/photo_14.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                                <button type="submit">Participate</button>
                            </td>
                            <td >
                                <?php                                
                                echo'<img src="images/covers/photo_15.jpg">';
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                                <button type="submit">Participate</button>
                            </td>
                        </tr>
                    </table>
                    
                </div>

            </div>       

            <div id="footer">
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