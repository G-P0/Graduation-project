<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ciphers</title>
        <style>
            body{text-align: center; width: 60%; padding-left: 20%; padding-top: 3%}
            fieldset{background:#EEE;padding:5px;margin-bottom:5px;border:1px solid #CCC width: 50%;}
            legend{background:#FFF;border:1px solid #CCC;padding:5px}
            .mypic{border-radius: 100%; width: 200px; height:200px;}
        </style>
    </head>
    <body>
            <fieldset>
                    <legend>Ciphering Tecniques</legend>
                    <img src="image.jpg" class="mypic">
                	<br><br>
                    <form method="post" action="">    
                        Message: <input type="text" name="msg" placeholder="Enter Your Message" required>
                    	<br><br>
                        Key: <input type="text" name="key" placeholder="Enter The Key" required>
                    	<br><br>
                        Select Cipher Technique Plz: 
                        <select name="type" id="">
                            <option value="ceaser">Ceaser</option>
                            <option value="playfair">PlayFair</option>
                            <option value="des">DES</option>
                        </select>
                    	<br><br>
                        Select Method Plz: <br>
                        Encryption <input type="radio" name="method" value="encrypt" required>
                        Decryption <input type="radio" name="method" value="decrypt" required>
                    	<br><br>
                        <input type="submit" name="submit" value="Do it !">
                    </form>
            </fieldset>
    </body>
</html>
<?php
if (isset($_POST['submit'])) 
{
	if ($_POST['type'] == 'ceaser') 
	{
		if ($_POST['method'] == 'encrypt') {
			include 'models/ceaserEncryption.php';
		}
		elseif ($_POST['method'] == 'decrypt') {
			include 'models/ceaserDeccryption.php';
		}
	}
	if ($_POST['type'] == 'playfair') 
	{
		if ($_POST['method'] == 'encrypt') {
			include 'models/playfairEncryption.php';
		}
		elseif ($_POST['method'] == 'decrypt') {
			include 'models/playfairdecryption.php';
		}
	}
    if ($_POST['type'] == 'des') 
    {
        if ($_POST['method'] == 'encrypt') {
            include 'models/desencryption.php';
        }
        /*elseif ($_POST['method'] == 'decrypt') {
            include 'models/playfairdecryption.php';
        }*/
    }
}	

?>