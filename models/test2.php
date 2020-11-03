<?php
require_once 'C:/xampp/htdocs/PFE/Models/BD/Connexion.php';
require_once'C:/xampp/htdocs/PFE/Models/BD/gestion_personnel.php';
$id=$_GET['id'];
if(isset($_POST['bloquer'])){
		$gest->valider_pers($id,0);
	}

	if(isset($_POST['debloquer'])){
		$gest->valider_pers($id,1);
	}
	if(isset($_POST['supprimer'])){
		$gest->supprimer($id);
	}
	header('location:' .'../Controller/test_serv.php');