function scrollLeft(containerId) {
    document.getElementById(containerId).scrollBy({ left: -200, behavior: "smooth" });
}

function scrollRight(containerId) {
    document.getElementById(containerId).scrollBy({ left: 200, behavior: "smooth" });
}
