const menuItems = {
    appetizers: [
        "Bruschetta",
        "Caesar Salad",
        "Mozzarella Sticks",
    ],
    mainCourses: [
        "Spaghetti Carbonara",
        "Chicken Alfredo",
        "Steak with Mashed Potatoes",
    ],
    desserts: [
        "Tiramisu",
        "Chocolate Fondue",
        "New York Cheesecake",
    ],
};

const menuSection = document.getElementById("menu");
const appetizersLink = document.getElementById("appetizers-link");
const mainCoursesLink = document.getElementById("main-courses-link");
const dessertsLink = document.getElementById("desserts-link");

appetizersLink.addEventListener("click", () => displayMenu("appetizers"));
mainCoursesLink.addEventListener("click", () => displayMenu("mainCourses"));
dessertsLink.addEventListener("click", () => displayMenu("desserts"));

function displayMenu(category) {
    const items = menuItems[category];
    const itemList = items.map(item => `<li>${item}</li>`).join("");
    menuSection.innerHTML = `<h2>${category}</h2><ul>${itemList}</ul>`;
}

// Display the appetizers by default
displayMenu("appetizers");
