document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const blogId = urlParams.get('id');

    fetch('./assets/js/Json/blogs-data.json')
        .then(response => response.json())
        .then(data => {
            displayCategories(data); // ✅ HƏR HALDA BURADA OLACAQ

            if (blogId) {
                // ✅ BLOG DETAYI GƏLİR
                const blog = data.find(b => b.id == blogId);
                if (blog) {
                    displayBlogDetails(blog);
                } else {
                    showError("Blog not found!");
                }
            } else {
                // ✅ ƏKS HALDA BLOGLARI GÖSTƏR
                displayBlogs(data);
            }
        })
        .catch(error => {
            console.error('Error loading blog data:', error);
            showError("An error occurred while loading the blog.");
        });
});


function showError(message) {
    const blogDetailsContainer = document.getElementById('blog-details');
    blogDetailsContainer.innerHTML = `<p class="text-danger">${message}</p>`;
}
function displayBlogDetails(blog) {
    const blogDetailsContainer = document.getElementById('blog-details');
    blogDetailsContainer.innerHTML = `
        <article class="article ">
            <h2 class="title mb-3 text-primary text-black">${blog.title}</h2>

            <div class="post-img mb-4 position-relative" onclick="playVideo()" style="cursor: pointer;">
                <img src="${blog.thumbnail}" class="img-fluid w-100" alt="${blog.title}" id="videoThumbnail">
                <div class="play-button position-absolute top-50 start-50 translate-middle" id="playIcon">
                    <div class="d-flex justify-content-center align-items-center bg-white rounded-circle shadow" style="width: 80px; height: 80px;">
                        <i class="bi bi-play-fill fs-1 text-primary"></i>
                    </div>
                </div>
                <video id="video" width="100%" class="d-none" controls>
                    <source src="${blog.videoSrc}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="meta-top mb-4">
                <ul class="list-inline text-muted">
                    <li class="list-inline-item"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="${blog.meta.date}">${blog.meta.date}</time></a></li>
                    <li class="list-inline-item"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">${blog.meta.comments} Comments</a></li>
                </ul>
            </div>
            
<div class="content">
    ${blog.content.map(p => {
        if (typeof p === "string") {
            return `<p>${p}</p>`;
        } else if (typeof p === "object" && p.heading && p.text) {
            return `
                <div class="mb-4">
                    <img src="${blog.image}" class="img-fluid rounded shadow-sm" alt="Related image">
                </div>
                <h5 class="mt-4">${p.heading}</h5>
                <p>${p.text.replace(/\n/g, "<br>")}</p>
            `;
        }
        return '';
    }).join('')}
</div>



        </article>
    `;
}



function playVideo() {
    var video = document.getElementById('video');
    var thumbnail = document.getElementById('videoThumbnail');
    var playButton = document.querySelector('.play-button');

    video.classList.remove('d-none');
    thumbnail.classList.add('d-none');
    playButton.classList.add('d-none');
    video.play();
}


async function fetchBlogs() {
    try {
        const response = await fetch('./assets/js/Json/blogs-data.json');

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const data = await response.json();

        displayBlogs(data); // Display blog data
        displayCategories(data); // Display categories

    } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
        showError("Error loading blogs.");
    }
}
function displayBlogs(blogs) {
    const container = document.getElementById('blog-posts');
    container.innerHTML = ""; // Clear existing content

    blogs.forEach(blog => {
        const blogItem = document.createElement('div');
        blogItem.classList.add('col-lg-4');

        if (blog.type === 'video') {
            blogItem.innerHTML = `
                <article class="position-relative h-100 " >
                    <div class="post-img position-relative overflow-hidden">
                        <img src="${blog.thumbnail}" alt="${blog.title}" class="img-fluid">
                        <span class="post-date">${blog.meta.date}</span>
                    </div>
                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">${blog.title}</h3>
                        <div class="meta d-flex align-items-center">
                            <i class="bi bi-person"></i> <span class="ps-2">${blog.meta.author}</span>
                            <span class="px-3 text-black-50">/</span>
                            <i class="bi bi-folder2"></i> <span class="ps-2">${blog.category || 'Uncategorized'}</span>
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
                <article class="position-relative h-100 ">
                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">${blog.title}</h3>
                        <div class="meta d-flex align-items-center">
                            <span class="px-3 text-black-50">/</span>
                            <i class="bi bi-folder2"></i> <span class="ps-2">${blog.category || 'Uncategorized'}</span>
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

function displayCategories(data) {
    console.log("Data:", data); // BURANI ƏLAVƏ ET
    const categoriesContainer = document.getElementById('categories-list');

    const sidebar = data.find(item => item.id === 3 && item.type === 'sidebar');

    if (sidebar && sidebar.categories) {
        const categories = sidebar.categories;
        categoriesContainer.innerHTML = "";

        categories.forEach(category => {
            const categoryItem = document.createElement('li');
            categoryItem.classList.add('mb-2');
            categoryItem.innerHTML = `
                <a href="#" class="text-decoration-none text-dark">${category.name} (${category.count})</a>
            `;
            categoriesContainer.appendChild(categoryItem);
        });
    } else {
        categoriesContainer.innerHTML = "<p>No categories available.</p>";
    }
}
