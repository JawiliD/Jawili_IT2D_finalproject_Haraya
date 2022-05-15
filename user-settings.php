<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Settings</title>        
      
        <link rel="stylesheet" type="text/css" href="css/style_03.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
</head>
<body>
	<div class="wrapper">
		<div class="nav">
                    <img id="header" src="images/banner.png">
                    <img id="logo" src="images/logo_1.png">
                    <ul>                        
                        <li><a href="Home3.php">Home</a></li>
                        <li ><a onclick="Publish()" class="dropbtn1" href="#">Publish</a>
                        </li>
                        <li><a href="checkout.php">Checkout</a></li>                                          
                    </ul>
                                    
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
                        <a href="bank-account.php">Bank account</a>
                        <a href="user-settings.php">User Settings</a>
                        <a href="Home2.php">Reader</a>                        
                        <a href="/Haraya/index.php">Logout</a>  
                    </div>
                    <div id="myDropdown1" class="dropdown-content1">
                        <a href="edit.php">Edit</a>
                        <a href="new_series.php">New series</a>
                    </div>           
                </div>   

                <form>
                	<div class="header2">
                		<h2>My Settings</h2>
                	</div>
                	
                	<div class="form-user" style="text-align: center;">
                		<i class="fa fa-user-circle-o fa-5x"></i>
                		<li id="username"><a>Ishida_Senpai</a><i class="fa fa-address-book" aria-hidden="true"></i></li>


                		<p></p>
                        <input type="fb-account" name="text" placeholder="Facebook User Account">

                        <p></p>
                        <input type="about" name="text" size="100"  placeholder="About Yourself">

                        <p>Please input username only for social networking sites.</p>

                        <p></p>
                        <input type="fb" name="text" placeholder="Facebook">

                        <p></p>
                        <input type="twt" name="text" placeholder="Twitter">

                        <p></p>
                        <input type="ig" name="text" placeholder="Instagram">

                        <p></p>
                        <input type="web" name="text" placeholder="Website">

                        <p></p>
                        <button>Save</button>
                	</div>
                	


                </form>
		
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

                    function Publish() {
                  document.getElementById("myDropdown1").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn1')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content1");
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
</html>