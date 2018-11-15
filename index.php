<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>

 <?php
 $isEasy = 0;
 //settype definir le type de variable
  settype($isEasy, "bool");
 if ($isEasy == true)
{
   echo "c'est facile!!";
}
// sinon si votre age est superieur ou egal a 18 alors vous etes majeur
else
{
   echo "faux";
}
// sinon vous n'avez pas du rentré votre age car la variable ne contient pas de nombre


?>
</body>
</html>
