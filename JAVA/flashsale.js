document.addEventListener("DOMContentLoaded", function () {
    function setupInfiniteScroll(containerClass) {
        const container = document.querySelector(`.${containerClass}`);
        if (!container) return; // Skip if container is missing

        const cards = Array.from(container.children);
        if (cards.length < 2) return; // Not enough items for looping

        const scrollWrapper = container.parentElement; // Get the wrapper div
        const scrollAmount = cards[0].offsetWidth + 20; // Adjust for margins

        // Clone first and last items for seamless infinite effect
        container.appendChild(cards[0].cloneNode(true)); // Clone first item
        container.insertBefore(cards[cards.length - 1].cloneNode(true), cards[0]); // Clone last item

        let isScrolling = false;

        function scrollLeft() {
            if (isScrolling) return;
            isScrolling = true;

            container.style.transition = "transform 0.5s ease-in-out";
            container.style.transform = `translateX(${scrollAmount}px)`;

            setTimeout(() => {
                container.style.transition = "none";
                container.insertBefore(container.lastElementChild, container.firstElementChild);
                container.style.transform = "translateX(0)";
                isScrolling = false;
            }, 500);
        }

        function scrollRight() {
            if (isScrolling) return;
            isScrolling = true;

            container.style.transition = "transform 0.5s ease-in-out";
            container.style.transform = `translateX(-${scrollAmount}px)`;

            setTimeout(() => {
                container.style.transition = "none";
                container.appendChild(container.firstElementChild);
                container.style.transform = "translateX(0)";
                isScrolling = false;
            }, 500);
        }

        // Attach event listeners to buttons
        const leftButton = scrollWrapper.querySelector(".left-btn");
        const rightButton = scrollWrapper.querySelector(".right-btn");

        if (leftButton && rightButton) {
            leftButton.addEventListener("click", scrollLeft);
            rightButton.addEventListener("click", scrollRight);
        }
    }

    // Apply to all containers
    setupInfiniteScroll("gadgets-container");
    setupInfiniteScroll("shirts-container");
    setupInfiniteScroll("appliances-container");
    setupInfiniteScroll("home-decor-container");
});
