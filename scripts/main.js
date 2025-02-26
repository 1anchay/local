// Инициализация particles.js для пузырьков
function initParticles() {
    particlesJS('particles-js', {
        "particles": {
            "number": {
                "value": 100,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#f39c12"
            },
            "shape": {
                "type": "circle"
            },
            "opacity": {
                "value": 0.5,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 1,
                    "opacity_min": 0.1
                }
            },
            "size": {
                "value": 5,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 2,
                    "size_min": 0.1
                }
            },
            "line_linked": {
                "enable": false
            },
            "move": {
                "enable": true,
                "speed": 2,
                "direction": "random",
                "random": true,
                "out_mode": "out"
            }
        },
        "retina_detect": true
    });
}

// Функция переключения темы (темная/светлая)
function toggleTheme() {
    const body = document.body;
    const themeIcon = document.getElementById("theme-icon");

    // Переключаем классы
    body.classList.toggle("light-theme");
    body.classList.toggle("dark-theme");

    // Проверяем, какая тема сейчас активна, и сохраняем её
    if (body.classList.contains("light-theme")) {
        localStorage.setItem("theme", "light");
        themeIcon.classList.replace("fa-sun", "fa-moon");
    } else {
        localStorage.setItem("theme", "dark");
        themeIcon.classList.replace("fa-moon", "fa-sun");
    }
}

// При загрузке страницы проверяем, какая тема сохранена
document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("theme-toggle");
    const themeIcon = document.getElementById("theme-icon");
    const body = document.body;

    // Устанавливаем тему из localStorage
    const savedTheme = localStorage.getItem("theme") || "dark";
    body.classList.add(savedTheme);
    
    // Устанавливаем правильную иконку
    if (savedTheme === "light") {
        themeIcon.classList.replace("fa-sun", "fa-moon");
    } else {
        themeIcon.classList.replace("fa-moon", "fa-sun");
    }

    // Обработчик клика для смены темы
    themeToggle.addEventListener("click", toggleTheme);
});

// Инициализируем частицы
initParticles();
