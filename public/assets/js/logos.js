function displayLogos(logosData) {
    const logosContainer = document.getElementById("logos12");
    logosContainer.innerHTML = "";

    logosData.forEach(logo => {
        const logoElement = document.createElement("div");
        logoElement.classList.add("logo12");
        logoElement.setAttribute("data-id12", logo.id);
        logoElement.setAttribute("data-description12", logo.description);
        logoElement.setAttribute("data-image12", logo.image);
        logoElement.setAttribute("data-name12", logo.name);
        logoElement.setAttribute("data-url12", logo.url);

        const imgElement = document.createElement("img");
        imgElement.src = logo.image;
        imgElement.alt = `Logo ${logo.id}`;

        logoElement.appendChild(imgElement);
        logosContainer.appendChild(logoElement);

        logoElement.addEventListener("click", () => {
            showLogoDetails(logo.id, logosData);
        });
    });


    if (logosData.length > 0) {
        showLogoDetails(logosData[0].id, logosData);
    }
}

function showLogoDetails(logoId, logosData) {
    const logo = logosData.find(item => item.id === logoId);
    const descriptionElement = document.getElementById("logo-description12");
    const imageElement = document.getElementById("logo-image12");
    const nameElement = document.getElementById("logo-name12");
    const anchorElement = document.querySelector(".data-url12"); // <a> etiketi

    nameElement.textContent = logo.name;
    descriptionElement.textContent = logo.description;
    imageElement.src = logo.image;
    anchorElement.href = logo.url; // href güncellemesi
}


function fetchLogosData() {
    fetch('./assets/js/Json/logos.json')
        .then(response => response.json())
        .then(logosData => {
            displayLogos(logosData);
            window.logosData = logosData;
        })
        .catch(error => {
            console.error("Error occurred while fetching data", error);
        });

}
