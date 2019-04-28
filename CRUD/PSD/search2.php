<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 2.2
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->
  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="image/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="image/flag-icons/United-States.png" alt="USA" /></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                    <!-- translation-button -->
                    <ul id="translation-dropdown" class="dropdown-content">
                      <li>
                        <a href="#!"><img src="image/flag-icons/United-States.png" alt="English" />  <span class="language-select">English</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="image/flag-icons/France.png" alt="French" />  <span class="language-select">French</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="image/flag-icons/China.png" alt="Chinese" />  <span class="language-select">Chinese</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="image/flag-icons/Germany.png" alt="German" />  <span class="language-select">German</span></a>
                      </li>
                      
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>            
<head> 
  <link rel="stylesheet" type= "text/css" href= "bouton.css"> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title> rechercher avancé</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">  
   <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">recherche avancé </h5>
           
              </div>
            </div>
          </div>
        </div>
  
</head> 



<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `guides` WHERE CONCAT(`cin`, `nom`, `prenom`, `nblangues` , `mail`, `numero`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `guides`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "amal");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="search2.php" method="post"> 
		   <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
            <input type="text" name="valueToSearch"><br><br> 
            <input type="submit" name="search" value="rechercher" class="button"><br><br> 
			</div>
            
            <table>
                <tr>
                    <th>cin</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>nb langues</th> 
					<th>mail</th>
					<th>numero</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['cin'];?></td>
                    <td><?php echo $row['nom'];?></td>
                    <td><?php echo $row['prenom'];?></td>
                    <td><?php echo $row['nblangues'];?></td>
					<td><?php echo $row['mail'];?></td>
                    <td><?php echo $row['numero'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
  
 <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank"></span>
        <span class="right"> <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    
</body>

</html>   
