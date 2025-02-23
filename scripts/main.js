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

// Смена темы (темная/светлая)
function toggleTheme() {
    // Переключаем классы на body
    document.body.classList.toggle('light-theme');
    document.body.classList.toggle('dark-theme');

    // Меняем иконки
    let themeIcon = document.getElementById('theme-icon');
    if (document.body.classList.contains('light-theme')) {
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
    } else {
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
    }
}

// Подключаем обработчик события для кнопки смены темы
document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("theme-toggle");
    const body = document.body;

    // Проверяем, сохранена ли тема в localStorage
    if (localStorage.getItem("theme") === "light") {
        body.classList.add("light-theme");
        themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
    } else {
        body.classList.add("dark-theme");
        themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
    }

    // Переключение темы при клике
    themeToggle.addEventListener("click", function () {
        if (body.classList.contains("light-theme")) {
            body.classList.remove("light-theme");
            body.classList.add("dark-theme");
            themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            localStorage.setItem("theme", "dark");
        } else {
            body.classList.remove("dark-theme");
            body.classList.add("light-theme");
            themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
            localStorage.setItem("theme", "light");
        }
    });
});
