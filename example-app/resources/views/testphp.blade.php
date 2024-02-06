<!DOCTYPE html>
<html lang="en">
<head>
    <?php


	$ip = $_SERVER['REMOTE_ADDR']; //Get there ip address.
	$agent = $_SERVER['HTTP_USER_AGENT']; //Get there user agent, Firefox etc, and some other info about it.
	$ref = $_SERVER['HTTP_REFERER']; // Referer, how they got to your website, who linked them, where they clicked that 										//link.
	$date = date("H:i dS F"); //Get the date and time.
	$filename = $_SERVER['REQUEST_URI'];
	$file = "downloadlog.htm"; //Where the log will be saved.




			$open = fopen($file, "a+"); //open the file, (log.htm).

				fwrite($open, "<b>IP Address:</b> " .$ip . "<br/>"); //print / write the ip address.
				fwrite($open, "<b>Referer:</b>". $ref . "<br/>"); //print / write the referer.
				fwrite($open, "<b>UserAgent:</b>". $agent. "<br/>"); //print / write thier useragent.
				fwrite($open, "<b>File:</b>". $filename. "<br/>"); //print / write the file path to the log.
				fwrite($open, "<b>Date & Time:</b>". $date. "<br/><b></b><br/>"); //print / write the date and time they viewed the log.

			fclose($open); // you must ALWAYS close the opened file once you have finished.



// place this code inside a php file and call it f.e. "download.php"
$path = $_SERVER['DOCUMENT_ROOT']."/mixes/"; // change the path to fit your websites document structure
$fullPath = $path.$_GET['download_file'];

if ($fd = fopen ($fullPath, "r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "mp3":
        header("Content-type: application/mp3"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download
        break;
        default;
        header("Content-type: application/octet-stream");
        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
    }
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);
exit;

// example: place this kind of link into the document where the file download is offered:
// <a href="download.php?download_file=some_file.pdf">Download here</a>

?>
</head>
<body>

</body>
</html>
