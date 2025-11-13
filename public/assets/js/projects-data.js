async function fetchProjects() {
  try {
    const response = await fetch('./assets/js/Json/projects-data.json');

    if (!response.ok) {
      throw new Error('Network response was not ok');
    }

    const data = await response.json();
    const projects = data.projects;

    if (!projects || projects.length === 0) {
      console.log("No projects data found.");
      return;
    }

    console.log("Projects data loaded successfully:", projects);

    displayProjects(projects);
    setupFiltering(); // Set up the filtering
  } catch (error) {
    console.error('There was a problem with the fetch operation:', error);
  }
}

function displayProjects(projects) {
  const container = document.getElementById('project-grid');
  container.innerHTML = ""; // Clear old projects

  projects.forEach(project => {
    const item = document.createElement('div');
    item.classList.add('col-lg-4', 'col-md-6', 'portfolio-item', project.category, 'fade-in');

    item.innerHTML = `
      <div class="project-box shadow-sm h-100 border-0 p-3 rounded">
        <div class="project-image mb-3 text-center" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#projectModal">
          <img src="${project.image}" alt="${project.title}" class="img-fluid rounded">
        </div>
        <div class="project-content mb-3">
          <h5 class="project-title">${project.title}</h5>
          <p class="project-description">
            ${project.description.length > 60 ? project.description.slice(0, 60) + '...' : project.description}
          </p>
        </div>
        <div class="project-links d-flex justify-content-between">
          <a href="${project.preview_link}" class="btn btn-sm btn-outline-primary" target="_blank">
            <i class="bi bi-zoom-in"></i>
          </a>
          <a href="${project.detail_link}" class="btn btn-sm btn-outline-secondary" target="_blank">
            <i class="bi bi-link-45deg"></i>
          </a>
        </div>
      </div>
    `;

    item.querySelector('img').addEventListener('click', () => {
      openModal(project.image, project.description);
    });

    container.appendChild(item);
  });
}

function setupFiltering() {
  const filterList = document.getElementById('filterList');
  const projectItems = document.querySelectorAll('#project-grid .portfolio-item');

  filterList.addEventListener('click', (e) => {
    if (e.target.tagName === 'LI') {
      // Update active filter
      document.querySelectorAll('#filterList li').forEach(li => li.classList.remove('filter-active'));
      e.target.classList.add('filter-active');

      const filterValue = e.target.getAttribute('data-filter');

      // Filter projects by category
      projectItems.forEach(item => {
        if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
          item.classList.remove('d-none');
        } else {
          item.classList.add('d-none');
        }
      });
    }
  });
}

function openModal(image, description) {
  const modalImage = document.getElementById('modalImage');
  const modalDescription = document.getElementById('modalDescription');

  modalImage.src = image;
  modalDescription.textContent = description;
}

document.addEventListener('DOMContentLoaded', fetchProjects);
  