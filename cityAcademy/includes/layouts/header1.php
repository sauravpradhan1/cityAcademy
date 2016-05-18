<?php 
    if (!isset($layout_context)) {
        $layout_context = "public";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>City Academy <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
        <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
        <style type="text/css">
                    ul.rightmenu
                    {
                        float:right;
                        width:98%;
                        height:45px;
                        padding:1%;
                        margin:0;
                        list-style-type:none;
                      
                        
                    }
                    a.custom
                    {
                        float:left;
                        width:7em;
                        height:2em;
                        text-decoration:none;
                        color:black;
                        padding:0.4em 0.8em;/* called shorthand property*/
                        border-right:1px solid #e2e2e2;
                        text-align:center;
                        text-transform:uppercase;
                        font-size:15px; 
                    }
                    a:hover
                    {
                        color:#f58143;
                    }

                    li.custom1{
                        padding-bottom: 0px;
                    }
                    
                    
                    
                </style>
    </head>
<body>
<header>
        <!--This is the header part of the page containing logo and menu.This is default in all the pages-->
            <section id="logo">
            <!--This section is used for putting logo-->
                <a href="home.php" style="border:none; ">
                    <img src="images/academy.png" width="190px" height="45px">
                </a>
                
            </section>
            <section id="menu">
            
            <!--This section is used for keeping menu-->
                
                <ul class="rightmenu">
                    
                   
                    <li class = "custom1"><a href="gallery.php" class = "custom">Gallery</a></li>
                    <li class = "custom1"><a href="index.php" class = "custom">Events</a></li>
                    <li class = "custom1"><a href="login.php" class = "custom">Login</a></li>
                    
                </ul>
            </section>
        
        
        <!--This is the end of header-->
        </header>
        <br>
        <br><br><br><br>
        
</body>
</html>