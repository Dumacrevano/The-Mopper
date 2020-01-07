<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>WELCOME TO MOPPER V01</title>
</head>
       <body>
       <center><h1>Control LED using Raspberry Pi Webserver</h1>
	<img src="http://192.168.1.101:8080/?action=stream" />      
         <form method="get" action="index.php">                
            <input type="submit" style = "font-size: 14 pt" value="STOP" name="stop">
            <input type="submit" style = "font-size: 14 pt" value="FORWARD" name="forward">
	    <input type="submit" style = "font-size: 14 pt" value="BACKWARD" name="backward">
	    <input type="submit" style = "font-size: 14 pt" value="LEFT" name="left">
	    <input type="submit" style = "font-size: 14 pt" value="RIGHT" name="right">	    
         </form>​​​
                         </center>
<?php
    if(isset($_GET['stop']))
        {
                        echo "robot stopped";
                        exec("echo 0 > /sys/class/gpio/gpio16/value ");
			exec("echo 0 > /sys/class/gpio/gpio20/value ");
			exec("echo 0 > /sys/class/gpio/gpio26/value ");
			exec("echo 0 > /sys/class/gpio/gpio19/value ");
        }
            else if(isset($_GET['forward']))
            {
                        echo "robot move forward";
                        exec("echo 1 > /sys/class/gpio/gpio16/value ");
			exec("echo 0 > /sys/class/gpio/gpio20/value ");
			exec("echo 1 > /sys/class/gpio/gpio26/value ");
			exec("echo 0 > /sys/class/gpio/gpio19/value ");
            }
	    else if(isset($_GET['backward']))
            {
                        echo "robot move forward";
                        exec("echo 0 > /sys/class/gpio/gpio16/value ");
                        exec("echo 1 > /sys/class/gpio/gpio20/value ");
                        exec("echo 0 > /sys/class/gpio/gpio26/value ");
                        exec("echo 1 > /sys/class/gpio/gpio19/value ");
            }

	   else if(isset($_GET['left']))
            {
                        echo "robot move forward";
                        exec("echo 0 > /sys/class/gpio/gpio16/value ");
                        exec("echo 0 > /sys/class/gpio/gpio20/value ");
                        exec("echo 1 > /sys/class/gpio/gpio26/value ");
                        exec("echo 1 > /sys/class/gpio/gpio19/value ");
            }
	   else if(isset($_GET['right']))
            {
                        echo "robot move forward";
                        exec("echo 0 > /sys/class/gpio/gpio16/value ");
                        exec("echo 0 > /sys/class/gpio/gpio20/value ");
                        exec("echo 1 > /sys/class/gpio/gpio26/value ");
                        exec("echo 1 > /sys/class/gpio/gpio19/value ");
            }


?>
   </body>
</html>
