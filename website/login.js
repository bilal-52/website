var mailformat = /^[a-z]\d{10}@sakarya\.edu\.tr$/;
function emailV() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("sifreInput").value;
  if (
    email.match(mailformat) &&
    email.substring(0, email.indexOf("@")) === password
  ) {
    if (email.classList.contains("is-invalid")) {
      email.classList.remove("is-invalid");
    }
    email.classList.add("is-valid");
  } else {
    if (email.classList.contains("is-valid")) {
      email.classList.remove("is-valid");
    }
    email.classList.add("is-invalid");
  }
}

function sifreV() {
  var password = document.getElementById("sifreInput").value;
  var email = document.getElementById("email").value; 

  if (password === email.substring(0, email.indexOf("@"))) {
    if (password.classList.contains("is-invalid")) {
      password.classList.remove("is-invalid");
    }
    password.classList.add("is-valid");
  } else {
    if (password.classList.contains("is-valid")) {
      password.classList.remove("is-valid");
    }
    password.classList.add("is-invalid");
  }
}
