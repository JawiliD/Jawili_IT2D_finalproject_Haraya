<?php
        if (isset($_REQUEST['preview'])=== true)
        {
            header('Location: chapter1.php');
        }
    ?>
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
                        <a href="#">Account</a>
                        <a href="Home3.php">Works</a>
                        <a href="#">Logout</a>
                        
                    </div>             
                
                </div> 
                <div class="comic">
                    <img id="lookism_bg" src="images/lookism_bg.png">
                    <h5>Drama</h5>
                    <h2>Lookism</h2>
                    <h5>Taejun Pak</h5>
                    <a href="#"><img id="facebook1" src="images/icon/facebook1.png"></a>
                    <a href="#"><img id="twitter1" src="images/icon/twitter1.png"></a>
                    <div class="chapters_container">
                        <div class="chapters">
                            <table class="chapter_table">
                            <tr id="t-row">
                                <td>
                                    <img src="images/ep3.png">
                                    <h4>Ep 3</h4>
                                    <button>View</button>
                                                                        
                                </td>                                
                            </tr>
                             <tr id="t-row">
                                <td>
                                    <img src="images/ep2.jpg">
                                    <h4>Ep 2</h4>
                                    <button>View</button>
                                                                        
                                </td>                                
                            </tr>
                            <tr id="t-row">
                                <td>
                                    <img src="images/ep1.png">
                                    <h4>Ep 1</h4>
                                    <a href="chapter1.php"><button  name="preview" method="POST">View</button> </a>                                  
                                                                        
                                </td>                                
                            </tr>
                             
                        </table>
                        </div>                        
                        <div class="summary_container">
                            <div class="summary">
                            <h3>Every Sunday</h3>
                            <p>Daniel is an unattractive loner who wakes up in a different body. Now tall, handsome, and cooler than ever in his new form, Daniel aims to achieve everything he couldn't before. How far will he go to keep his body... and his secrets?</p>
                            <div class="summary_image">
                                <img src="images/lookism.png">
                            </div>
                            </div>                           
                            
                        </div>

                    </div>
                    <div class="comic_2_container">
                        <div class="comic_2">
                            <h3>You may also like</h3>
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
                            </td>
                        </tr>
                        </table>
                        </div>                        
                    </div>
                </div>         
              
            </div>         
            

                
            
            <div id="footer">
                <p>&copy; 2022 Haraya</p>

                
                
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