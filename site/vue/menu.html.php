<header class="nav-bar">
		<a href="./?action=accueil"><img src="./images/logo.png" id="img-logo"></a>
		<nav>
			<ul class="nav-area">
				<li><a href="./?action=accueil">Accueil</a></li>
				<?php
					if(isset($_SESSION['username'])){
						if($_SESSION['username'] == "arbitre" || $_SESSION['username'] == "responsable"){
				?>
				<li><a href="./?action=divisions">Divisions</a></li>
				<?php
			}}
				?>
				<?php
					if(isset($_SESSION['username'])){
						if($_SESSION['username'] == "responsable"){
				?>
				<li><a href="./?action=match">Matchs</a></li>
				<?php
					}
				}
				?>
				<li><a href="./?action=contact">Contact</a></li>
			</ul>
		</nav>
		<?php
		if(!isset($_SESSION['username'])){
			echo "<a class=\"btn-area\" href=\"?action=connexion\">Se connecter</a>";
		} else{
			echo "<a class=\"btn-area\" href=\"controleur/logout.php\">Se déconnecter</a>";
		}
		?>
</header>