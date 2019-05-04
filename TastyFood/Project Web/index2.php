<?php
session_start();
require_once("index11.php");
$db_handle = new DBController();
?>
<html>
    <head>
    <meta http-equiv="Content-types" content="text/php; charset=utf-8" />
    <title>Food Network</title>
    <link href="style.css" rel="stylesheet" types="text/css" />
    <script src="script2.js" defer></script>

    </head>
    <body>
    
    <div id="site_container">
      <div id="site_header">
          <div id="site_title"></div>
        </div> <!-- end of header -->
        
        <div id="site_menu">
            <ul>
        	<li class="current"><a href="index.php"><b>Home</b></a></li>
          	<li class="current"><a href="index2.php"><b>Food Menus</b></a></li>
            <li class="current"><a href="index1.php"><b>Contact us</b></a></li>
            </ul>
        </div> <!-- end of menu -->
   <div class ="main">
        <div class="categories">    
            <ul >
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Meat Dishes">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
                
                <li><a href="index2.php?types=Soup">Soup</a> </li>
                <li><a href="index2.php?types=Salats">Salats</a> </li>
                <li><a href="index2.php?types=Steak">Meat Dishes</a> </li>
                <li><a href="index2.php?types=Pasta">Pasta</a> </li>
            </ul>
        </div> 

        <div class="types">
        <div class ="t">
        <?php

            $types = $_REQUEST["types"];
            $name = "";

        //$names = $_REQUEST["names"];
	    $product_array = $db_handle->runQuery("SELECT * FROM product WHERE types = '$types' ");
	    if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
	    ?>
          <div  class= "ttt"><img src="<?php echo $product_array[$key]["image1"]; ?>" height ="150px" width="200px"/>
              <a href="index3.php?types=<?=$product_array[$key]["types"]; ?>&name=<?=$product_array[$key]["names"]?>" >
                  <?php echo $product_array[$key]["names"]; ?></a></div>
          <?php
		}
	}
	?>
</div>
        </div>
   </div>

    <div id="site_footer">
        
    <a href="index.php">Home</a> | <a href="index1.php">Contact Us</a> | <a href="#">For Staff</a><br />
           
    </div>
    </body>
    </html>