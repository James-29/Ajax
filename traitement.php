<?php
DEFINE (SERVER, "localhost");
DEFINE (LOGIN, "root");
DEFINE (MDP, "codeurKiFFeur");
DEFINE (BASE, "challenge");

$connect = mysqli_connect(SERVER,LOGIN,MDP,BASE)or DIE("pb de connexion au serveur");
$result = mysqli_query($connect,"SELECT * FROM tabClients WHERE idClient=".$_POST['id']);
while ($data = mysqli_fetch_assoc($result)) {
    echo "Nom de famille : ".$data['clientName']."<br/>Prenom : ".$data['clientFirstName']."<br/>Age : ".$data['clientAge']."<br/>Profession : ".$data['clientJob']."<br/>E-mail : ".$data['clientEmail']."<br/>N°tél. : ".$data[clientPhoneNbr];
}
