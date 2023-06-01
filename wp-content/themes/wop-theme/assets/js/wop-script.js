
$(function () {
  
    $('#vidBox').VideoPopUp({
        opener: "video-trigger",
        idvideo: "demo",
        pausevideo: true
    });
    $('.intro-imgs .img1').matchHeight();

});

document.addEventListener('DOMContentLoaded', function () {
    // Disable horizontal scrolling
    document.documentElement.style.overflowX = 'hidden';
});
