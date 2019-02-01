<?php session_start();?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/chili-1.js"></script>
    <script type="text/javascript" src="jquery/jquery_002.js"></script>
	<script type="text/javascript" src="jquery/cycle-plugin.js"></script>
    <script type="text/javascript" src="javascript/search_data.js"></script>
	<script type="text/javascript" src="jquery/jquery_image.js"></script>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php
				include("header.php");
			?>
            
		</div>
		
		<div id="menu">
			<?php 
				include("menu.php");
			?>
		</div>
		<div id="main">
        	<div id="search_div">
            	<form>
                    Enter search init character of brand name<input type="text" name="searchdata" placeholder="Brand Name" onKeyUp="SearchItem(this.value)" class="search_txt" size="30"/>
               
                    
                    <div id="res"></div>
            	</form>
            </div>
        	           
            <!-- <div id="demos" style="float:left;margin-left:50px;">
                <div style="position: relative;" id="slideshow" class="pics">
                    <img src="images/acer1.jpg" style="display:none">
                    <img src="images/acer2.jpg" style="display:none;">
                    <img src="images/acer3.jpg" style="display:none">
                    <img src="images/acer4.jpg" style="display:block">
                    <img src="images/acer5.jpg" style="display:none">
                </div>
    		</div> -->
            <div style="float:left; margin-left:110px;">
                <div style="position: relative;" id="slideshow2" class="pics2">
                    <img src="images/hp1.jpg" style="display:none">
                    <img src="images/hp2.jpg" style="display:none;">
                    <img src="images/hp3.jpg" style="display:none">
                    <img src="images/hp4.jpg" style="display:block">
            	</div>
           </div> 
           <div id="row2_con_right" style="float:left; margin-left:50px;">
                <div id="row2_con_right_image" class="pics3">
                <img src="images/lenovo.jpg" alt="lenovo" />
                <img src="images/lenovo1.jpg" alt="lenovo"/>
                <img src="images/lenovo2.png" alt="lenovo"/>
                <img src="images/lenovo3.png" alt="lenovo" />
                </div>
          </div>
          <!-- <div id="row2_con_right" style="float:left; margin-left:110px;">
                <div id="foth" class="pics4">
                <img src="images/dell.jpg" alt="dell" />
                <img src="images/dell1.jpg" alt="dell"/>
                <img src="images/dell3.jpg" alt="dell" />
                <img src="images/dell2.jpg" alt="dell"/>
                </div> 
          </div>-->
		</div>
		
		<div id="footer">
			<?php 
				include("footer.php");
			?>
		</div>
	</div>
</body>
</html>