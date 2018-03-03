<?php
	$uploadpath = getcwd();
	if (!(empty($_FILES['uploadedfile'])) && ($_FILES['uploadedfile']['error'] == 0)) 
	{
		$_FILES['uploadedfile']['name'] = renameDuplicatedFiles($uploadpath,$_FILES['uploadedfile']['name']);
		move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $uploadpath.'/'.$_FILES['uploadedfile']['name'] );
		header('Location: index.php');
	
	}


	//rename uploaded files which have already exists name to prevent duplicate them 
	function renameDuplicatedFiles($path , $filename)
	{
		if ($pos = strrpos($filename, '.')) 
		{
			$name = substr($filename, 0 , $pos);
			$ext = substr($filename, $pos);
		}
		else 
		{
			$name = $filename;
		}
		$newpath = $path .'/'.$filename ;
		$newname = $filename;
		$counter = 1 ;
		while (file_exists($newpath)) {
			$newname = $name .'_'. $counter .$ext ;
			$newpath = $path .'/'.$newname;
			$counter++;
		}
		return $newname ;
	}

  ?>