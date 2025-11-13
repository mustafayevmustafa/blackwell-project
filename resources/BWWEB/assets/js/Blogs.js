const blogsPerPage = 3; // Number of blogs per page
let currentPage = 1; // Track the current page

async function fetchBlogs() {
  try {
    const response = await fetch('./assets/js/Json/blogs-data.json');

    if (!response.ok) {
      throw new Error('Network response was not ok');
    }

    const data = await response.json();
    const totalPages = Math.ceil(data.length / blogsPerPage); // Calculate total number of pages

    displayBlogs(data, currentPage); // Display the blogs for the current page
    updatePagination(totalPages); // Update the pagination
  } catch (error) {
    console.error('There was a problem with the fetch operation:', error);
  }
}

function displayBlogs(blogs, page) {
  const container = document.getElementById('blog-posts');
  container.innerHTML = ""; // Clear existing content

  const startIndex = (page - 1) * blogsPerPage;
  const endIndex = page * blogsPerPage;
  const blogsToDisplay = blogs.slice(startIndex, endIndex); // Get the blogs for the current page

  blogsToDisplay.forEach(blog => {
    const blogItem = document.createElement('div');
    blogItem.classList.add('col-lg-4');

    if (blog.type === 'video') {
      blogItem.innerHTML = `
        <article class="position-relative h-100">
          <div class="post-img position-relative overflow-hidden">
            <img src="${blog.thumbnail}" alt="${blog.title}" class="img-fluid">
            <span class="post-date">${blog.meta.date}</span>
          </div>
          <div class="post-content d-flex flex-column">
            <h3 class="post-title">${blog.title}</h3>
            <div class="meta d-flex align-items-center">
              <i class="bi bi-person"></i> <span class="ps-2">${blog.meta.author}</span>
              <span class="px-3 text-black-50">/</span>
              <i class="bi bi-folder2"></i> <span class="ps-2">Video</span>
            </div>
            <p>${blog.content[0]}</p>
            <hr>
            <a href="blog-details.html?id=${blog.id}" class="readmore stretched-link">
              <span>Read More</span><i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </article>
      `;
    } else if (blog.type === 'section') {
      blogItem.innerHTML = `
        <article class="position-relative h-100">
          <div class="post-content d-flex flex-column">
            <h3 class="post-title">${blog.title}</h3>
            <div class="meta d-flex align-items-center">
              <i class="bi bi-person"></i> <span class="ps-2">${blog.meta.author || 'Unknown'}</span>
              <span class="px-3 text-black-50">/</span>
              <i class="bi bi-folder2"></i> <span class="ps-2">Section</span>
            </div>
            <p>${blog.content}</p>
            <hr>
            <a href="blog-details.html?id=${blog.id}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </article>
      `;
    }

    container.appendChild(blogItem);
  });
}

function updatePagination(totalPages) {
  const paginationContainer = document.querySelector('.pagination');
  paginationContainer.innerHTML = ''; // Clear existing pagination

  const prevPageItem = document.createElement('li');
  prevPageItem.classList.add('page-item');
  prevPageItem.innerHTML = `<a href="#" class="page-link"><i class="bi bi-chevron-left"></i></a>`;
  prevPageItem.addEventListener('click', () => changePage(currentPage - 1));
  paginationContainer.appendChild(prevPageItem);

  // Generate page numbers
  for (let i = 1; i <= totalPages; i++) {
    const pageItem = document.createElement('li');
    pageItem.classList.add('page-item');
    pageItem.classList.toggle('active', i === currentPage);
    pageItem.innerHTML = `<a href="#" class="page-link">${i}</a>`;
    pageItem.addEventListener('click', () => changePage(i));
    paginationContainer.appendChild(pageItem);
  }

  const nextPageItem = document.createElement('li');
  nextPageItem.classList.add('page-item');
  nextPageItem.innerHTML = `<a href="#" class="page-link"><i class="bi bi-chevron-right"></i></a>`;
  nextPageItem.addEventListener('click', () => changePage(currentPage + 1));
  paginationContainer.appendChild(nextPageItem);
}

function changePage(page) {
  const totalPages = Math.ceil(document.getElementById('blog-posts').children.length / blogsPerPage);
  if (page >= 1 && page <= totalPages) {
    currentPage = page;
    fetchBlogs();
  }
}

document.addEventListener('DOMContentLoaded', fetchBlogs);
