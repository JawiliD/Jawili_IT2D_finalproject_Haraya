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
                <div class="chapter_nav"> 
                    <img src="images/logo_1.png">
                    <a href="webtoon.php"><h4>Lookism</h4></a> 
                    <div id="nxt_prv">
                        <img src="images/icon/previous-page.png">
                        <h4>Chapter 1</h4> 
                        <img src="images/icon/next-page.png"> 
                    </div>
                    <div class="social_media">
                        <a href="#"><img src="images/icon/facebook1.png"></a>
                    <a href="#"><img src="images/icon/twitter1.png"></a>
                    </div>
                </div>
                <div>
                    <img id="chap_one" src="images/chap_1.png">
                </div>
                <div class="div_1">
                    <p>Share this series <br>and show support for the creator</p>
                    <button id="heart"><img src="">heart</button>
                    <button id="subscribe">Subscribe</button>
                    <a href="#"><img src="images/icon/facebook3.png"></a>
                    <a href="#"><img src="images/icon/twitter3.png"></a>
                    <p>Want to read chapter offline?</p>
                    <button id="dl_chapter">Download Chapter</button>
                </div> 
                <div class="div_2">
                    <div class="creator">
                        <table>
                            <tr>
                                <td>
                                    <h4>TaeJun Pak</h4>
                                </td>
                                <td>
                                    <h5>Creator</h5>
                                </td>
                            </tr>
                        </table>                        
                    </div>
                    <div class="comment_section">
                        <h4>Comments</h4>
                        <form>
                           <input id="cmnt_input" type="text" name="comment" placeholder="enter you comment here...">
                           <button type="submit" name="post">Post</button>
                        </form>
                        <ul>
                            <li>Top</li>
                            <li>New</li>
                        </ul>                        
                    </div>                    
                    <div class="cmnt_section">
                        <h3>Sasuke</h3>
                        <p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>
                    <h3>Inosuke</h3>
                        <p>Lorem ipsum dolor sit amet. Et nemo sunt ut fugit consectetur a aliquam porro et galisum molestiae cum consequatur laudantium vel voluptatem mollitia sed deleniti sunt! Est laudantium quae aut dolor molestiae sit corrupti optio et consequuntur deleniti et quia quas!</p>
                    </div>
                </div>
                <div class="new_trending">                    
                    <h4>New & Trending</h4>
                      <div class="new_trending_content">
                        <ul>                            
                            <li>
                                <a href="#"><div id="title"><h3 >1 Lookism</h3></div></a>
                            </li>
                            <li>
                                <a href="#"><div id="title"><h3 >2 Sweet Home</h3></div></a>
                            </li>
                            <li>
                                <a href="#"><div id="title"><h3 >3 For Your Sake</h3></div></a>
                            </li>
                            <li>
                                <a href="#"><div id="title"><h3 >4 Entwined</h3></div></a>
                            </li>
                            <li>
                                <a href="#"><div id="title"><h3 >5 Love Me Knot</h3></div></a>
                            </li>
                        </ul>
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