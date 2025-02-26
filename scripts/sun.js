document.addEventListener("DOMContentLoaded", () => {
    const themeToggle = document.getElementById("theme-toggle");
    const themeIcon = document.getElementById("theme-icon");
    const body = document.body;

    // Проверяем сохранённую тему
    if (localStorage.getItem("theme") === "dark") {
        body.classList.add("dark-mode");
        themeIcon.innerHTML = `<circle cx="12" cy="12" r="5" fill="gray"></circle>`; // Луна
    }

    // При клике меняем тему
    themeToggle.addEventListener("click", () => {
        body.classList.toggle("dark-mode");

        if (body.classList.contains("dark-mode")) {
            themeIcon.innerHTML = `<circle cx="12" cy="12" r="5" fill="gray"></circle>`; // Луна
            localStorage.setItem("theme", "dark");
        } else {
            themeIcon.innerHTML = `<circle cx="12" cy="12" r="5" fill="yellow"></circle>`; // Солнце
            localStorage.setItem("theme", "light");
        }
    });
});
