let currentRow = 0;
let rows = [];

async function fetchProducts() {
  try {
    const response = await fetch('./assets/js//Json/PanametricProducts.json');
    if (!response.ok) throw new Error('Failed to fetch the products data');
    const products = await response.json();
    groupProducts(products);
    displayRow(currentRow);
    generatePagination();
  } catch (error) {
    console.error('Error fetching the products data:', error);
  }
}

function groupProducts(products) {
  const modalsContainer = document.getElementById('productModals');
  rows = [];

  for (let i = 0; i < products.length; i += 3) {
    rows.push(products.slice(i, i + 3));
  }

  // Modal'ları temizle ve yeniden oluştur
  modalsContainer.innerHTML = '';

  rows.flat().forEach((product) => {
    const modalHTML = `
      <div class="modal fade" id="${product.modalId}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">${product.title}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <div class="modal-image-wrapper mb-3" style="width: 100%; height: 300px; overflow: hidden; background-color: #f8f9fa;">
                <img src="" alt="Product Image"
                     style="width: 100%; height: 100%; object-fit: contain;" />
              </div>
              <ul></ul>
            </div>
          </div>
        </div>
      </div>`;
    modalsContainer.innerHTML += modalHTML;
  });
}

function displayRow(rowIndex) {
  const cardsContainer = document.getElementById('productCards');
  cardsContainer.innerHTML = '';

  if (rows[rowIndex]) {
    rows[rowIndex].forEach((product) => {
      const cardHTML = `
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-4">
          <div class="custom-card text-center d-flex flex-column" style="width: 250px;"
               data-bs-toggle="modal" data-bs-target="#${product.modalId}"
               onclick="setModalContent('${product.modalId}', '${product.image}', '${product.title}', \`${product.details}\`)">
            <div class="image-wrapper" style="height: 200px; width: 100%; overflow: hidden; background-color: #f8f9fa;">
              <img src="${product.image}" alt="${product.title}"
                   style="width: 100%; height: 100%; object-fit: cover;" />
            </div>
            <div class="custom-card-body p-3">
              <div class="product-title fw-bold">${product.title}</div>
              <div class="product-subtitle text-muted">${product.subtitle}</div>
              <p class="product-feature">${product.feature}</p>
            </div>
          </div>
        </div>`;
      cardsContainer.innerHTML += cardHTML;
    });
  }

  updatePagination(rowIndex);
}

function setModalContent(modalId, imageSrc, title, details) {
  const modal = document.getElementById(modalId);
  const modalImage = modal.querySelector('img');
  const modalDetails = modal.querySelector('ul');

  if (imageSrc) {
    modalImage.src = imageSrc;
  }

  modalDetails.innerHTML = '<li>' + details.split(',').join('</li><li>') + '</li>';
}

function generatePagination() {
  const paginationContainer = document.getElementById('paginationContainer');
  paginationContainer.innerHTML = '';

  for (let i = 0; i < rows.length; i++) {
    const btn = document.createElement('button');
    btn.textContent = i + 1;
    btn.className = 'btn btn-outline-primary';
    btn.onclick = () => {
      currentRow = i;
      displayRow(currentRow);
    };
    paginationContainer.appendChild(btn);
  }

  // Sayfa yüklendiğinde ilk butonu aktif yap
  updatePagination(currentRow);
}


function updatePagination(activeIndex) {
  const buttons = document.querySelectorAll('#paginationContainer button');
  buttons.forEach((btn, index) => {
    btn.classList.remove('active');
    if (index === activeIndex) {
      btn.classList.add('active');
    }
  });
}

// Sayfa yüklendiğinde ürünleri al
fetchProducts();
