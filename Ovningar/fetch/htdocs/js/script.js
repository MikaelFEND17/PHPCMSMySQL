const form = document.getElementById('example_form');

form.addEventListener('submit', function(e) {
  e.preventDefault();
  fetchFromPHP();
});

async function fetchFromPHP(){
  const response = await fetch('handle_form.php?name=jesper');
  const data = await response.text();
  console.log(data);
}