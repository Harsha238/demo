
document.addEventListener('DOMContentLoaded', function () {
    const colors = ['Red', 'Blue', 'Green', 'Yellow'];
    const targetColor = document.getElementById('target-color');
    const resultText = document.getElementById('result');
    const scoreEl = document.getElementById('score');
    let score = 0;

    function newRound() {
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        targetColor.textContent = randomColor;
        resultText.textContent = '';
    }

    document.querySelectorAll('.color-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            if (this.dataset.color === targetColor.textContent) {
                resultText.textContent = 'Correct!';
                score++;
            } else {
                resultText.textContent = 'Wrong!';
            }
            scoreEl.textContent = score;
            setTimeout(newRound, 1000);
        });
    });

    newRound();
});
