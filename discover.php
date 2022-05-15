<?php
    session_start();       
    

    if (isset($_REQUEST['search_btn'])) {        
        

        $discovers = simplexml_load_file('files/discover.xml');


        $discover = $discovers->addChild('discover');

        $discover->addChild('genre', $_REQUEST['check_genre']);
        $discover->addChild('language', $_REQUEST['check_language']);
        $discover->addChild('status', $_REQUEST['check_status']);        

        $dom = new DomDocument();
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($discover->asXML());
        $dom->save('files/discover.xml');       
        



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
                        <a href="Home3.php">Works</a>
                        <a href="/Haraya/index.php">Logout</a>
                        
                    </div >
                   
              
                </div>
                <div class="genre">
                    <h2>Discover</h2>
                    <h3>Genre</h3>
                    <form method="POST">
                        <div id="<?php echo $genreId;?>" class="Genre">
                            <table>
                            <tr>
                                <td>
                                    <input type="checkbox" id="all" name="check_genre" value="All">
                                    <label> All</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="cooking" name="check_genre" value="Cooking">
                                    <label> Cooking</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="historiccal" name="check_genre" value="Historical">
                                    <label> Historical</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="psychological" name="check_genre" value="Psychological">
                                    <label> Psychological</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="action" name="check_genre" value="Action">
                                    <label> Action</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="crime" name="check_genre" value="Crime">
                                    <label> Crime</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="horror" name="check_genre" value="Horror">
                                    <label> Horror</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="reincarnation" name="check_genre" value="All">
                                    <label> Reincarnation</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="adult" name="check_genre" value="Adult">
                                    <label> Adult</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="cross-dressing" name="check_genre" value="Cross Dressing">
                                    <label> Cross Dressing</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="magic" name="check_genre" value="Magic">
                                    <label> Magic</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="romance" name="check_genre" value="Romance">
                                    <label> Romance</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="adventure" name="check_genre" value="Adventure">
                                    <label> Adventure</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="demons" name="check_genre" value="Demons">
                                    <label> Demons</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="mature" name="check_genre" value="Mature">
                                    <label> Mature</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="science-fiction" name="check_genre" value="Science Fiction">
                                    <label> Science Fiction</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="aliens" name="check_genre" value="Aliens">
                                    <label> Aliens</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="drama" name="check_genre" value="Drama">
                                    <label> Drama</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="mecha" name="check_genre" value="Mecha">
                                    <label> Mecha</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="slice-of-life" name="check_genre" value="Slice of Life">
                                    <label> Slice of Life</label>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="Animals" name="check_genre" value="Animals">
                                    <label> Animals</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="fantasy" name="check_genre" value="Fanatasy">
                                    <label> Fantasy</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="medical" name="check_genre" value="medical">
                                    <label> Medical</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="smut" name="check_genre" value="Smut">
                                    <label> Smut</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="anthology" name="check_genre" value="Anthology">
                                    <label> Anthology</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="gender-bender" name="check_genre" value="Gender Bender">
                                    <label> Gender Bender</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="military" name="check_genre" value="Military">
                                    <label> Military</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="sports" name="check_genre" value="Sports">
                                    <label> Sports</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="boys-love" name="check_genre" value="Boy's Love">
                                    <label> Boy's Love</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ghost" name="check_genre" value="Ghost">
                                    <label> Ghost</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="mystery" name="check_genre" value="Mystery">
                                    <label> Mystery</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="super-natural" name="check_genre" value="Super Natural">
                                    <label> Super Natural</label>
                                </td>
                                
                            </tr>
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="comedy" name="check_genre" value="Comedy">
                                    <label> Comedy</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="girls-love" name="check_genre" value="Girl's Love">
                                    <label> Girl's Love</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="one-shot" name="check_genre" value="One Shot">
                                    <label> One Shot</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="tradegy" name="check_genre" value="Tradegy">
                                    <label> Tradegy</label>
                                </td>
                            </tr>
                        </table>
                        </div>                       
                        
                        <h3>Language/Dialects</h3>
                        <table >
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="all_1" name="check_language" value="All">
                                    <label> all</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="english" name="check_language" value="English">
                                    <label> English</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="kapampangan" name="check_language" value="Kapampangan">
                                    <label> Kapampangan</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="silent" name="check_language" value="Silent">
                                    <label> Silent</label>
                                </td>
                            </tr>
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="akladon" name="check_language" value="Akladon">
                                    <label> Akladon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="hiligaynon" name="check_language" value="Hiligaynon">
                                    <label> Hiligaynon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="kinaray-a" name="check_language" value="Kinaray-a">
                                    <label> Kinaray-a</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="surigaonon" name="check_language" value="Surigaonon">
                                    <label> Surigaonon</label>
                                </td>
                            </tr>     
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="batanguenuo" name="check_language" value="Batanguenuo">
                                    <label> Batanguenuo</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ibanag" name="check_language" value="Ibanag">
                                    <label> Ibanag</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="maguindanao" name="check_language" value="Maguindanao">
                                    <label> Maguindanao</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="tagalog" name="check_language" value="Tagalog">
                                    <label> Tagalog</label>
                                </td>
                            </tr>     
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="bikol" name="check_language" value="Bikol">
                                    <label> Bikol</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ilocano" name="check_language" value="ilocano">
                                    <label> Ilocano</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="maranao" name="check_language" value="Maranao">
                                    <label> Maranao</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="yakan" name="check_language" value="Yakan">
                                    <label> Yakan</label>
                                </td>
                            </tr>     
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="cebuano" name="check_language" value="Cebuano">
                                    <label> Cebuano</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ivatan" name="check_language" value="Ivatan">
                                    <label> Ivatan</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="masbateno" name="check_language" value="Masbateno">
                                    <label> Masbateno</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="zamboangueño" name="check_language" value="Zamboangueño">
                                    <label> Zamboangueño</label>
                                </td>
                            </tr>     
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="chavacano" name="check_language" value="Chavacano">
                                    <label > Chavacano</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="kalinga" name="check_language" value="Kalinga">
                                    <label> Kalinga</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="pangasinan" name="check_language" value="Pangasinan">
                                    <label> Pangasinan</label>
                                </td>
                                
                            </tr>    
                        </table>                      
                        
                        <h3>Status</h3>
                        <table class="status">
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="all_2" name="check_status" value="All">
                                    <label> All</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ongoing" name="check_status" value="Ongoing">
                                    <label> Ongoing</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="completed" name="check_status" value="Completed">
                                    <label> Completed</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="hiatus" name="check_status" value="Hiatus">
                                    <label> Hiatus</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="cancelled" name="check_status" value="Cancelled">
                                    <label> Cancelled</label>
                                </td>
                            </tr>
                        </table>                        
                        <input id="search" type="submit" name="search_btn" value="SEARCH">
                    </form>

                </div>
                <div>
                    <form class="succession">
                         <select name = "Alphabetically">
                            <option value = "Alphabetically" selected>Alphabeticaly</option>
                            <option value = "Favourites">Favourites</option>
                            <option value = "Popularity">Popularity</option>
                         </select>                         
                      </form>
                      <div id="comics">
                        <table>
                        <tr>
                            <td id="">
                                <?php
                                echo'<img src="images/covers/photo_5.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                            </td>
                            <td id="">
                                <?php
                                echo'<img src="images/covers/photo_6.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                            </td>
                        </tr>
                        <tr>
                            <td id="">
                                <?php
                                echo'<img src="images/covers/photo_7.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                            </td>
                            <td id="">
                                <?php
                                echo'<img src="images/covers/photo_8.jpg">';                                
                                echo "<p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>";?>
                            </td>
                        </tr>
                        </table>
                      </div>
                      <button type="submit" class="load_more">Load More</button>
                      
                </div>




        </div >
        <div id="footer">
                <p>&copy; 2022 Haraya</p>
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