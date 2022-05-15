
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Haraya</title>        
      
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
                
                <div class="row">
                    <div class="px-0 col-sm-9 col-12">
                        <h1>Checkout</h1>
                    </div>

                    
                    <div class="content">
                        <ul>
                            <li id="li_alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>STARTING JUNE 2022. Rental chapters will be multiply to 2 per rent.</li>
                        </ul>
                    </div>

                    <div class="content">
                        <ul>
                            <li id="li_alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Minimum checkout is 500 pesos only.</li>
                        </ul>
                    </div>


                    <label>
                        <ul>
                            <li>Summary</li>                       

                        </ul>
                    </label>

                    <form>
                        <div class="form">
                            <p>Total Free</p>
                            <input type="free" name="total_fee" placeholder="0">   <input type="free" name="total_fee" placeholder="0.00">

                            <p>Total Rental</p>
                            <input type="rental" name="total_rental" placeholder="0">   <input type="rental" name="total_rental" placeholder="0.00">

                            <p>Total Buy</p>
                            <input type="buy" name="total_buy" placeholder="0">   <input type="buy" name="total_buy" placeholder="0.00">


                            <p>Total Cashout</p>
                            <input type="cashout" name="total_cashout" placeholder="0.00">

                            <button>Cashout</button>
                        </div>
                    </form>
                
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