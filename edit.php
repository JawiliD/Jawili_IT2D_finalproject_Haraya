<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Haraya</title>       
        <link rel="stylesheet" type="text/css" href="css/style_03.css">
        <link href="https://unpkg.com/bootstrap@3.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
        <script src="https://unpkg.com/bootstrap@3.3.2/dist/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/bootstrap-multiselect@0.9.13/dist/js/bootstrap-multiselect.js"></script>
        <link href="https://unpkg.com/bootstrap-multiselect@0.9.13/dist/css/bootstrap-multiselect.css" rel="stylesheet"/>

    </head>

    <body >
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
                <div class="edit">
                    <form>
                    <div>
                        <div class="buttons">
                            <button id="save">SAVE</button>
                            <button id="delete">DELETE</button>
                            <button>CANCEL</button>
                        </div>
                    <div class="title">
                        <h4>Edit Comics</h4>                        
                        <select name="My Comics--">
                            <option size="2" value="Lookism">Lookism</option>
                        </select>                                      
                    </div>
                    <div class="cover">
                        <img src="">
                        <button id="comic_cover">Comic Cover</button>
                    </div>
                    <div class="comic_form">
                        <ul>
                            <li><input type="text" name="title" placeholder="Title" size="50"></li>
                            <li><input type="text" name="link_name" placeholder="Link Name" size="50"></li>
                            <li><input ype="text" name="Author" placeholder="Author" size="50"></li>
                            <li>
                               <div>
                                <select id="language" multiple="multiple">
                                  <option selected>Select language/dialect</option>
                                    <option value="Aklanon">Aklanon</option>
                                    <option value="Batangueño">Batangueño</option>
                                    <option value="Bikol">Bikol</option>
                                    <option value="Cebuano">Cebuano</option>
                                    <option value="Chavacano">Chavacano</option>
                                    <option value="Englsih">English</option>
                                    <option value="Hiligaynon">Hiligaynon</option>
                                    <option value="Ibanag">Ibanag</option>
                                    <option value="Ilocano">Ilocano</option>
                                    <option value="Ivatan">Ivatan</option>
                                    <option value="Kalinga">Kalinga</option>
                                    <option value="Kapampangan">Kapampangan</option>
                                    <option value="Kinaray-a">Kinaray-a</option>
                                    <option value="Maguindanao">Maguindanao</option>
                                    <option value="Maranao">Maranao</option>
                                    <option value="Masbateño">Masbateño</option>
                                    <option value="Pangasinan">Pangasinan</option>
                                    <option value="Surigaonon">Surigaonon</option>
                                    <option value="Silent">Silent</option>
                                    <option value="Tagalog">Tagalog</option>
                                    <option value="Yakan">Yakan</option>
                                    <option value="Zamboangueño">Zamboangueño</option>
                                </select>                                             
                             </div>
                            </li>
                            <li>
                                <select id="genre" multiple="multiple">
                                  <option selected>Select Genre</option>
                                    <option value="Action">Action</option>
                                    <option value="Adult">Adult</option>
                                    <option value="Adventure">Adventure</option>
                                    <option value="Aliens">Aliens</option>
                                    <option value="Animals">Animals</option>
                                    <option value="Anthology">Anthology</option>
                                    <option value="Boys Love">Boys Love</option>
                                    <option value="Comedy">Comedy</option>
                                    <option value="Cooking">Cooking</option>
                                    <option value="Crime">Crime</option>
                                    <option value="Cross Dressing">Cross Dressing</option>
                                    <option value="Demons">Demons</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Fantasy">Fantasy</option>
                                    <option value="Gender Bender">Gender Bender</option>
                                    <option value="Ghost">Ghost</option>
                                    <option value="Girls love">Girls Love</option>
                                    <option value="Historical">Historical</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Magic">Magic</option>
                                    <option value="Mature">Mature</option>
                                    <option value="Mecha">Mecha</option>
                                </select>                         
                            </li>
                            <li>
                                <select name="Rated--">
                                    <option selected>Rated--</option>
                                    <option value="Rated G">Rated G</option>
                                    <option value="rated PG">Rated PG</option>
                                    <option value="Rated 13">Rated 13</option>
                                    <option value="Rated 16">Rated 16</option>
                                    <option value="Rated 18">Rated 18</option>
                                </select>
                            </li>
                            <li>
                                <select name="Status---">
                                    <option selected>Status---</option>
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Hiatus">Hiatus</option>
                                    <option value="Canceled">Cancelled</option>
                                </select>
                            </li>
                            <li>
                                <select name="Publish Status---">
                                    <option selected>Publish Status---</option>
                                    <option value="Publish">Publish</option>
                                    <option value="Unpublish">Unpublish</option>
                                </select>
                            </li>
                            <li>
                                <select name="Commic Direction---">
                                    <option selected>Comic Direction---</option>
                                    <option value="Left to RIght. Top to Bottom">Left to Right, Top to Bottom</option>
                                    <option value="Right to left, Top to Bottom">Right to Left, Top to Bottom</option>
                                    <option value="Vertical">Vertical</option>      
                                </select>
                            </li>
                            <li>
                                <select name="Chapter Order---">
                                    <option selected>Chapter Order---</option>
                                    <option>Chonological</option>
                                    <option>Random</option>
                                </select>
                            </li>
                            <li>
                                <input id="summary" type="text" name="summary" placeholder="summary">
                            </li>
                        </ul>
                    </div>
                </div>   
            </form>       
                </div>
                
               
                                 
            </div>      
             <div id="footer">
                <p>&copy; 2022 Haraya</p>

                
                
            </div>


        </div>
        <script>
                $(function() {

                  $('#language').multiselect({
                    includeSelectAllOption: true
                  });
                  $('#genre').multiselect({
                    includeSelectAllOption: true
                  });                      
                });
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