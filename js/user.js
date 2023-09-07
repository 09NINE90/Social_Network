const btnOut = document.querySelector(".site .button input");

btnOut.onclick = () => {
  location.href = "login.php";
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/out.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data === "success") {
          location.href = "login.php";
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};
