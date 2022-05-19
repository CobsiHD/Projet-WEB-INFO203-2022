<?php
function create_class($conn,$user,$general,$des,$bonneteau,$roulette,$blackjack,$machine_a_sous,$chevaux){
	$sql="INSERT INTO `classements`(`user`, `general`,`des`, `bonneteau`, `roulette`, `blackjack`, `machine_a_sous`, `chevaux`) values ('$user','$general','$des','$bonneteau','$roulette','$blackjack','$machine_a_sous','$chevaux')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ;
}
function select_class($conn,$user){
	$sql="SELECT * FROM `classements` WHERE `user`='$user'";
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
};
function update_class($conn, $user,$general,$des,$bonneteau,$roulette,$blackjack,$machine_a_sous,$chevaux){
	$sql="UPDATE `classements` SET `user`=$user,`general`=$general`des`=$des,`bonneteau`=$bonneteau,`roulette`=$roulette,`blackjack`=$blackjack,`machine_a_sous`=$machine_a_sous,`chevaux`=$chevaux WHERE `user`=$user" ;
	$ret=mysqli_query($conn, $sql) ;
        return $ret ; 
}
function delete_class($conn, $user){
	$sql="DELETE FROM `classements` WHERE `user`='$user'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}
?>