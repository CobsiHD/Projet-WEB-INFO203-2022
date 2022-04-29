<?php
function create_auth($conn,$log,$pwd){
	$sql="INSERT INTO `authentification`(`login`, `password`) values ('$log', '$pwd')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ;
}
function select_auth($conn,$log){
	$sql="SELECT * FROM `authentification` WHERE login='$log'";
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
};
function update_auth($conn, $log, $pwd){
	$sql="UPDATE `joueur` set `nom`='$nom', `prenom`='$prenom', `pays`='$pays', `rang`=$rang WHERE `id`=$id" ;
	$ret=mysqli_query($conn, $sql) ;
        return $ret ; 
}
function delete_auth($conn, $log){
	$sql="DELETE FROM `joueur` WHERE `id`=$id" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}
?>