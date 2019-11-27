<!DOCTYPE html>
<html>
	<head>
		<title>Salut</title>
		<meta charset="utf-8" />
		<link href="presentation.css" rel="stylesheet">
	</head>
	<body>
		<?php
		//partie 1//
		echo "Bonjour le monde <BR/>"; 
		//partie 2//
		$texte="Salut";	
		for($i = strlen($texte)-1;$i>=0;$i--){
			echo $texte[$i];
		}
		echo "<BR/>";
		//partie 3//
		$couleur=true;
		for($j =0;$j<strlen($texte);$j++){
			if($couleur==true){
				echo "<span class='red'>$texte[$j]</span>";
				$couleur=false;
			}else{
				echo "<span>$texte[$j]</span>";
				$couleur=true;
			}
		}
		//partie 4//
		$clé = array("Rodez","Montpelier","Toulouse","Limoges","Paris");
		$valeur = array("https://www.ville-rodez.fr/","https://www.montpellier.fr/","https://www.toulouse.fr/"
						,"https://www.limoges.fr/fr","https://www.paris.fr/");

		$index =array_rand($clé);
		echo "<BR/> Mes prochains voyage seront à <a href='$valeur[$index]' >$clé[$index]</a>";			
		//partie 5//
		?>
		<TABLE>
			<?php
			$result=1;
			for($l=0;$l<=9;$l++){
				echo "<TR>";
				for($m=0;$m<=9;$m++){
					$result=$m*$l;
					if($m==0 & $l==0){
						echo "<TD>X</TD>";
					}else if($l==0){
						echo "<TD class='fond'>$m</TD>";
					}else if($m==0){
						echo"<TD class='fond'>$l</TD>";
					}else if($m==$l){
						echo"<TD class='fond'>$result</TD>";
					}else{
						echo"<TD>$result</TD>";
					}

				}
				echo "</TR>";
			}
			?>
		</TABLE>
	</body>
</html>
