<style>
      body {
    background: radial-gradient(circle at -8.9% 51.2%, rgb(255, 124, 0) 0%, rgb(255, 124, 0) 15.9%, rgb(255, 163, 77) 15.9%, rgb(255, 163, 77) 24.4%, rgb(19, 30, 37) 24.5%, rgb(19, 30, 37) 66%);
    overflow-x: hidden;
    background-position: center top;
    background-size: 100% auto;
   
      }
      h1{
        color: white;
        text-align : center;
      }
      h3{
        color: white;
        text-align : left;
        justify-content : left;
        display : flex;
        font-size : 3vh;
      }
      p{
        color: white;
        text-align : left;
      }
      .finish {
        color: #83F52C;
        text-align : left;
      }
      .second {
        color : #FFFFB1; 
        text-align : left;
      }

    .bubble h2, .bubble h3 {
         color: #fdfd96; /* couleur claire pour les titres */
         font-size: 3.4vh;
           }
    .bubble p {
        color: #ffffff; /* couleur pour le contenu */
        font-size: 2.4vh;
             }
      .textexo{
        color: #fdfd96;
        text-align : left;
        display: flex;
        justify-content : left;
        padding-top: 0px;
        padding-right : 100px;
        font-size: 2.4vh;
      }
      .spanexo{
        color: green;
        text-align : left;
        font-size : 3vh;
        padding-right : -10vh;
        margin-right : 200vh;
      }
      .textexo3{
        color: white;
        text-align : left;
        font-size: 2.4vh;
      }
      .textzarbi {
        color: #fdfd96;
        text-align : left;
        font-size: 2.4vh;

      }
      .bubble {
    background-color: #222222; /* couleur foncée */
    padding: 20px;
    border-radius: 25px;
    margin: 60px;

    width: 1650px;
    height: auto;
    box-shadow: 10px 10px 5px #211f1f;
    display: run-in;
    text-align: center;
    padding: 20px;
    justify-content : center;
    align-items: center;
    transition: all 0.2s ease-in-out; /* animation de transition */
    padding-left : 100px;
    padding-top : 20px;
  }
  /* animation de hover */
  .bubble:hover {
    transform: scale(1.01); /* agrandissement de 5% */
    box-shadow: 15px 15px 8px #211f1f; /* ombre plus prononcée */
  }
  .hello {
font-size: 5vh;
text-align: center;
color: grey;
padding-left : 825px;
  }
    </style>
<br>


<?php
echo '<span class=hello>Hello World</span>'
?>  
<div class="bubble">
<h1> <u>Première partie Ex</u> </h1>
<h3> Exercice 1</h3>
   
<?php
$quantite = '<p class=textexo>"350"</p>';
$variable = '<p class=textexo>Je mappelle Mathieu</p>';
echo '<p class=textexo>Pablo escobar a environ</p>';
echo $quantite;
echo '<p class=textexo>liasses sous son matelas</p>';
?>
</div> 
<div class="bubble">
<br> <h3> Exercice 2 </h3>

<?php

$fullname = "<p class=textexo>Mathieu Nebra</p>";
$email = '<p class=textexo>mathieu.nebra@exemple.com</p> ';
$userAge = "<p class=textexo>55</p>";

echo '<p class=textexo>voici les informations du compte suivant :</p>';

echo "<p class=textexo>$fullname $email $userAge</p>";


?> 
</div>
<div class="bubble">
<br> <h3> Exercice 3 </h3>

<?php

$km = 1 ;
echo "<p class=textexo>$km</p> ";

$km = 3 ;
echo "<p class=textexo>$km </p>";

$km = 125 ;
echo "<p class=textexo>$km </p>"


?> 
</div>
<div class="bubble">
<br> <h3> Exercice 4</h3>
<?php
$string = "string";
$int = 17;
$float = 57.252432;
$bool = true;
$null = null;
$array = [];
echo "<p class=textexo>$string $int $float $bool $null ceci est un test</p>"

?>
</div>
<div class="bubble">
<br> <h3> Exercice 5</h3>
<?php 
$int = null;
echo "<p class=textexo>int est égal à : $int .</p>";
$int = 1;
echo " <p class=textexo> int est égal à : $int .</p>";
?>
</div>
<div class="bubble">
<br> <h3> Exercice 6</h3>
<?php 
$name = "Jean" ;
echo "<p class=textexo>Bonjour $name comment vas tu?</p>";
?>
</div>
<div class="bubble">
<br> <h3> Exercice 7</h3>
<?php 
$firstname = "Jean" ;
$firstname2 = "Valjean" ;
$age = 26;
echo "<p class=textexo>Bonjour $firstname $firstname2 comment vas tu? Tu as $age ans</p>";
?>
</div>
<div class="bubble">
<br> <h3> Exercice 8</h3>
<?php 
$op1 = 3+4;
$op2 = 5*20;
$op3 = 45/5;
echo "<p class=textexo>OP1 = $op1 OP2 = $op2 OP3 = $op3</p>"
?>
</div>
<div class="bubble">
<h1> <u>Deuxième partie Ex</u> </h1>
<h3> Exercice 1</h3>
<?php
$age = 19;

if ($age > 18) {
    echo "<p class=textexo>Vous êtes autorisé(e) à accéder au site ✅</p>";
}
else {
    echo "<p class=textexo>Accès refusé ❌ </p>";
}
?>
</div>
<div class="bubble">
<br> <h3> Exercice 2</h3>

<?php
$isEasy = false;
if ($isEasy == true) {
    echo "<p class=textexo>EZ</p>";
}
if ($isEasy == false) {
    echo "<p class=textexo>NO EZ</p>";
}


?> 
<br>
<?php
$isEnabled = true;
if ($isEnabled) {
    echo ('<p class=textexo>OUAIS</p>');
} else {
    echo ('<p class=textexo>NANN</p>');
}
?>

</div>
<div class="bubble">
<br> <h3> Exercice 3</h3>


<?php

$age = 112;
$sexe = "<p class=textexo>femme</p>";




$agerep = "vous êtes majeur";
if ($age <= 18) {
    $agerep = "vous êtes mineur";
}

$sexeX = "homme";
if ($sexe === "femme") {
    $sexeX = "femme";
}

echo("<p class=textexo>Vous êtes un $sexeX  et  $agerep </p>");

?>
</div>
<div class="bubble">
<br> <h3> Exercice 4</h3>
<?php

$richter = 9;
switch ($richter) {
    case 1:
        echo("<p class=textexo>Micro-séisme impossible à ressentir.</p>");
        break;
    case 2:
        echo("<p class=textexo>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>");
        break;
    case 3:
        echo("<p class=textexo>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>");
        break;
    case 4:
        echo("<p class=textexo>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>");
        break;
    case 5:
        echo("<p class=textexo>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>");
        break;
    case 6:
        echo("<p class=textexo>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p>");
        break;
    case 7:
        echo("<p class=textexo>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>");
        break;
    case 8:
        echo("<p class=textexo>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>");
        break;
    case 9:
        echo("<p class=textexo>Séisme capable de tout détruire sur une très vaste zone.</p>");
        break;
    default:
        echo("<p class=textexo>Valeur inconnue");
}

?>
</div>
<div class="bubble">
<br> <h3> Exercice 5</h3>

<?php
$gender = "Homme";

if($gender != "Homme") {
echo('<p class=textexo>C\'est une développeuse !!!</p>');
}
else {
echo('<p class=textexo>C\'est un développeur !!!</p>');
}

?>
</div>
<div class="bubble">
<br> <h3> Exercice 6</h3>

<?php
$age = 11;

if($age >= 18) {
echo('<p class=textexo>Tu es majeur</p>');
}
else {
echo('<p class=textexo>Tu n\'es pas majeur</p>');
}
?>
</div>
<div class="bubble">
<br> <h3> Exercice 7</h3>

<?php
$isOk = true;

if($isOk == false) {
echo('<p class=textexo>c\'est pas bon !!!</p>');
}
else {
echo('<p class=textexo>c\'est ok !!</p>');
}
?>
</div>
<div class="bubble">
<br> <h3> Exercice 8</h3>

<?php
$isOk = true;

if($isOk) {
echo('<p class=textexo>c\'est pas bon !!!</p>');
}
else {
echo('<p class=textexo>c\'est ok !!</p>');
}
?>
</div>



<div class="bubble">
<h1> <u>Troisième partie Ex</u> </h1>
<h3> Exercice 1</h3>
<?php
for($banger = 0; $banger <= 10; $banger++) {
    echo("<p class=textexo3>$banger</p>");
}

$banger = 0;
while($banger < 10) {
    echo("<p class=second> Boucle while : $banger</p>");
    $banger++;
}

do {
    echo("<p class=finish>$banger</p>");
    $banger++;
} while ($banger < 10);

?>
</div>
<div class="bubble">
<h3> Exercice 2</h3>


<?php
$first = 0;
$second = 5;

while ($first <= 20) {
    $result = $first * $second;
    echo "<p class=textexo3> $result </p> <p class=second>(valeur first = $first)</p>";
    $first++;
}
?>
</div>
<div class="bubble">
<h3> Exercice 3</h3>
<?php
$first = 100;
$second = 2;

while ($first >= 10) {
    $result = $first * $second;
    echo "<p class=textexo3> $result </p> <p class=second>(valeur first = $first)</p>";
    $first--;
}
?>
</div>
<div class="bubble">
<h3> Exercice 4</h3>

<?php
$first = 1;

while ($first < 10) {
    echo "<p class=textexo3> $first </p>";
    $first += $first/2;
}
?>
</div>
<div class="bubble">
<h3> Exercice 5</h3>

<?php
for ($i = 1; $i <= 15; $i++) {
    echo "<p class=textexo3> On y arrive presque boucle for</p> <p class=second>(valeur i = $i)</p>";
}
?>

<?php
$i = 1;
while ($i <= 15) {
    echo "<p class=textexo3> On y arrive presque en while</p> <p class=second>(valeur i = $i) </p>";
    $i++;
}
?>
</div>
<div class="bubble">
<h3> Exercice 6</h3>

<?php
for ($i = 20; $i >= 0; $i--) {
    echo "<p class=textexo>C'est presque bon (valeur i = $i)</p>";
}
?>
</div>
<div class="bubble">
<h3> Exercice 7</h3>

<?php
for ($i = 1; $i <= 100; $i += 15) {
    echo "<p class=textexo> On tient le bon bout  (valeur i = $i)</p>";
}
?>
</div>
<div class="bubble">
<h3> Exercice 8</h3>
<?php
for ($i = 200; $i >= 0; $i -= 12) {
    echo "<p class=textexo> Enfin !!!! (valeur de i = $i)</p>";
}
?>
</div>


<div class="bubble">
<h1> <u>Quatrième partie Ex</u> </h1>
<h3> Exercice 1</h3>

<?php

function returnTrue() {
    return true;
}
echo '<span class="spanexo">' . returnTrue() . '</span>';

?>


<h3> Exercice 2</h3>

<?php
$str= "ERROR PLEASE RETRY";
function returnStringWithClass($str, $class) {
    return "<p class='$class'>".$str."</p>";
}
echo returnStringWithClass($str, "textzarbi");
?>

<h3> Exercice 3</h3>

<?php
$str1 = "J'aime les ";
$str2 = "animaux";
function associerstring($str1, $str2, $class) {
    $result = $str1 . $str2;
    return "<p class='$class'>".$result."</p>";
}
echo associerstring($str1, $str2, "textzarbi");
?>
<h3> Exercice 4</h3>
<?php

$num1= rand(0, 100);
$num2= rand(0, 100);
function comparerchiffre($num1, $num2, $class) {
    if ($num1 > $num2) {
        return "<p class='$class'>Le premier nombre est plus grand</p>";
    } elseif ($num1 < $num2) {
        return "<p class='$class'>Le premier nombre est plus petit</p>";
    } else {
        return "<p class='$class'>Les deux nombres sont identiques</p>";
    }
}
echo comparerchiffre($num1,$num2, 'textzarbi');
echo "<p class=finish> En prenant compte que Num1 = $num1 et Num2 = $num2 </p>"; 

?>

<h3> Exercice 5</h3>
<?php
function exo5($num, $str, $class) {
    $result = (string)$num . $str;
    return "<p class='$class'>".$result."</p>";
}
echo exo5(5, " sont pourtant bien rangées", "textzarbi");
?>
<h3> Exercice 6</h3>
<?php
function bonGars($nom, $prenom, $age, $class) {
    $result = "Bonjour " . $prenom . " " . $nom . ", tu as " . $age . " ans.";
    return "<p class='$class'>".$result."</p>";
}
echo bonGars("Dragibus", "Marie", 32, "textzarbi");
?>

<h3> Exercice 7</h3>

<?php
function ageAndGender($age, $gender) {
    
    if ($gender == 'Homme') {
        if ($age >= 18) {
            echo '<p class="textzarbi">Vous êtes un homme et vous êtes majeur</p>';
        } else {
            echo '<p class="textzarbi">Vous êtes un homme et vous êtes mineur</p>';
        }
    } elseif ($gender == 'Femme') {
        if ($age >= 18) {
            echo '<p class="textzarbi">Vous êtes une femme et vous êtes majeur</p>';
        } else {
            echo '<p class="textzarbi">Vous êtes une femme et vous êtes mineur</p>';
        }
    } else {
        echo '<p class="textzarbi">Invalid Gender</p>';
    }
}
        echo ageAndGender(48, 'Femme');
?>

<h3> Exercice 8</h3>

<?php
function sumNumbers($num1 = 0, $num2 = 0, $num3 = 0) {
    $sum = $num1 + $num2 + $num3;
    echo '<p class="textzarbi">La somme des nombres est ' . $sum . '</p>';
}
echo sumNumbers(48, 48, 4);
?>

</div>
<div class="bubble">
<h1> <u>Dernière partie Ex</u> </h1>
<h3> Exercice 1/2</h3>
<?php
$months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
foreach ($months as $month) {
    echo '<p class="textexo">' . $month . '</p>';
}
echo "<p class=spanexo><br> $months[2] </p>";
echo "<p class=spanexo><br> $months[4] </p>";
?>
<h3> Exercice 4</h3>
<?php

$months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
$months[7] = "août";
print_r($months);

?>

<h3> Exercice 5/6</h3>

<?php
$departments = array(
    59 => "Nord",
    62 => "Pas-de-Calais",
    80 => "Somme",
    60 => "Oise",
    02 => "Aisne"
);
print_r($departments);
echo "<p class=spanexo><br>$departments[59]</p>";
?>


<h3> Exercice 7</h3>
<?php
$departments[51] = "Marne";
print_r($departments)
?>
<h3> Exercice 8
    <?php
    $months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
    $length = count($months);
    for($i=0; $i<$length; $i++){
        echo "<p class=textexo> $months[$i] </p><br>";
    }
    ?>
</h3>

<h3> Exercice 9</h3>
<?php
foreach($departments as $value) {
    echo "<p class=textexo>$value</p><br>";
}
?>
<h3> Exercice 10
<?php
$departments = array(
    59 => "Nord",
    62 => "Pas-de-Calais",
    80 => "Somme",
    60 => "Oise",
    02 => "Aisne"
);
foreach($departments as $key => $value) {
    echo "<p class=textexo> Le département " . $value . " a le numéro " . $key . "<br>";
}
?>
</h3>