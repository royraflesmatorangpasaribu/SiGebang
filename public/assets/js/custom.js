$(document).ready(function() {
    // Navbar scrollspy
    $('body').scrollspy({ target: '.navbar', offset: 90 });

    // Smooth scrolling for anchor links
    $('a.nav-link').on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            var targetOffset = $(hash).offset().top - 60;
            $('html, body').animate({
                scrollTop: targetOffset
            }, 1000);
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const powerpointButton = document.getElementById('powerpoint-button');
    const videoButton = document.getElementById('video-button');
    const powerpointContent = document.getElementById('powerpoint-content');
    const videoContent = document.getElementById('video-content');

    powerpointButton.addEventListener('click', function () {
        powerpointButton.classList.add('active');
        videoButton.classList.remove('active');
        powerpointContent.style.display = 'block';
        videoContent.style.display = 'none';
    });

    videoButton.addEventListener('click', function () {
        videoButton.classList.add('active');
        powerpointButton.classList.remove('active');
        videoContent.style.display = 'block';
        powerpointContent.style.display = 'none';
    });

    // Inisialisasi dengan menampilkan PowerPoint saat halaman dimuat
    powerpointButton.click();
});

// Mendapatkan tombol toggle switch
const powerpointButton = document.getElementById("powerpoint-button");
const videoButton = document.getElementById("video-button");
const video = document.getElementById("video");

// Mendengarkan perubahan pada toggle switch
powerpointButton.addEventListener("click", function() {
    video.pause(); // Pause video saat beralih ke PowerPoint
});

videoButton.addEventListener("click", function() {
    video.play(); // Putar video saat beralih ke Video
});
