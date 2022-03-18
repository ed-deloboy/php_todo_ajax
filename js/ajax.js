let dateBlock = document.querySelector('.date-block');
let timeBlock = document.querySelector('.time-block');
let readyBtn = document.querySelectorAll('.ready-btn');
let itemTaskLi = document.querySelectorAll('.task-item');

function datePage() {
    fetch("../config/date.php")
        .then(res => {
            return res.text()
        })
        .then(date => {
            dateBlock.textContent = date;
        })
}

datePage();


function timeonPage() {
    fetch("../config/time.php")
        .then(res => {
            return res.text()
        })
        .then(time => {
            timeBlock.textContent = "Текущее время " + time;
        })
}

timeonPage();

setInterval(timeonPage, 1000);

itemTaskLi.forEach(el => {
    el.addEventListener('click', () => {
        el.classList.toggle('ready-active');
    })

})