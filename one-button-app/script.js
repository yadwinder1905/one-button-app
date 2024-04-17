document.addEventListener('DOMContentLoaded', function () {
    const incrementButton = document.getElementById('incrementButton');
    const counterValue = document.getElementById('counterValue');

    incrementButton.addEventListener('click', function () {
        // Increment the counter value displayed on the page
        let currentValue = parseInt(counterValue.textContent);
        currentValue++;
        counterValue.textContent = currentValue;

        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'php/backend.php?action=increment', true);
        xhr.send();
    });
});
