// const rand = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
//
// const enhance = id => {
//   const element = document.getElementById(id),
//     text = element.innerText.split("");
//
//   element.innerText = "";
//
//   text.forEach((value, index) => {
//     const outer = document.createElement("span");
//
//     outer.className = "outer";
//
//     const inner = document.createElement("span");
//
//     inner.className = "inner";
//
//     inner.style.animationDelay = `${rand(-5000, 0)}ms`;
//
//     const letter = document.createElement("span");
//
//     letter.className = "letter";
//
//     letter.innerText = value;
//
//     letter.style.animationDelay = `${index * 1000 }ms`;
//
//     inner.appendChild(letter);
//
//     outer.appendChild(inner);
//
//     element.appendChild(outer);
//   });
// }

// enhance("home");
// enhance("explore");
// enhance("create");
// enhance("search");
// enhance("happening");
  document.getElementById('create-event-form').addEventListener('input', function (e) {
  // Aggiorna l'anteprima della card quando ci sono modifiche nel form
  updateEventPreview();
});

  function updateEventPreview() {
  // Recupera i valori dai campi del form e aggiorna l'anteprima della card
  var title = document.getElementById('input-title').value;
  var description = document.getElementById('input-description').value;
  var city = document.getElementById('input-city').value;
  var address = document.getElementById('input-address').value;
  var location = document.getElementById('input-location').value;
  var date = document.getElementById('input-date').value;

  var imageInput = document.getElementById('input-img');
  var imageUrl = imageInput.files.length > 0 ? URL.createObjectURL(imageInput.files[0]) : '';


    // Aggiorna il contenuto dell'anteprima della card
  var previewElement = document.getElementById('event-preview');
  previewElement.innerHTML = `
  <img class="img-fluid" alt="" src="${imageUrl}">
  <div class="card-body">
    <h4 class="card-title">${title}</h4>
    <p class="card-text">${description}</p>
    <hr>
    <div class="info">
      <div class="row row-info">
        <div class="col-1">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995L16.9497 15.9497ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z" fill="rgba(224,251,252,1)"></path></svg>
        </div>
        <div class="col">
          <p class="card-info">${city}, ${address}, ${location}</p>
        </div>
    </div>
    <div class="row row-info">
      <div class="col-1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM11 13V17H6V13H11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z" fill="rgba(224,251,252,1)"></path></svg>
      </div>
      <div class="col">
        <p class="card-info">${date}</p>
      </div>
      </div>
    </div>
  </div>
  `;
}
