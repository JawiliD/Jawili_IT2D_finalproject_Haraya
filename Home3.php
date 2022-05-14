<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Haraya</title>        
      
        <link rel="stylesheet" type="text/css" href="css/style_03.css">
    </head>

    <body >
    	<div class="wrapper">            
                <div class="nav">
                    <img id="header" src="images/banner.png">
                    <img id="logo" src="images/logo_1.png">
                    <ul>                        
                        <li><a href="Home3.php">Home</a></li>
                        <li><a id="dropbth_1" href="#">Publish</a>
                        </li>
                        <li><a href="checkout.php">Checkout</a></li>                                          
                    </ul>
                    <a href=""></a>                  
                    <table class="icons">
                        <tr>
                            <th>
                                <a href="Home2.php"><img src="images/icon/book.png"></a>
                            </th>
                            <th>
                                <button onclick="myFunction()" class="dropbtn"><img  src="images/icon/user.png"></button>
                            </th>
                        </tr>                        
                    </table>
                    <input type="text" placeholder="Search..">
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Bank account</a>
                        <a href="#">User Settings</a>
                        <a href="Home2.php">Reader</a>                        
                        <a href="#">Logout</a>  
                    </div>          
                </div>                
                    <div>
                        <form class="options">
                         <select name = "Alphabetical">
                            <option value = "Alphabetical" selected>Alphabetical</option>
                            <option value = "Updates">Updates</option>
                            <option value = "Favourites">Favorites</option>
                            <option value = "Ratings">Ratings</option>
                         </select>                         
                      </form>
                    </div>   
                <div class="home3">
                    <h3>My Comics</h3>             
                    <div class="creation">                        
                        <img src="images/covers/photo_1.jpg">
                        <div class="content_1">
                            <a href=""><h4>Lookism</h4></a>
                            <h5>Drama</h5>
                            <h5>chapter 1<h5>
                            <h5>$ NaN/View</h5>
                        </div>
                    </div>                                       
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