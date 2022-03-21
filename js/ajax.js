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



// вывод тасков
function showTask() {
    $.ajax({
        url: "../config/show_task.php",
        type: "POST",
        success: (data) => {
            $(".todo__list").html(data);
        }
    });
}

showTask();
// ajax запрос на добавление таска

$('.new-task').click(function(el) {
    el.preventDefault();
    let title_task = $('[name="title_task"]').val();
    let desc_task = $('[name="desc_task"]').val();

    $.ajax({
        url: "../config/insert_task.php",
        method: "POST",
        cache: false,
        data: {
            'title_task': title_task,
            'desc_task': desc_task,
        },
        success: (data) => {
            showTask()
            title_task = "";
            desc_task = "";
        }
    });
})