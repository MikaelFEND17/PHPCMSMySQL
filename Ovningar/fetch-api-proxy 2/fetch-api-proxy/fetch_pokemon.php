<?php

$response = file_get_contents('http://pokeapi.co/api/v2/pokemon/' . $_GET["pokemon"]);
echo $response;
