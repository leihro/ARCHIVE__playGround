<?php 
	//define directory_separator and root dir
	define('DS') ? null: define('DS', DIRECTORY_SEPARATOR);
	define('SITE_ROOT') ? null : define('SITE_ROOT', DS.'Applications'.DS.'MAMP'.DS.'htdocs'.DS.'name'.DS.'phpfile');

	//write info into log.txt file
	function write_log($action, $message = "") {
		//file_put_contents() also works
		$logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
		$new = file_exists($logfile) ? false : true;
		if($handle = fopen($logfile, 'a')){
			$timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
			$content = "{$timestamp} | {$action} : {$message}\n";
			fwrite($handle, $content);
			fclose($handle);
			if($new){
				chmod($logfile, 0755);
			}
		} else {
			echo "Could not open log file for writing";
		}
	}

	// read info from log.txt file and write into html as ul li
	function read_log(){
		$logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
		if (file_exists($logfile) && is_readable($logfile) && $handle = fopen($logfile, 'r')) {
			$output =  "<ul class = \"log-entries\">";
			while (!feof($handle)) {
				$entry = fgets($handle);
				if(trim($entry) != ""){
					$output .= "<li>{$entry}</li>";
				}
			}
			$output .= "</ul>";
			fclose($handle);
		} else {
			$output =  "Could not read from {$logfile}.";
		}
		return $output;
	}

	if(isset($_POST['submit'])){
		$action = $_POST['action'];
		$message = $_POST['message'];
		write_log($action, $message);
	}

 ?>
 <html>
 <head>
 	<title>File log</title>
 </head>
 <body>
 	<h2>File log</h2>
 	<form action = "log.php" method = "post">
 		<input type = "text" value = "action" name = "action"/>
 		<input type = "text" value = "message" name = "message"/>
 		<input type = "submit" value = "submit" name = "submit"/>
 	</form>
 	<div>
 		<?php 
 			if(isset($_POST['submit'])){
				$log = read_log();
				echo $log;
			}
 		 ?>
 	</div>
 </body>
 </html>
