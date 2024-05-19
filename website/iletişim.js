function validate() {
  var email = document.getElementById("email").value;
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var gender = document.querySelector('input[name="gender"]:checked');
  var subject = document.getElementById("subject").value;
  var message = document.getElementById("message").value;
  var city = document.getElementById("inputState").value;
  var birthDate = document.getElementById("birthDate").value;

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (name === "") {
    alert("İsim eksik!");
    return false;
  }

  if (phone === "") {
    alert("Telefon eksik!");
    return false;
  } else if (!/^\d{11}$/.test(phone)) {
    alert("Telefon numarası yanlış!");
    return false;
  } else if (!/^05/.test(phone)) {
    alert("Telefon numarası yanlış!");
    return false;
  } else if (isNaN(phone)) {
    alert("Telefon numarası yanlış!");
    return false;
  }

  if (!gender) {
    alert("Cinsiyet seçilmemiş!"); 
    return false; 
  }
  if (city === "Seçin...") {
    alert("Şehir seçilmemiş!");
    return false;
  }

  if (birthDate === "") {
    alert("Doğum tarihi girilmedi!");
    return false;
  }

  if (subject === "") {
    alert("Konu eksik!");
    return false;
  }

  if (message === "") {
    alert("Mesaj eksik!");
    return false;
  }

  if (email === "") {
    alert("Email Eksik!");
    return false;
  } else {
    if (email.value.match(mailformat)) {
      bool = true;
    }
  }

  return true;
}
