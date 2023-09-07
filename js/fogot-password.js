const form = document.querySelector(".mail form"),
  sendBtn = form.querySelector(".button input"),
  confirmBtn = form.querySelector(".button .confirm"),
  emailInput = form.querySelector(".input .email"),
  codeInput = form.querySelector(".input .code"),
  errorText = form.querySelector(".error-text"),
  codeText = form.querySelector(".code-text");

var code;

form.onsubmit = (e) => {
  e.preventDefault();
};

sendBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/fogot-password.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data === "success") {
          errorText.style.display = "none";
          codeText.style.display = "block";
          code = Math.floor(Math.random() * (9999 - 1000) + 1000);
          codeText.textContent = code;
          confirmBtn.style.display = "block";
          sendBtn.style.display = "none";
          emailInput.style.display = "none";
          codeInput.style.display = "block";
        } else {
          errorText.style.display = "block";
          codeText.style.display = "none";
          errorText.textContent = data;
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};

confirmBtn.onclick = () => {
  if (codeText.textContent == document.getElementsByName("code")[0].value) {
    location.href = "recovery-password.php";
  }
};
