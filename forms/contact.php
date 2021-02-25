<?php




  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){

    $destinataire = "testdevvictor@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sujet = $_POST['subject'];
    $message = $_POST['message'];

    $name;
    $email;
    $sujet;
    $message2.='
                  <!DOCTYPE html>
                  <html lang="fr">
                  <head>
                    <meta http-equiv="Content-Type" content="text/html">
                      <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                    <title>Mail delivery </title>
                  </head>
                  <body>
                    <table style="border: 4px solid black";>
                      <tr style="background-color:red";>
                        <div class=" text-center container">
                            <td><h1>Vous avez reçu un message de : ' .$name. ' </h1></td>
                        </div>
                      </tr>
                      <tr>
                        <div class=" text-center">
                          <td><h2>Le sujet du mail est : ' .$sujet. ' </h2></td>        
                        </div>
                      </tr>
                      <tr>
                        <div class=" text-center">
                          <td><h3>Son adresse mail : ' .$email. '</h3></td>   
                        </div>
                      </tr>
                      <tr style="border: 2px solid grey";>
                        <div class=" text-center"> 
                          <td><h3>Son message: ' .$message. '</h3></td>
                        </div>
                      </tr>
                    </table>
                  </body>
                  </html>';
                  $headers = "MIME-Version: 1.0" . "\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail ($destinataire,  $sujet, $message2, $headers);
  } else{
    echo 'errooooooooooor';
  }
  header("Location: https://victor-claire.alwaysdata.net/");
?>
