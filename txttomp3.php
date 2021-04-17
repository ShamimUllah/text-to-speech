<?php
 if($_POST){
	//get the text 
   $text = substr($_POST['textbox'], 0, 100);
   
   //we are passing as a query string so encode it, space will become +
   $text = urlencode($text);
   
   //give a file name and path to store the file
   $file  = rand().'filename';
   $file = "audio/" . $file . ".mp3";
   
   //now get the content from the Google API using file_get_contents
   echo $mp3 = file_get_contents("http://translate.google.com/translate_tts?tl=en&q=$text"); die();
   
   //save the mp3 file to the path
   file_put_contents($file, $mp3);
}
?>
<html>
<body> 
<h2>Text to Speech PHP Script</h2>

<form action="" method="post">
	Enter your text: <input name="textbox"></input>
</form>
 
<?php  if($_POST){?>

<!-- play the audio file using a player. Here I'm used a HTML5 player. You can use any player insted-->
<audio controls="controls" autoplay="autoplay">
  <source src="<?php echo $file; ?>" type="audio/mp3" />
</audio>

<?php }?>
<br />
<a href="http://blog.theonlytutorials.com/php-script-text-speech-google-api/">Find the tutorial here - Blog.Theonlytutorials.com</a>
</body>
</html>