function scrollLeft(containerId) {
    const container = document.getElementById(containerId);
    container.scrollLeft -= 200; // adjust scroll distance as necessary
}

function scrollRight(containerId) {
    const container = document.getElementById(containerId);
    container.scrollLeft += 200; // adjust scroll distance as necessary
}

function buyNow(productName) {
    alert("You have selected: " + productName); // this can be expanded to handle the purchase logic
}




// countdown.js

// Function to update the countdown timer
function updateCountdown(saleStartTime, saleEndTime) {
    const countdownElement = document.getElementById("countdown");

    function calculateTimeLeft() {
        const now = new Date().getTime();
        
        // If the current time is before the sale start, show the countdown to start
        if (now < saleStartTime) {
            const timeLeft = saleStartTime - now;
            const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((timeLeft / (1000 * 60)) % 60);
            const seconds = Math.floor((timeLeft / 1000) % 60);
            countdownElement.innerHTML = `Sale Starts in: ${hours.toString().padStart(2, "0")} : ${minutes.toString().padStart(2, "0")} : ${seconds.toString().padStart(2, "0")}`;
            return;
        }
        
        // If the current time is within the sale, show the countdown to the end
        const timeLeft = saleEndTime - now;

        if (timeLeft <= 0) {
            countdownElement.innerHTML = "Sale Ended!";
            return;
        }

        const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((timeLeft / (1000 * 60)) % 60);
        const seconds = Math.floor((timeLeft / 1000) % 60);

        countdownElement.innerHTML = `${hours.toString().padStart(2, "0")} : ${minutes.toString().padStart(2, "0")} : ${seconds.toString().padStart(2, "0")}`;
    }

    setInterval(calculateTimeLeft, 1000); // Update every second
    calculateTimeLeft(); // Run immediately
}

// Start the countdown when the page loads
window.onload = function() {
    const saleStartTime = document.getElementById("countdown").dataset.saleStartTime;
    const saleEndTime = document.getElementById("countdown").dataset.saleEndTime;
    updateCountdown(parseInt(saleStartTime), parseInt(saleEndTime)); // Pass start and end time
};



