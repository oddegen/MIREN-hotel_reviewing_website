function submitForm(formElem) {
  let xhr = XMLHttpRequest();
  xhr.onload = function () {
    window.location.href = "../Home page/home.html";
  };
  xhr.open(formElem.method, formElem.getAttribute("action"));
  xhr.send(new FormData(formElem));

  return false;
}
