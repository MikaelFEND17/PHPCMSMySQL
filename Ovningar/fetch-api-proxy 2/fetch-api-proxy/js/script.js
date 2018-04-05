const form = document.getElementById('example_form');

form.addEventListener('submit', function(e) {
  e.preventDefault();
  const ageInput = 25;
  const postData = new FormData(this);
  postData.append('age', ageInput);
  fetchFromPHP(postData);
});

async function fetchFromPHP(body){
  /// x-www-form-urlencoded 
  const response = await fetch('handle_form.php',{
    method: 'POST',
    body: body
  });
  const data = await response.json();
  console.log(data);
}

async function fetchPokemon(){
  const response = await fetch('fetch_pokemon.php?pokemon=25');
  const pokemon = await response.json();
  console.log(pokemon);
}

fetchPokemon();











