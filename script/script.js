document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("carousel");
    const elements = Array.from(carousel.children);
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    let activeIndex = 0; // Start with the first element as active

    // Function to update the active class
    const updateActive = () => {
        elements.forEach((el, i) => {
            el.classList.toggle("active", i === activeIndex);
        });
    };

    // Move to the next element
    const moveToNext = () => {
        // Transition carousel to the left
        carousel.style.transition = "transform 0.5s ease-in-out";
        carousel.style.transform = `translateX(-${elements[0].offsetWidth + 48}px)`;

        // After transition ends
        carousel.addEventListener(
            "transitionend",
            () => {
                carousel.style.transition = "none"; // Disable transition for reset
                carousel.appendChild(elements[0]); // Move the first element to the end
                elements.push(elements.shift()); // Update the array to match DOM
                carousel.style.transform = "translateX(0)"; // Reset position

                activeIndex = 0; // Ensure the active index is always the first in the array
                updateActive(); // Update active class
            },
            { once: true }
        );
    };

    // Move to the previous element
    const moveToPrev = () => {
        // Transition carousel to the right
        carousel.style.transition = "transform 0.5s ease-in-out";
        carousel.style.transform = `translateX(${elements[0].offsetWidth + 48}px)`;

        // After transition ends
        carousel.addEventListener(
            "transitionend",
            () => {
                carousel.style.transition = "none"; // Disable transition for reset
                carousel.insertBefore(elements[elements.length - 1], elements[0]); // Move last element to the start
                elements.unshift(elements.pop()); // Update the array to match DOM
                carousel.style.transform = "translateX(0)"; // Reset position

                activeIndex = 0; // Ensure the active index is always the first in the array
                updateActive(); // Update active class
            },
            { once: true }
        );
    };

    // Event listeners for buttons
    nextBtn.addEventListener("click", moveToNext);
    prevBtn.addEventListener("click", moveToPrev);

    // Set initial active element
    updateActive();
});


function toggle_items(item_name) {
    const element = document.querySelector(item_name);
    if (element) {
        element.classList.toggle("active");
    } else {
        console.error(`Element not found for selector: ${item_name}`);
    }
}

function toggle_mobile_nav() {
    toggle_items(".m_ham");
    toggle_items(".m_nav");
}


function incrementOrderItem() {
    const orderItem = document.querySelector('.order_item h4');
    if (orderItem) {

         let currentNumber = parseInt(orderItem.textContent.trim(), 10);

         currentNumber = (currentNumber % 3) + 1;

         orderItem.textContent = currentNumber.toString().padStart(2, '0');
    }
}

// Run the function every 5 seconds

function switch_images() {
    const element = document.querySelector('.h1'); // Select the initial element
    const classes = ['h1', 'h2', 'h3']; // Define the class list
    let currentIndex = 0; // Start with the first class

    setInterval(() => {
        // Remove all other classes except the base class
        element.classList.remove(...classes);

        // Determine the next class index
        currentIndex = (currentIndex + 1) % classes.length;

        // Add the next class to the class list
        element.classList.add(classes[currentIndex]);
    }, 10000);
}




switch_images();
setInterval(incrementOrderItem, 10000);
 
