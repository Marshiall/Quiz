<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz
</title><style>
#czas{
    border:solid, black, 2px;
    height:20px;
    width:500px;

}
#dodanie_pytań{
    width:15%;
}



</style>
</head>
<body>
 <?php  
 echo "<pre>";
 print_r($_POST);
 echo "</pre>";
 //zrobione przez Marcela Bernacikowskiego
//wartości
$dodaj_pytanie_error = "";


       
//nawiązanie połączenia
$connection = mysqli_connect("localhost","root","","quiz");

if(mysqli_connect_errno()){
    echo "Failed connection" . mysqli_connect_error();
    exit;
}else{
    //dodawanie rekordów
    if(isset($_POST['submit'])){
        if(!empty($_POST['odp']) && !empty($_POST['pytanie']) && !empty($_POST['odp1']) && !empty($_POST['odp2']) && !empty($_POST['odp3']) && !empty($_POST['odp4'])){
            $dodaj_pytanie_error = "Uzupełnij formularz";
           $insertsql = "INSERT INTO quiz_list (pytanie, odp1, odp2, odp3, odp4, odp) VALUES ('".$_POST['pytanie']."', '".$_POST['odp1']."', '".$_POST['odp2']."', '".$_POST['odp3']."', '".$_POST['odp4']."', '".$_POST['odp']."')";
            
           $result = mysqli_query($connection, $insertsql);

           if($result){
               echo "Dodane prawidłowo";
           } else {
               echo "Błąd dodawania rekordu";
           }

        } else {
            echo "Wypełnij oba pola";
        }
    }
}






?>


<form method="post">
<legend>Podaj imie</legend>
<input type="text" name="imie" value="">
<legend><br><br></legend>
<fieldset id="dodanie_pytań">

<legend>Podaj pytanie</legend>
<input type="text" name="pytanie">
<legend>Podaj odp1</legend>
<input type="text" name="odp1">
<legend>Podaj odp2</legend>
<input type="text" name="odp2">
<legend>Podaj odp3</legend>
<input type="text" name="odp3">
<legend>Podaj odp4</legend>
<input type="text" name="odp4">
<legend>Podaj poprawną odp</legend>
<select name="odp" id="">
<option value="odp1" <?php
if(!empty($_POST['odp']) && $_POST['odp'] === "odp1"){echo "selected";}
?>>odp1</option>
<option value="odp2" <?php
if(!empty($_POST['odp']) && $_POST['odp'] === "odp2"){echo "selected";}
?>>odp2</option>
<option value="odp3" <?php
if(!empty($_POST['odp']) && $_POST['odp'] === "odp3"){echo "selected";}
?>>odp3</option>
<option value="odp4" <?php
if(!empty($_POST['odp']) && $_POST['odp'] === "odp4"){echo "selected";}
?>>odp4</option><legend>   </legend>
<input type="submit" name="submit" value="wyślij">
<?php echo $dodaj_pytanie_error ?>
</form>
</fieldset>




















</body>
</html>