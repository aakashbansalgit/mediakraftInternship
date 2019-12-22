(function() {

    var width, height, canvas;

    // Main
    initHeader();

    function initHeader() {
        width = window.innerWidth;
        height = window.innerHeight;



        canvas = document.getElementById('content-canvas');
        canvas.width = width;
        canvas.height = height;

    }

    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        canvas.width = width;
        canvas.height = height;
    } 
})();