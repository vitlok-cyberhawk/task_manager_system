<?
include '../includes/bootstrap.php';

use exam\Task;

require '../Classes/Task.php';

$objectAdmin = new Task();

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $errors = [];

    if (empty($title)) {
        $errors[] = '<p style="color: red">Please enter a title</p>';
    }
    if (empty($errors)) {
        $objectAdmin->storeTask($title);
        header('Location: main.php');
    }
} ?>
    <div class="content">

        <div class="container">
            <div class="content">
                <h2 class="h-index">Add task</h2>
                <div class="links">
                    <div class="link-a">
                        <a href="assignments.php" class="btn btn-light">Assignments</a>
                    </div>
                    <div class="link-a">
                        <a href="archive.php" class="btn btn-light">Archive</a>
                    </div>
                </div>
                <form class="form" action="create_task.php" method="post">

                    <div class="row g-3 align-items-center">
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>

                    <br>
                    <input type="submit" class="btn btn-primary" value="Create task">
                    <? if (isset($errors)) {
                        foreach ($errors as $error) { ?>
                            <ul>
                                <? echo $error ?>
                            </ul>

                        <? }
                    } ?>
                </form>
                <a href="main.php" class="btn btn-light">Go back</a>
            </div>
        </div>
    </div>

<? include '../includes/footer.php';



