<?php
$advertencia = "lo lograste! C:";
$url="../index.html";
if(!file_exists("usuario.txt"))
{
  file_put_contents("usuario.txt","");
}
if(!isset($_GET['check'])){
  $advertencia = "acepta los terminos y condiciones >:C";
  $url="../nuevo.html";
}
else{
  if(isset($_GET['usuario'])&&isset($_GET['pswd1'])&&isset($_GET['pswd2'])) {
  
  $usuario=$_GET['usuario'];
  $pswd1=$_GET['pswd1'];
  $pswd2=$_GET['pswd2'];
  $che=$_GET['check'];

  if($pswd1==$pswd2){
     if($che=="on"){
  $texto=$usuario."\n".$pswd1."\n".$pswd2."\n".$che;
  file_put_contents("usuario.txt",$texto);
    }
  }
    else{
            $advertencia="las contaseñas no coinciden >:C";
            $url="../nuevo.html";
        }
}
}

?>

<HTML>
  <head>
  <title>php test </title>
    <meta http-equiv="refresh" content="3; url=<?php echo $url;?>">
  </head>
  <body>
    <p><?php echo $advertencia;?> </p>
  </body>
  </HTML> 