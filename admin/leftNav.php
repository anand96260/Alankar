<?
	$PageName=get_page_name($_SERVER["PHP_SELF"]);	
?>
<div class="leftNav">
    	<ul id="menu">
        	<? if($PageName=="index.php") { $class='class="active"'; } else { $class=""; } ?>
        	<li class="dash"><a href="index.php" title="Dashboard" <?=$class?>><span>Dashboard</span></a></li>           
			<? if($PageName=="contentManagement.php" || $PageName=="contentManagement.php" || $PageName=="contentManagement.php") { $class='class=""'; } else { $class=""; } ?>
            <li class="child"><a href="#" title="Content Management" <?=$class?>><span>Content Management</span></a>
            	<ul class="sub">                    
                    <li><a href="contentManagement.php?p=1" title="">Home Page Content</a></li>
                    <li><a href="contentManagement.php?p=2" title="">About Us Page Content</a></li>
					<li><a href="contentManagement.php?p=6" title="">Resturants</a></li>
                    <li><a href="contentManagement.php?p=3" title="">Accomodation Page Content</a></li>
					<li><a href="contentManagement.php?p=7" title="">Facilities</a></li>
                    <li><a href="contentManagement.php?p=4" title="">Testimonials Page Content</a></li>
                    <li><a href="contentManagement.php?p=5" title="">Contact Us Page Content</a></li>
                </ul>
            </li>            
			<? if($PageName=="buffetMenu.php" || $PageName=="itemCategory.php" || $PageName=="itemManagement.php") { $class='class=""'; } else { $class=""; } ?>
            <li class="pic"><a href="#buffetMenu.php" title="South East Buffet" <?=$class?>><span>South East Buffet</span></a>            
                <ul class="sub">
                    <li><a href="categoryManagement.php" title="">Item Category Managment</a></li>
                    <li class="last"><a href="itemManagement.php" title="">Item Management</a></li>                   
                </ul>            
            </li>            
            <? if($PageName=="roomTypes.php" || $PageName=="rooms.php") { $class='class="active"'; } else { $class=""; } ?>
            <li class="speech"><a href="roomTypes.php" title="Room Management" <?=$class?>><span>Room Management</span></a>
           		<ul class="sub">                    
                    <li><a href="roomTypes.php" title="">Room Types</a></li>
                    <li class="last"><a href="rooms.php" title="">Rooms</a></li>
                </ul>
            </li>  
            <? if($PageName=="contactList.php") { $class='class="active"'; } else { $class=""; } ?>
            <li class="vcard"><a href="contactList.php" title="Contact List" <?=$class?>><span>Contact Us</span></a></li>       
            <? if($PageName=="logoff.php") { $class='class="active"'; } else { $class=""; } ?>
            <li class="logoff"><a href="logoff.php" title="Log Off" <?=$class?>><span>Log Off</span></a></li>
            
                       
           <!-- <li class="errors"><a href="#" title="" class="exp"><span>Error pages</span><span class="numberLeft">6</span></a>
            	<ul class="sub">
                    <li><a href="403.html" title="">403 page</a></li>
                    <li><a href="404.html" title="">404 page</a></li>
                    <li><a href="405.html" title="">405 page</a></li>
                    <li><a href="500.html" title="">500 page</a></li>
                    <li><a href="503.html" title="">503 page</a></li>
                    <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                </ul>
            </li>-->            
        </ul>
    </div>