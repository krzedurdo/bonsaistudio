
function validateForm() {
  var x = document.forms["formulario"]["name"].value;
  if (x == "") {
    alert("Nome deve ser fornecido");
    return false;
  }
}
