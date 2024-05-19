const displayMovie = async (movieName, year) => {
  try {
    const response = await fetch(`http://www.omdbapi.com/?apikey=e54d2018&t=${movieName}`);
    const data = await response.json();
    setMovie(data);
  } catch (error) {
    console.error('Error fetching the movie data:', error);
  }
};

const setMovie = (data) => {
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
  pGenre.textContent = `Genre: ${data.Genre}`;
  cardBody.appendChild(pGenre);

  const pPlot = document.createElement("p");
  pPlot.classList.add("card-text");
  pPlot.textContent = `Plot: ${data.Plot}`;
  cardBody.appendChild(pPlot);

  movieCard.appendChild(cardBody);
  card.appendChild(movieCard);

  moviesContainer.appendChild(card);
};

displayMovie("birdman+or");
displayMovie("parasite");
displayMovie("soul");
displayMovie("the+silence+of+the+lambs");
displayMovie("Truman+Show");
displayMovie("V+for+Vendetta");
displayMovie("tenet");
displayMovie("inception");
displayMovie("joker");
