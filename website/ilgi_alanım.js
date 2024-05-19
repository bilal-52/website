function displaymovie(moviename, year) {
  const request = new XMLHttpRequest();
  request.open("GET", "http://www.omdbapi.com/?apikey=e54d2018&t=" + moviename);
  request.send();

  request.addEventListener("load", function () {
    const data = JSON.parse(this.responseText);
    setMovie(data);
  });
}
function setMovie(data) {
  const moviesContainer = document.querySelector(".movies");

  const card = document.createElement("div");
  card.classList.add("col-md-3", "col-lg-4");

  const movieCard = document.createElement("div");
  movieCard.classList.add("card_movie");

  const img = document.createElement("img");
  img.src = data.Poster;
  img.alt = data.Title;
  img.classList.add("card-img-top");
  movieCard.appendChild(img); 

  const cardBody = document.createElement("div");
  cardBody.classList.add("card-body");

  const h5 = document.createElement("h5");
  h5.classList.add("card-title");
  h5.textContent = data.Title;
  cardBody.appendChild(h5);

  const pGenre = document.createElement("p");
  pGenre.classList.add("card-text");
  pGenre.textContent = "Genre: " + data.Genre;
  cardBody.appendChild(pGenre);

  const pPlot = document.createElement("p");
  pPlot.classList.add("card-text");
  pPlot.textContent = "Plot: " + data.Plot;
  cardBody.appendChild(pPlot);

  movieCard.appendChild(cardBody);
  card.appendChild(movieCard);

  moviesContainer.appendChild(card);
}

displaymovie("birdman+or");
displaymovie("parasite");
displaymovie("soul");
displaymovie("the+silence+of+the+lambs");
displaymovie("Truman+Show");
displaymovie("V+for+Vendetta+");
displaymovie("tenet");
displaymovie("inception");
displaymovie("joker");
