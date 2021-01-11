<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
    <title>Proyecto</title>
</head>


<body>
<?php
$mensaje= htmlentities($_GET['msj']);
$c= htmlentities($_GET['c']);
$p= htmlentities($_GET['p']);
$t= htmlentities($_GET['t']);


switch ($c) {
    case 'home':
    $carpeta='';
    break;
   
}

switch ($p) {
  case 'in':
  $pagina ='index.php';
    break;
}


if (isset($_GET['id'])) {
  $id=htmlentities($_GET['id']);

$dir=$carpeta.$pagina.'?id='.$id;
}else{
  $dir=$carpeta.$pagina;
}


if($t=="error"){
  $titulo="Oopss..";
}else{
  $titulo="Buen trabajo" ;
  
}

 ?>



      <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
<script>
  swal({
    title:'<?php echo $titulo ?>',
     text:"<?php echo $mensaje?>",
     type:'<?php echo $t?>',

     confirmButtonColor:'#3085d5',

     confirmButtonText:'OK!'

  }).then(function(){
  location.href='<?php echo $dir  ?>';

  });

$(document).click(function(){
location.href='<?php echo $dir ?>';
});

$(document).keyup(function(e){
  if(e.which==27){
    location.href='<?php echo $dir ?>';
  }
});


</script>



  </body>
</html>
