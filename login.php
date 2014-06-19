<?php
  $mensaje = " ";
  if (isset($_GET["error"])) 
  {
  	$error =$_GET ["error"];
  	if ($error <> "")
  	{
  		switch ($error) 
  		{
  			case '1':
  			   echo "El usuario no existe";
  				break; 
  			case '2':
  			   echo "La contrasena no existe";
  				break;	
  			case '3':
  			   echo "Debe logearse para poder entrar";
  				break;	
  			case '4':
  			   	echo "Se ha registrado, gracias. Ahora entre";
  				break;		
  		}
  	}
  } 
  else 
  {
  	$error ="";
  }
?>

<!doctype html>
<html>  
	<body> 
	  <center>
		<form action="validarlogin.php" method="post" name="login">
		<center>
          <h1>WELCOME...</h1>
        </center>
		   
			<TABLE CELLSPACING="15">
			
				<tr> 
					<td>
					  <img src="homero.gif">
						<b>
							<center>
								<h2>Usuario</h2>
								<input name="txtusuario" id="txtusuario" value="" type="text">
							</center>
						</b>
					</td>
				</tr>
				<tr> 
					<td>
						<b>
							<center>
								<h2>Password</h2>
								<input type="password" name="txtpass" id="txtpass" value="" id="Password">
							</center>
						</b>
					</td>
				</tr>
				<tr>
					<td>
						<center>
							<input type="submit" name="Entrar"><right> <a href="registro.php">ingresar</a>
						</center>
					</td>
				</tr>
			</table>
		</form>
		</center>
	</body>
</html>