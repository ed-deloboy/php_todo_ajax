<?php
require "db_conn.php";


$tasks = mysqli_query($conn, "SELECT * FROM `tasks` ORDER BY id DESC");
// $tasks = mysqli_fetch_all($tasks);

if(mysqli_num_rows($tasks) > 0) {
    while($row = mysqli_fetch_assoc($tasks)) {
?>

<li class="mb-4 bg-light p-3 shadow task-item">
    <div class="d-flex justify-content-between">
        <div class="col-8">
            <p class="h3">
                <?php echo $row["task_title"];?>
            </p>
            <p>
                <?php echo $row["task_desc"];?>
            </p>
        </div>
        <div class="d-flex flex-column" action="" method="post">
            <a href="config/delete_task.php?id=<?php echo $row["id"];?>" class="btn link-danger">Удалить</a>
            <!-- <button class="ready-btn btn text-success">Сделал</button> -->
        </div>
    </div>
    <span class="text-black-50 date-task">Создано <?php echo $row["date"];?> в <?php echo $row["time"];?></span>
</li>

<?php
    }
}
?>
