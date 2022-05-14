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
                        
                    </div >
                   
              
                </div>
                <div class="genre">
                    <h2>Discover</h2>
                    <h3>Genre</h3>
                    <form method="GET">
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" id="all" name="check_genre[]" value="All">
                                    <label for="all1"> All</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="cooking" name="check_genre[]" value="Cooking">
                                    <label for="cooking1"> Cooking</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="historiccal" name="check_genre[]" value="Historical">
                                    <label for="historical1"> Historical</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="psychological" name="check_genre[]" value="Psychological">
                                    <label for="psychological1"> Psychological</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="action" name="check_genre[]" value="Action">
                                    <label for="action1"> Action</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="crime" name="check_genre[]" value="Crime">
                                    <label for="crime1"> Crime</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="horror" name="check_genre[]" value="Horror">
                                    <label for="horror1"> Horror</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="reincarnation" name="check_genre[]" value="All">
                                    <label for="reincarnation1"> Reincarnation</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="adult" name="check_genre[]" value="Adult">
                                    <label for="adult1"> Adult</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="cross-dressing" name="check_genre[]" value="Cross Dressing">
                                    <label for="cross-dressing1"> Cross Dressing</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="magic" name="check_genre[]" value="Magic">
                                    <label for="magic1"> Magic</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="romance" name="check_genre[]" value="Romance">
                                    <label for="romance1"> Romance</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="adventure" name="check_genre[]" value="Adventure">
                                    <label for="adventure1"> Adventure</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="demons" name="check_genre[]" value="Demons">
                                    <label for="demons1"> Demons</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="mature" name="check_genre[]" value="Mature">
                                    <label for="mature1"> Mature</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="science-fiction" name="check_genre[]" value="Science Fiction">
                                    <label for="science-fiction1"> Science Fiction</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="aliens" name="check_genre[]" value="Aliens">
                                    <label for="aliens1"> Aliens</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="drama" name="check_genre[]" value="Drama">
                                    <label for="drama1"> Drama</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="mecha" name="check_genre[]" value="Mecha">
                                    <label for="mecha1"> Mecha</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="slice-of-life" name="check_genre[]" value="Slice of Life">
                                    <label for="slice-of-life1"> Slice of Life</label>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="Animals" name="check_genre[]" value="Animals">
                                    <label for="animals1"> Animals</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="fantasy" name="check_genre[]" value="Fanatasy">
                                    <label for="fantasy1"> Fantasy</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="medical" name="check_genre[]" value="medical">
                                    <label for="medical1"> Medical</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="smut" name="check_genre[]" value="Smut">
                                    <label for="smut1"> Smut</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="anthology" name="check_genre[]" value="Anthology">
                                    <label for="anthology1"> Anthology</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="gender-bender" name="gender-bender1" value="Gender Bender">
                                    <label for="gender-bender1"> Gender Bender</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="military" name="military1" value="Military">
                                    <label for="military1"> Military</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="sports" name="sports1" value="Sports">
                                    <label for="sports1"> Sports</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="boys-love" name="boys-love1" value="Boy's Love">
                                    <label for="boys-love1"> Boy's Love</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ghost" name="ghost1" value="Ghost">
                                    <label for="ghost1"> Ghost</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="mystery" name="mystery1" value="Mystery">
                                    <label for="mystery1"> Mystery</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="super-natural" name="super-natural1" value="Super Natural">
                                    <label for="super-natural1"> Super Natural</label>
                                </td>
                                
                            </tr>
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="comedy" name="comedy1" value="Comedy">
                                    <label for="comedy1"> Comedy</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="girls-love" name="girls-love1" value="Girl's Love">
                                    <label for="girls-love1"> Girl's Love</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="one-shot" name="one-shot1" value="One Shot">
                                    <label for="one-shot1"> One Shot</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="tradegy" name="tradegy1" value="Tradegy">
                                    <label for="tradegy1"> Tradegy</label>
                                </td>
                            </tr>
                        </table>

                        <h3>Language/Dialects</h3>
                        <table >
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="all_1" name="check_language[]" value="All">
                                    <label for="all_1"> all</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="english" name="check_language[]" value="English">
                                    <label for="english1"> English</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="kapampangan" name="check_language[]" value="Kapampangan">
                                    <label for="kapampangan1"> Kapampangan</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="silent" name="check_language[]" value="Silent">
                                    <label for="silent1"> Silent</label>
                                </td>
                            </tr>
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="akladon" name="check_language[]" value="Akladon">
                                    <label for="akladon1"> Akladon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="hiligaynon" name="check_language[]" value="Hiligaynon">
                                    <label for="hiligaynon1"> Hiligaynon</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="kinaray-a" name="check_language[]" value="Kinaray-a">
                                    <label for="kinaray-a1"> Kinaray-a</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="surigaonon" name="check_language[]" value="Surigaonon">
                                    <label for="surigaonon1"> Surigaonon</label>
                                </td>
                            </tr>     
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="batanguenuo" name="batanguenuo1" value="Batanguenuo">
                                    <label for="batanguenuo1"> Batanguenuo</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ibanag" name="ibanag1" value="Ibanag">
                                    <label for="ibanag1"> Ibanag</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="maguindanao" name="maguindanao1" value="Maguindanao">
                                    <label for="maguindanao1"> Maguindanao</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="tagalog" name="tagalog1" value="Tagalog">
                                    <label for="tagalog1"> Tagalog</label>
                                </td>
                            </tr>     
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="bikol" name="bikol1" value="Bikol">
                                    <label for="bikol1"> Bikol</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ilocano" name="ilocano1" value="ilocano">
                                    <label for="ilocano1"> Ilocano</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="maranao" name="maranao1" value="Maranao">
                                    <label for="maranao1"> Maranao</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="yakan" name="yakan1" value="Yakan">
                                    <label for="yakan1"> Yakan</label>
                                </td>
                            </tr>     
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="cebuano" name="cebuano1" value="Cebuano">
                                    <label for="cebuano1"> Cebuano</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ivatan" name="ivatan1" value="Ivatan">
                                    <label for="ivatan1"> Ivatan</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="masbateno" name="masbateno1" value="Masbateno">
                                    <label for="masbateno1"> Masbateno</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="zamboangueño" name="zamboangueño1" value="Zamboangueño">
                                    <label for="zamboangueño1"> Zamboangueño</label>
                                </td>
                            </tr>     
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="chavacano" name="chavacano1" value="Chavacano">
                                    <label for="chavacano1"> Chavacano</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="kalinga" name="kalinga1" value="Kalinga">
                                    <label for="kalinga1"> Kalinga</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="pangasinan" name="pangasinan1" value="Pangasinan">
                                    <label for="pangasinan1"> Pangasinan</label>
                                </td>
                                
                            </tr>    
                        </table>

                        <h3>Status</h3>
                        <table class="status">
                            <tr>
                                
                                <td>
                                    <input type="checkbox" id="all_2" name="check_status[]" value="All">
                                    <label for="all_2"> All</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="ongoing" name="check_status[]" value="Ongoing">
                                    <label for="ongoing1"> Ongoing</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="completed" name="check_status[]" value="Completed">
                                    <label for="completed1"> Completed</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="hiatus" name="check_status[]" value="Hiatus">
                                    <label for="hiatus1"> Hiatus</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="cancelled" name="check_status[]" value="Cancelled">
                                    <label for="cancelled1"> Cancelled</label>
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