<?php 
	session_start();
	ob_start();
	if (isset($_REQUEST['delete'])) 
	{

		foreach ($_REQUEST['selectedfiles'] as $file) 
		{
			if (isset($file)) 
			{
				if (unlink($file)) 
				{
					$_SESSION['msg'] = "<p class = 'success'> Your File Deleted Successfuly ^_^ </p>";
				}
				else
				{
					$_SESSION['msg'] = "<p class = 'fail'> Can't Delete File: Plz Try Again ! </p>";
				}
				header('Location:index.php');
			}
		}
	}

	if (isset($_GET['rename'])) 
	{
		$oldnames = $_GET['selectedfiles'];
		$newnames = array_filter($_GET['newnames']);
		$diff = count($oldnames) - count($newnames);
		if ($diff == 0) 
		{
			$i = 0;
			foreach ($newnames as $newname) 
			{
				$finalnewnames[$i] = $newname;
				$i++;
			}
			for ($i=0; $i < count($oldnames); $i++) 
			{
				rename($oldnames[$i], $finalnewnames[$i]); 
			}
			$_SESSION['msg'] = "<p class = 'success'> Your File Renamed Successfuly ^_^ </p>";
		}
		else
		{
			$_SESSION['msg'] = "<p class = 'fail'> Can't Rename Files: Plz Enter Number Of Names Equal To Number Of Selected Files ! </p>";

		}
		header('Location: index.php');
	}

 ?>