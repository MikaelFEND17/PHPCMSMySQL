<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Övningar - Lektion 4</title>
</head>
<body>

<?php
/*

1 .
Skapa en funktion: multiply, som tar in 2 parametrar. I funktionen, multiplicera dessa nummer med varandra och echo resultatet av multiplikationen. Du får använda vilka namn du vill på parametrarna.
Kalla på din funktion multiply med siffrorna 8,4 som argument
Om du gjort rätt ska du få siffran 32.

2 .
Skapa en funktion som heter calculate och som istället tar 3 parametrar och sedan multiplicerar de två första parametrarna med varandra och delar värdet med den tredje parametern, alltså: param1 * param2 / param3. Funktionen ska sedan echo ut svaret.
Kalla sedan på din funktion med valfria värden.

3 .
Skriv en funktion som heter highest_number som tar två tal som parametrar.
Funktionen ska sedan jämföra vilket av talet som är störst och echo det största talet.
Kalla på din funktion med två valfria värden.

4 . Koden ovan är dock inte optimal. För det mesta vill vi att funktioner endast returnerar värden. En funktions uppgift ska vara att returnera värden så att vi kan återanvända det värdet och sedan forsätta göra mer beräkningar på det. När vi har massa echo på det här sättet blir koden svårare att återanvända så vi vill nu skriva om våra funktioner så att de endast returnerar värden.

Refaktorera dina funktioner som du tidigare skapade:

De två första funktionerna (multiply och calculate) ska returnera det slutgiltiga värdet av beräkningarna. Sedan måste du spara värdena för att sedan använda echo på dem.
Den tredje funktionen highest_number ska returnera det högsta värdet av de två värden som skickas in som parametrar. Om dock värdet inte är ett nummer ska funktionen returnera false och om de båda parametrarna är samma värde ska funktionen returnera "Samma värde"
Spara värdena som returneras på följande sätt:

$multiply_answer = multiply(5,5);
echo $multiply_answer;

5 . Eftersom alla gillar katter så ska vi refaktorera vår Mjau Machine 🙀

Du ska skriva en funktion som ska ha samma funktionalitet som vår ursprungliga Mjau Machine från tidigare övningar men nu i form av en funktion.

6 .

Använd while-loopen du skapade från en av de tidigare uppgiftern. Nummer 5 i 03_loops

Denna loop ska du nu göra om till en funktion som tar 2 parametrar.

Första parametern ska vara siffran som loppen ska räkna ner ifrån, alltså hur många värden funktionen ska gå igenom.
Andra parametern ska vara om funktionen ska skriva ut jämna eller ojämna värden.
7 .

Skriv en funktion som tar 2 parametrar. Parametrarna ska vara två heltal. Funktionen ska multiplicera heltalen utan att använda *-operatorn.

8 . Skriv en funktion som tar in en parameter. Parametern ska vara en string. Funktionen ska sedan returnera strängens längd på detta sätt:

"Strängen du matade in är 14 tecken lång"
9 .

Skapa en funktion som heter convert_string, funktionen ska ta två parametrar. Den första parametern ska vara en sträng som skickas med, typ: "Goodbye World". Den andra parametern som skickas med ska bestämma om strängen ska konverteras till bara stora bokstäver eller bara små bokstäver. Till detta kan man använda hjälpfunktionen: strtolower($string) och strtoupper($string)

10 . Skapa en funktion som tar en parameter, argumentet som skickas in ska vara en sträng. Funktionen ska sedan returnera det sista tecknet i strängen som skickas in.

11 . Skriv en funktion med namnet make_paragraph som skriver ut en sträng som HTML-elementet <p>. Exempel: "hej"_ ska skrivas ut som "<p>hej</p>". Funktionen ska ha en parameter, som är strängen som ska skrivas ut, och den ska inte returnera något bara echoa ut.

12 . Funktionen make_paragraph() är lite begränsad. Tänk om vi vill göra <h1>-taggar? Eller <h2>, <h3> osv. Skriv en ny funktion med namnet make_heading. Funktionen behöver veta strängen som ska skrivas ut och vilken heading det ska vara. Den behöver alltså två parametrar.

13 . Nu har vi två funktioner som vi kan använda för att skapa HTML-paragrafer och headings. Men det blir väldigt många funktioner om vi ska ha en funktion för varje möjligt HTML-element. Vi behöver en funktion som kan göra flera sorters element. Skriv en funktion make_tag som kan göra alla sorters HTML-element.

14 . Förbättra make_tag så att man kan ange inline styles också. (Eller href för länkar) Exempel: <p style="color: hotpink;">Exempeltext</p>

15 . Skriv en funktion som gör om alla nyrader i en sträng till <br>-element. Funktionen ska ta strängen som parameter och returnera en ny sträng. En nyrad i PHP skrivs '\n'.

16 . Skriv en funktion som returnerar en array med slumpade tal. Använd mt_rand() för att göra slumptal. Hur många parametrar behöver funktionen?

17 . Skriv en funktion som gör om en array till en lista i HTML. Använd funktionen make_tag. Exempel: make_list( [1, 2] ) → "<ul> <li>1</li> <li>2</li> </ul>"

18 . Skriv en funktion med namnet capitalize som gör om ett användarnamn till stora bokstäver.

19 . Förbättra funktionen så att den bara gör första bokstaven stor. Tips är att använda substr()

20 . Skriv en funktion som genererar en random färg.

Skriv en funktion som avrundar en float till närmaste heltal med hjälp av typecast.

Exempel: round(3.9) → 3, round(5.5) → 6.
22 . Skriv en funktion som gör om ett decimaltal till en sträng. Strängen ska använda decimalkomma i stället för decimalpunkt. Exempel: float_to_string(75.5) → "75,5".

23 . Skriv en funktion som räknar ut summan av alla tal i en array. Skriv en annan som räknar ut medelvärdet.

24 . Skriv en funktion som tar en sträng som motsvarar en veckodag som parameter och returnerar en siffra. Om strängen är "måndag" ska funktionen returnera 1, "tisdag" ska bli 2 och "söndag" ska bli 7. Funktionen ska fungera oavsett om veckodagen står med små eller stora bokstäver.
*/
?>
    
</body>
</html>