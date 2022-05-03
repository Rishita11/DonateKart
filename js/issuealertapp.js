function geoFindMe() {
    const location = document.querySelector("#issueLocation");

    location.textContent = "";

    function success(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        location.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
    }

    function error() {
        location.textContent = "Unable to retrieve your location";
    }

    if (!navigator.geolocation) {
        location.textContent = "Geolocation is not supported by your browser";
    } else {
        location.textContent = "Locating…";
        navigator.geolocation.getCurrentPosition(success, error);
    }
}

document
    .querySelector("#locationTrackingLink")
    .addEventListener("click", geoFindMe);

function createSuccessAlert() {
    let successAlertDiv = document.createElement("div");
    let closeButton = document.createElement("button");
    successAlertDiv.classList.add("alert", "alert-success", "mt-2");
    successAlertDiv.setAttribute("role", "alert");
    successAlertDiv.style.fontSize = "clamp(0.85rem,1.75vw,1.1rem)";
    successAlertDiv.textContent = "Your Message has been Delivered.";
    closeButton.setAttribute("type", "button");
    closeButton.setAttribute("aria-label", "Close");
    closeButton.classList.add("btn-close");
    successAlertDiv.append(closeButton);
    closeButton.style.position = "absolute";
    closeButton.style.right = "10px";
    issueForm.appendChild(successAlertDiv);
    closeButton.addEventListener("click", () => {
        successAlertDiv.style.display = "none";
    });
}

function createFailureAlert() {
    let failureAlertDiv = document.createElement("div");
    let closeButton = document.createElement("button");
    failureAlertDiv.classList.add("alert", "alert-danger", "mt-2");
    failureAlertDiv.setAttribute("role", "alert");
    failureAlertDiv.style.fontSize = "clamp(0.85rem,1.75vw,1.1rem)";
    failureAlertDiv.textContent = "Your Message failed to Delivered.";
    closeButton.setAttribute("type", "button");
    closeButton.setAttribute("aria-label", "Close");
    closeButton.classList.add("btn-close");
    failureAlertDiv.append(closeButton);
    closeButton.style.position = "absolute";
    closeButton.style.right = "10px";
    issueForm.appendChild(failureAlertDiv);
    closeButton.addEventListener("click", () => {
        failureAlertDiv.style.display = "none";
    });
}

const issueForm = document.querySelector("#issueForm");

const spinnerBorder = document.querySelector(".spinner-border");
issueForm.addEventListener("submit", (e) => {
    e.preventDefault();
    spinnerBorder.classList.toggle("d-none");
    fetch(issueForm.action, {
        method: "POST",
        body: new FormData(issueForm),
    })
        .then((response) => response.json())
        .then((html) => {
            spinnerBorder.classList.toggle("d-none");
            createSuccessAlert();
        })
        .catch((e) => {
            createFailureAlert();
        });
});
