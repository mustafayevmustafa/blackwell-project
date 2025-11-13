// Scroll Lock
document.body.classList.add('scroll-lock');

// Add CSS styles via JS
const style = document.createElement('style');
style.innerHTML = `
  body.scroll-lock {
    overflow: hidden; /* Prevent scrolling */
  }

  #loading-overlay {
    position: fixed;
    top: 0; left: 0;
    width: 100%;
    height: 100vh;
    background-color: #ffffff; /* White background */
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 99999; /* Ensure it's on top of all content */
  }

  .spinner {
    width: 50px;
    height: 50px;
    border: 6px solid #ccc;
    border-top-color: #007bff; /* Blue top border */
    border-radius: 50%;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    to { transform: rotate(360deg); }
  }
`;
document.head.appendChild(style);

// Create the overlay and spinner elements
const overlay = document.createElement('div');
overlay.id = 'loading-overlay';

const spinner = document.createElement('div');
spinner.className = 'spinner';

overlay.appendChild(spinner);
document.body.appendChild(overlay);

// Remove the loading overlay once the page has fully loaded
window.addEventListener('load', () => {
  document.body.classList.remove('scroll-lock'); // Enable scrolling
  overlay.remove(); // Remove the loading overlay
});
