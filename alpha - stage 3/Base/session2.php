<?php

require ("../Engine/SessionManager.php");

$Session = new SessionManager();
$Session->StartSession();
$Session->CreateSession();

$Sess_Status = $Session->GetSession("Login_Status");
$Sess_UserID = $Session->GetSession("Login_ID");
$Sess_Admin = $Session->GetSession("Login_Roles");
$Sess_Cart = NULL;

if($Session->GetSession("Main_Cart") !== NULL){
	$Sess_Cart = $Session->GetSession("Main_Cart");
}
else{
	$Session->AddData("Main_Cart", array());
	$Sess_Cart = array();
}


function LogInDisplay(){
    return '<a class="nav-link" href="Users/Login.php">Login </a>'
    ;
}

function LogOutDisplay(){
    
    return '<a class="nav-link" href="Users/logout.php">Logout </a>'
    ;
}