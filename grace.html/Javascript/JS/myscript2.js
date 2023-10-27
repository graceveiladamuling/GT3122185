let currentImageIndex = 0;

function showImage(index) {
    const mainImage = document.getElementById("main") ;
    mainImage.src = document.querySelectorAll(".side_view img") [index].src
    currentImageIndex = index;
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % 5; // Assuming 5 images
    showImage(currentImageIndex);
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + 5) % 5; // Assuming 5 images
    showImage(currentImageIndex);
}

// Ading event listenetrs for arrow keys 
document.addEventlistener("keydown", (event) =>{
    if (event.key === "ArrowLeft") {
        prevImage();
    } else if (event.key === "ArrowRight") {
        nextImage();s
    }
});