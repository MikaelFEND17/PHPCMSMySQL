<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Övningar - Lektion 2</title>
</head>
<body>

<?php

/*
1.
Skapa dessa 6 olika variabler lägg ihop dem enligt instruktionerna nedan och echoa ut resultatet, diskutera med en klasskamrat och försök komma fram till varför vi får det resultat vi får. Svar finns under lösningsförslag. Litet exempel på hur dynamiskt typade språk fungerar!
$firstName = "5Jesper";  //new name law since this summer, probably valid name
$lastName = "Gormy";
$age = "42";
$z_index = 999;          // I'm in front of you
$is_human = true;        // 🤖?
$is_a_chair = false;     //don't label me!
Multiplicera $age med $z_index
Dividera $z_index med $is_a_chair;
Dividera $z_index med $is_human;
Multiplicera $is_human med $z_index;
Addera $lastName med $age;
Addera $firstName med $z_index;
Multiplicera $lastName med $is_human;

2.
Vilka av nedanstående alternativ sparar en sträng på rätt sätt och varför? Varför funkar inte de alternativ som inte fungerar?:
$_message = 'These are not the potatotes you're looking for';
$1message = "These are not the potatoes you're looking for";
$message = "These are not the potatoes you're looking for";
$jävla_skit = "These are not the potatoes you're looking for";
$Message1 = 'These are not the potatoes you\'re looking for';


3.
Skriv ett PHP-program där du har ett valfritt tal. Du ska med echo skriva ut vad resten blir från talet när du delar talet med 2. Resten av divisionen fås när talet beräknas med modulo 2 (%). Lagra resultatet i en ny variabel $result och skriv ut denna variabel enligt exemplet nedan: exempel på hur det ska skrivas ut Värde: 10 Resten av talet % 2 är: 0 Värde: 5 Resten av talet % 2 är: 1

if/else

1.
Skapa en variabel vid namn $has_heading som innehåller värdet true eller false. Om värdet är true så ska en <h1>-tagg skrivas ut, annars ska inte en <h1>-tagg skrivas ut.

2.
Går så att föregående kod istället gör ett val så att den antingen skriver ut <h1>-tagg eller en <p>-tagg. Om värdet är true så ska en h1 skrivas ut, om värdet är false så ska en <p>-tagg skrivas ut.

3.
Skapa en variabel $age. Om värdet är under 18 så ska dina sida skriva ut "Den där energidrycken är bara för vuxna unge man!. Annars ska din sida skriva ut "500kr tack"

4.
Ms. Syntax Error vill ha ett alarm som anger om vattnet kokar eller inte. Hon vill även att man visar när det når 50 grader så att hon är beredd! Om det inte är 50 eller 100 grader så skall det endast säga att det inte kokar.

Ange hur många grader vattnet är i en variabel.
Om vattnet är 100 grader skriv ut: "Vattnet kokar!"
Om vattnet är 50 grader skriv ut: "Det är halvägs nu!"
Annars skriv ut: "Vattnet kokar inte!"

5.
Boolean gillar att bada, dock tar vattnet ibland slut hemma och dessutom kan värmen variera ganska mycket. Skriv i PHP ett program som kollar om det finns vatten och om det är tillräckligt varmt. Tips du kan ha en if-sats inuti en annan if-sats.

Läs in om det finns vatten (true / false)
Läs in hur många grader vattnet är.
Om det finns vatten och det är varmare än 30 grader skriv ut: ”Varsågod och bada!”
Om det INTE finns vatten eller det är kallare än 30 grader skriv ut: ”Det går inte att bada.”_

6.
Vi bestämmer oss för att ta sovmorgon och echoar ut att vi tar sovmorgon om det är en helgdag $weekend eller om vi har semester $vacation.

7.
Skriv ut "Gå upp, gå till jobbet, jobba, jobba, äta lunch" om variabeln $age är mellan 18 och 65. Om den är under 18 så skriv ut "EFTERFEST!". Om den är över 65 skriv ut "mmm, finska pinnar.".

8.
Iffy äger ett stall med hästar av typerna A-ponny, B-ponny och C-ponny**. Iffy ska för första gången anordna en tävling. Tävlingsreglerna är följande: För att få tävla måste man fyllt 12 år. För att få tävla på A-ponny måste man väga under 30kg, B-ponny under 50kg och C-Ponny under 65kg.

Läs in användarens ålder med en variabel.
Om åldern är under 12 år så:
Skriv ut: ”Du är för ung för att tävla!”
Om åldern inte är under 12 år så
Läs in användarens vikt från variabel
Om vikten är under eller lika med 30kg skriv ut: ”A-ponny”
Om vikten är under eller lika med 50kg, och över 30kg skriv ut ”B-ponny”
Om vikten är under eller lika med 65kg och över 50kg skriv ut ”C-ponny”
Om vikten är över 65kg skriv ut ”Det finns inga ponnys för denna viktklass”*/

?>
    
</body>
</html>