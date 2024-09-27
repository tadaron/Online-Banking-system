<!-- Authors:
     Rashid Feroz [rashid.2008feroz@gmail.com]
     fb - facebook.com/rashid.feroz1
     website - www.hackwhiz.com

     Kuldeep kumar [kuldeepanditkumar@gmail.com]
     fb - facebook.com/kuldeepanditkumar

     Abhimanyu shrivastava [aabhimanyu13@gmail.com]
     fb - facebook.com/abhimanyu.shrivastava.58
     -->

<?php 
if(isset($_REQUEST['submitBtn'])){
    include '_inc/dbconn.php';
    $username=$_REQUEST['uname'];
    
    //salting of password
    $salt="@g26jQsG&nh*&#8v";
    $password= sha1($_REQUEST['pwd'].$salt);
  
    $sql="SELECT email,password FROM customer WHERE email='$username' AND password='$password'";
    $result=mysql_query($sql) or die(mysql_error());
    $rws=  mysql_fetch_array($result);
    
    $user=$rws[0];
    $pwd=$rws[1];    
    
    if($user==$username && $pwd==$password){
        session_start();
        $_SESSION['customer_login']=1;
        $_SESSION['cust_id']=$username;
    header('location:customer_account_summary.php'); 
    }
   
else{
    header('location:index.php');  
}}
?>
<?php 
session_start();
        
if(isset($_SESSION['customer_login'])) 
    header('location:customer_account_summary.php');   
?>

<!DOCTYPE html>

<html>
    <head>
        
        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>    
        
        
        <meta charset="UTF-8">
        <title>Systeme de banque en ligne </title>
        <link rel="stylesheet" href="newcss.css">
    </head>
    <body>
        <div class="wrapper">
            
        <div class="header">
            <img src="header.jpg" height="100%" width="100%"/>
            </div>
            <div class="navbar">
                
            <ul>
            <li><a href="index.php">Accueil </a></li>
            <li><a href="features.php">Fonctionnalitees </a></li>
            <li id="last"><a href="contact.php">Nous contacter </a></li>
            </ul>
            </div>
            
        <div class="user_login">
            <form action='' method='POST'>
        <table align="left">
            <tr><td><span class="caption">Connexion sécurisee</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Nom d'utilisateur:</td></tr>
            <tr><td><input type="text" name="uname" required></td> </tr>
            <tr><td>Mot de passe:</td></tr>
            <tr><td><input type="password" name="pwd" required></td></tr>
            
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
        </table>
                </form>
            </div>
        
        <div class="image">
            <img src="home.jpg" height="100%" width="100%"/>
            <div class="text">
                
                <a href="safeonlinebanking.php"><h3>Cliquez pour lire des conseils bancaires en ligne sécurisés</h3></a>
    <a href="t&c.php"><h3>Termes et conditions d'utilisation</h3></a>
    <a href="faq.php"><h3>FAQ'S</h3></a>
    
    
  </div>
            </div>
            
            <div class="left_panel">
                <p>Notre portail de banque en ligne offre des services bancaires personnels qui vous donnent un contrôle total sur tous vos besoins bancaires en ligne.</p>
                <h3>Fonctionnalittes </h3>
                <ul>
                    <li>Inscription à la banque en ligne</li>
                    <li>Ajouter un compte bénéficiaire</li>
                    <li>Transfert de fonds</li>
                    <li>Dernier enregistrement de connexion</li>
                    <li>Mini Statement</li>
                    <li>ATM and Cheque Book</li>
                    <li>Staff approval Feature</li>
                    <li>Account Statement by date</li>
                    
                    
                </ul>
                </div>
            
            <div class="right_panel">
                
                    <h3>BANQUE PERSONNELLE</h3>
                    <ul>
                        <li>
                        L'application Personal Banking fournit des fonctionnalités pour administrer et gérer les comptes non personnels en ligne.</li>
                        <li>Le phishing est une tentative frauduleuse, généralement effectuée par courrier électronique, appel téléphonique, SMS, etc. visant à obtenir vos informations personnelles et confidentielles.</li>
                        <li>La banque en ligne ou l'un de ses représentants ne vous envoie jamais d'e-mails/SMS ni ne vous appelle par téléphone pour obtenir vos informations personnelles, votre mot de passe ou votre mot de passe SMS à usage unique (haute sécurité).</li>
                        <li>Tout e-mail/SMS ou appel téléphonique constitue une tentative de retirer frauduleusement de l'argent de votre compte via Internet Banking. Ne répondez jamais à un tel e-mail/SMS ou appel téléphonique. Veuillez signaler immédiatement sur le rapport si vous recevez un tel e-mail/SMS ou appel téléphonique. Veuillez verrouiller immédiatement votre accès utilisateur.
</li>
                    </ul>
                </div>
                    <?php include 'footer.php' ?>
