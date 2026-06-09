document.addEventListener("DOMContentLoaded", () => {
    const forms = document.querySelectorAll(".universal-form");

    forms.forEach((form) => {
        form.addEventListener("submit", async (e) => {
        e.preventDefault(); // Стопаем перезагрузку страницы

        const btn = form.querySelector("button");
        const formData = new FormData(form);
        const originalBtnText = btn.textContent;

        btn.disabled = true;
        btn.textContent = "Отправка...";

        try {
            // Путь до твоего PHP файла
            const response = await fetch("/mail.php", {
            method: "POST",
            body: formData,
            });

            if (response.ok) {
            alert("Спасибо! Мы свяжемся с вами.");
            form.reset(); // Очищаем форму
            } else {
            alert("Ошибка сервера. Попробуйте позже.");
            }
        } catch (error) {
            alert("Ошибка сети. Проверьте соединение.");
        } finally {
            btn.disabled = false;
            btn.textContent = originalBtnText;
        }
        });
    });
});
