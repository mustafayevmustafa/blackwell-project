// Formu açmak için fonksiyon
function openContact() {
  var formSection = document.getElementById('formSection');
  var darkOverlay = document.getElementById('darkOverlay');
  
  formSection.style.display = 'block'; 
  darkOverlay.style.display = 'block';
  

  setTimeout(() => {
    formSection.classList.add('active');
  }, 10); 
}

// Formu kapatmak için fonksiyon
function closeContact() {
  var formSection = document.getElementById('formSection');
  var darkOverlay = document.getElementById('darkOverlay');
  
  formSection.classList.remove('active');
  
  setTimeout(() => {
    formSection.style.display = 'none'; 
    darkOverlay.style.display = 'none';
  }, 500); 
}

document.getElementById('closeFormBtn').addEventListener('click', closeContact);
// get a quta 

function openQuoteForm() {
  var quoteFormSection = document.getElementById('quoteFormSection');
  var quoteDarkOverlay = document.getElementById('quoteDarkOverlay');

  quoteFormSection.style.display = 'block';
  quoteDarkOverlay.style.display = 'block';

  setTimeout(() => {
    quoteFormSection.classList.add('active');
  }, 10);
}

function closeQuoteForm() {
  var quoteFormSection = document.getElementById('quoteFormSection');
  var quoteDarkOverlay = document.getElementById('quoteDarkOverlay');

  quoteFormSection.classList.remove('active');

  setTimeout(() => {
    quoteFormSection.style.display = 'none';
    quoteDarkOverlay.style.display = 'none';
  }, 500);
}
