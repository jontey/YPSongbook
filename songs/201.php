<?php
	//Initialize variables
	$h_num = basename($_SERVER['PHP_SELF'], ".php"); //Hymn number
	$s_col; //Column number
	$s_tabs = false; //Show chords
	$s_lang = "en"; //Language - default is English
	
	if(isset($_GET['lang'])){
		$s_lang = $_GET['lang'];
	}
	if(isset($_GET['tabs'])){
		$s_tabs = $_GET['tabs'];
	}
	if(isset($_GET['col'])){
		$s_col = $_GET['col'];
	}
?>
<head>

<style>
span{
	padding: 0px;
	margin: 0px;
	white-space: pre-wrap;
}
.content li{
	padding: 0px;
}
.content{
	padding: 5px;
}
<?(!$s_tabs)? print ".guitar{display: none;}":print "" ?>
<?($s_tabs)? print ".content {font-family:Consolas,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New, monospace;}":"" ?>
.spacer{
	height: 20px;
}
</style>

</head>
<body>
<?php include "../header.php" ?>
<div class=spacer></div>
<div class=content>
	<ul>
		<li>
<? $s_tabs?print to_string("D       G         D<br/>"):"" ?>
							Lord, I just love You,<br/>
<? $s_tabs?print to_string("            G  D        A<br/>"):"" ?>
							And there's no one like You.<br/>
<? $s_tabs?print to_string("       Bm       F#m<br/>"):"" ?>
							In the whole universe<br/>
<? $s_tabs?print to_string("  G             D        A<br/>"):"" ?>
							I have no other one like You.<br/>
<? $s_tabs?print to_string("      G             D<br/>"):"" ?>
							Lord, Jesus, I love You.<br/>
		</li><br />
	</ul>
</div>

<?php include "../footer.php" ?>
</body>
</html>