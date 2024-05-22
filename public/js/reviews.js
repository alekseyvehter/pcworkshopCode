document.addEventListener("DOMContentLoaded", function() {
    var maxCharacters = 127;
    var reviewDescriptions = document.querySelectorAll('.review-description');

    reviewDescriptions.forEach(function(description) {
        var content = description.querySelector('p').textContent;
        var originalContent = content;

        if (content.length > maxCharacters) {
            var shortContent = content.substring(0, maxCharacters);
            var remainingContent = content.substring(maxCharacters);
            description.querySelector('p').textContent = shortContent + '...';
            var readMoreButton = document.createElement('button');
            readMoreButton.classList.add('read-more');
            readMoreButton.innerText = 'Читать далее';
            description.appendChild(readMoreButton);

            readMoreButton.addEventListener('click', function() {
                description.querySelector('p').textContent = originalContent;
                readMoreButton.style.display = 'none'; // Скрыть кнопку после раскрытия текста

                var readLessButton = document.createElement('button');
                readLessButton.classList.add('read-less');
                readLessButton.innerText = 'Читать менее';
                description.appendChild(readLessButton);

                readLessButton.addEventListener('click', function() {
                    description.querySelector('p').textContent = shortContent + '...';
                    readMoreButton.style.display = 'block';
                    readLessButton.style.display = 'none';
                });
            });
        }
    });
});
