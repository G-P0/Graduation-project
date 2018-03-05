<?php 
session_start();
if (isset($_SESSION['msg'])) {
 	echo $_SESSION['msg'];
 	unset($_SESSION['msg']);
 } 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Files Repo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Upload File</legend>
		<input type="file" name="uploadedfile">
		<input type="submit" name="upload" value="Upload File">
	</fieldset>	
	</form>	
	</div>
	<br>
	<table>
		<thead>
			<tr>
				<th>File Name</th>
				<th>Type</th>
				<th>Size</th>
				<th>Date Modified</th>
				<th>Open</th>
				<th>Edit File Name</th>
				<th>Select Files</th>
			</tr>
		</thead>
			<?php 
				$currpath = getcwd();
				$contents = scandir($currpath);
				if ($_SERVER['QUERY_STRING'] == "hidden") 
					{
						$hide = "";
						$ahref = "./index.php";
						$text = "Hide";
					} 
					else 
					{
						$hide = ".";
						$ahref = "./index.php?hidden";
						$text = "Show";
					}
				
				foreach ($contents as $name) 
				{
					if (substr($name, 0, 1) != $hide) 
					{
						$name = $name ;
						$modficationtime = date("M j Y g;i A", filemtime($name));
						if (is_dir($name)) 
						{
							$size = "&lt;Directory&gt;";
							if ($name == ".") 
							{ 
								$name = ". (Current Directory)" ;
								$extn = "&lt;System Dir&gt;";
							} 
							elseif ($name == "..")
							{
								$name = ".. (Parent Directory)" ;
								$extn = "&lt;System Dir &gt;";
							}
							
						} 
						else 
						{
							$extn = pathinfo($name , PATHINFO_EXTENSION);
							$size = myFileSize($name);
						}
				?>
				<form action="update.php" method="get">
				<?php
					echo " <tr>
								<td>$name</td>
								<td>$extn</td>
								<td>$size</td>
								<td>$modficationtime</td>
								<td>  </td>
								<td><input type='text' name='newnames[]'></td>
								<td><input type='checkbox' name='selectedfiles[]' value='$name'></td>
							</tr> ";
					}
				}

				function myFileSize($filename)
				{
					$size = filesize($filename);
					if ($size < 1024) 
					{
						$size = $size."Bytes";
					} 
					elseif ($size > 1023 && $size < 1048576 ) 
					{
						$size = round($size/1024 , 2) ."KB";
					}
					elseif ($size > 1048575 && $size < 1092616192) 
					{
						$size = round($size/11048576 , 2) ."MB";
					}
					elseif ($size > 1092616191) 
					{
						$size = round($size/1092616192 , 2) ."GB";
					}
					return $size;
					
				}

			?>
		
	</table>
	<br>
	<input type="submit" name="delete" value="Delete">
	<input type="submit" name="rename" value="Rename">
	</form>
	<?php echo "<a href = '$ahref' >$text Hidden Files</a>"; ?>

</body>
</html>
