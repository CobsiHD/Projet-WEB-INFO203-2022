<?php
function create_auth($conn,$log,$pwd){
	$sql="INSERT INTO `authentification`(`login`, `password`) values ('$log', '$pwd')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ;
}
function select_auth($conn,$log){
	$sql="SELECT * FROM `authentification` WHERE `login`='$log'";
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
};
function update_auth($conn, $log, $pwd){
	$sql="UPDATE `authentification` set `pwd`='$pwd' WHERE `login`='$log'" ;
	$ret=mysqli_query($conn, $sql) ;
        return $ret ; 
}
function delete_auth($conn, $log){
	$sql="DELETE FROM `authentification` WHERE `login`='$log'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}
?>