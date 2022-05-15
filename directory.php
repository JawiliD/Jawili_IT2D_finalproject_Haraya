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

                <div class="letters"> 
                <h1>Directory</h1>                   
                    <table class="first_row">
                        <tr>
                            <td><a href="#">All</a></td>
                            <td><a href="#">A</a></td>
                            <td><a href="#">B</a></td>
                            <td><a href="#">C</a></td>
                            <td><a href="#">D</a></td>
                            <td><a href="#">E</a></td>
                            <td><a href="#">F</a></td>
                            <td><a href="#">G</a></td>
                            <td><a href="#">H</a></td>
                            <td><a href="#">I</a></td>
                            <td><a href="#">J</a></td>
                            <td><a href="#">K</a></td>
                            <td><a href="#">L</a></td>
                        </tr>
                    </table>
                    <table class="second_row">
                        <tr>
                            <td><a href="#">M</a></td>
                            <td><a href="#">N</a></td>
                            <td><a href="#">O</a></td>
                            <td><a href="#">P</a></td>
                            <td><a href="#">Q</a></td>
                            <td><a href="#">R</a></td>
                            <td><a href="#">S</a></td>
                            <td><a href="#">T</a></td>
                            <td><a href="#">U</a></td>
                            <td><a href="#">V</a></td>
                            <td><a href="#">W</a></td>
                            <td><a href="#">X</a></td>
                            <td><a href="#">Y</a></td>
                            <td><a href="#">Z</a></td>
                        </tr>
                    </table>
                    
                </div >
                <div class="comics_1">
                    <table>
                        <tr>
                            <td >
                                <?php
                                echo'<img src="images/covers/photo_5.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                            </td>
                            <td >
                                <?php
                                echo'<img src="images/covers/photo_6.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                        </tr>
                        <tr>
                            <td >
                                <?php
                                echo'<img src="images/covers/photo_7.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                            </td>
                            <td >
                                <?php
                                echo'<img src="images/covers/photo_8.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                            </td>
                        </tr>
                        <tr>
                            <td id="">
                                <?php
                                echo'<img src="images/covers/photo_11.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                            </td>
                            <td id="">
                                <?php
                                echo'<img src="images/covers/photo_10.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                            </td>
                        </tr>
                        </table>
                        <button type="submit" class="load_more_1">Load More</button>
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