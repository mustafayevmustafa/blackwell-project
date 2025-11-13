// Swiper for Thumbnails (Small images slider)
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 10,
  slidesPerView: 4, // Number of thumbnails visible at once
  freeMode: true, // Free sliding mode
  watchSlidesVisibility: true, // Watch visible slides
  watchSlidesProgress: true, // Watch slides progress
  loop: true, // Infinite loop
});

// Swiper for Main Slider (Large image viewer)
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper, // Sync thumbnails with the main slider
  },
  loop: true, // Infinite loop
});

// Prevent excessive clicking on navigation buttons
document.querySelectorAll(".swiper-button-next, .swiper-button-prev").forEach((btn) => {
  btn.addEventListener("click", function () {
    btn.style.pointerEvents = "none"; // Disable button temporarily
    setTimeout(() => {
      btn.style.pointerEvents = "auto"; // Enable button after 600ms
    }, 600); // Delay to prevent multiple clicks
  });
});

// Testimonial Slider (Automatic slide with manual control)
let index = 0;
const slides = document.querySelectorAll(".testimonial");
const totalSlides = slides.length;

function showSlide(i) {
  const wrapper = document.querySelector(".testimonial-wrapper");
  index = (i + totalSlides) % totalSlides;
  wrapper.style.transform = `translateX(${-index * 100}%)`;
}

function nextSlide() {
  showSlide(index + 1);
}

function prevSlide() {
  showSlide(index - 1);
}

// Automatic slide transition every 5 seconds
setInterval(nextSlide, 5000);

// Video controls (Play, Pause, Mute, Fullscreen)
document.addEventListener("DOMContentLoaded", function () {
  const video = document.getElementById("introVideo");
  const overlayIcon = document.getElementById("videoOverlayIcon");
  const playPauseBtn = document.getElementById("playPauseBtn");
  const muteUnmuteBtn = document.getElementById("muteUnmuteBtn");
  const fullscreenBtn = document.getElementById("fullscreenBtn");

  function toggleVideo() {
    if (video.paused) {
      video.play();
      overlayIcon.innerHTML = '<i class="fa-solid fa-pause"></i>';
      playPauseBtn.innerHTML = '<i class="fa-solid fa-pause"></i>';
      setTimeout(() => {
        overlayIcon.style.opacity = "0";
        setTimeout(() => {
          overlayIcon.style.display = "none";
        }, 300);
      }, 500);
    } else {
      video.pause();
      overlayIcon.innerHTML = '<i class="fa-solid fa-play"></i>';
      playPauseBtn.innerHTML = '<i class="fa-solid fa-play"></i>';
      overlayIcon.style.display = "flex";
      overlayIcon.style.opacity = "1";
    }
  }

  function toggleMute() {
    video.muted = !video.muted;
    muteUnmuteBtn.innerHTML = video.muted
      ? '<i class="fa-solid fa-volume-mute"></i>'
      : '<i class="fa-solid fa-volume-up"></i>';
  }

  function toggleFullscreen() {
    if (!document.fullscreenElement && !document.webkitFullscreenElement && !document.mozFullScreenElement && !document.msFullscreenElement) {
      if (video.requestFullscreen) {
        video.requestFullscreen();
      } else if (video.mozRequestFullScreen) {
        video.mozRequestFullScreen();
      } else if (video.webkitRequestFullscreen) {
        video.webkitRequestFullscreen();
      } else if (video.msRequestFullscreen) {
        video.msRequestFullscreen();
      }
      fullscreenBtn.innerHTML = '<i class="fa-solid fa-compress"></i>'; // Change to compress icon
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
      fullscreenBtn.innerHTML = '<i class="fa-solid fa-expand"></i>'; // Change to expand icon
    }
  }

  // Toggle video playback on fullscreen and pause
  video.addEventListener("click", toggleVideo);
  playPauseBtn.addEventListener("click", toggleVideo);
  muteUnmuteBtn.addEventListener("click", toggleMute);
  fullscreenBtn.addEventListener("click", toggleFullscreen);

  // Auto-hide overlay icon after 2 seconds of inactivity
  setTimeout(() => {
    overlayIcon.style.opacity = "0";
    setTimeout(() => {
      overlayIcon.style.display = "none";
    }, 300);
  }, 2000);
});

// YouTube Player (Embed YouTube video)
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubeIframeAPIReady() {
  new YT.Player('player', {
    videoId: '6LJkMKi9aU0',
    playerVars: {
      autoplay: 1,
      mute: 1,
      loop: 1,
      controls: 0,
      modestbranding: 1,
      showinfo: 0,
      rel: 0
    }
  });
}

// Scroll-based section visibility with IntersectionObserver
document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll('.about.section, .page_intro_container, .testimonials');

  const checkVisibility = () => {
    const windowHeight = window.innerHeight;

    sections.forEach(section => {
      const rect = section.getBoundingClientRect();

      if (rect.top <= windowHeight * 0.8) {
        section.classList.add('visible'); // Mark section as visible
      }
    });
  };

  // Run visibility check on page load
  checkVisibility();

  // Listen to scroll events for visibility detection
  window.addEventListener('scroll', checkVisibility);
});

// Video Pause/Play based on visibility
document.addEventListener("DOMContentLoaded", function () {
  const video = document.getElementById("introVideo");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        video.play();  // Play the video when visible
      } else {
        video.pause(); // Pause the video when out of view
      }
    });
  }, {
    threshold: 0.5  // Trigger when 50% of the video is visible
  });

  observer.observe(video);  // Observe the video element
});
