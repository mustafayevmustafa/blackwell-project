const mainVideo = document.getElementById('mainVideo');
const videoItems = document.querySelectorAll('.video-item');

// İlk videoyu varsayılan olarak göster
const firstVideo = videoItems[0].getAttribute('data-video');
mainVideo.src = `https://www.youtube.com/embed/${firstVideo}`;
videoItems[0].classList.add('selected');

// Tüm videolara tıklama eventi ekle
videoItems.forEach(item => {
  item.addEventListener('click', function () {
    // Önceki seçimi kaldır
    document.querySelector('.selected')?.classList.remove('selected');

    // Seçili videoyu değiştir
    const videoId = this.getAttribute('data-video');
    mainVideo.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    this.classList.add('selected');
  });
});