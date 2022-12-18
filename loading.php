<html>
	<head>
	<script type="text/javascript" src="Scripts/main.js">
	</script>
    <link rel="stylesheet" href="Scripts/style.css" media="all" />
	<title>[AL] Alte-Leidenschaft</title>  

</head>

<body onLoad="change_pic()">

<div id="header"></div>

<div id="container">

<div id="serverinfo" class="column">
	<div class="panel panel-danger">
		<div class="panel-heading">Server Info</div>
			<ul class="list-group">
				<li class="list-group-item"><img src="images/server-name.png" alt="Server Name:" /><span id="s-name">Server Name</span></li>
				<li class="list-group-item"><img src="images/server-home.png" alt="Website:" /> www.alte-leidenschaft.com</li>
				<li class="list-group-item"><img src="images/server-players.png" alt="Max Players:" /> <span id="s-max">Max Players</span></li>
				<li class="list-group-item"><img src="images/server-mode.png" alt="Gamemode:" /> <span id="s-mode">Game Mode</span></li>
				<li class="list-group-item"><img src="images/server-mode.png" alt="FSK:" /><b>FSK: AB 14</b>, KEINE KINDER ERLAUBT!!!!!!!</li>
			</ul>
	</div>
</div>

<div id="mapinfo" class="column">
	<div class="panel panel-success">
		<div class="panel-heading">Map-Info</div>
			<ul class="list-group">
				<li class="list-group-item"><img src="images/server-map.png" alt="Current Map:" /> <span id="s-map">Server Map</span></li>
				<li class="list-group-item">

<?php

$map = $_GET["mapname"];
$pic_array = Array();
$dir = 'mappictures/';
$dir2 = $dir . $map . '/';
	

if (is_dir($dir2))
{
    if ( $handle = opendir($dir2) )
    {
        while (($file = readdir($handle)) !== false)
        {
            $pics = "$dir2$file";

            if ( filetype($pics) == "file" )
                 
            {
                $pic_array[] = $pics;
            }           
        }

	if (is_dir($dir2)) {
    echo '<img src="" border="0" alt=" " name="PictoChange" width="500" />';
	}
		closedir($handle);
    }
}

	else{
	echo '<img src="mappictures/nopic.png" width="500" />';
	}
?>

<script type="text/javascript">

var slide_array = <?php echo json_encode($pic_array); ?>;

<!--
var time = 3500
var narf = "0";

function change_pic() {
document.PictoChange.src = slide_array[narf];
narf++;
if (narf == slide_array.length) {
narf = 0;
}
setTimeout("change_pic()",time);
}
-->
</script>

				</li>
   			</ul>

	</div>
</div>

<div class="clr"></div>

<div id="downloads" class="column">
	<div class="panel panel-danger">
		<div class="panel-heading">Downloads</div>
				
				<div id="downloadfile" class="column">
				<p class="list-group-item-less"><img src="images/server-download.png" alt="Files" /> <span id="download-item">Current Download</span></p>
				</div>
				<div id="downloadstatus" class="column">
				<p class="list-group-item-less"><img src="images/server-download.png" alt="Status" /> <span id="percentage">Status</span></p>
				</div>
	</div>
</div>

</div>

</body>
</html>