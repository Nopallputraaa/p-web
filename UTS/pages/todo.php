<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Create Todo') {
    createTodo();
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Delete Todo') {
    deleteTodo();
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Completed Todo') {
    setTodoToCompleted();
}
?>

<section class="container">
    <div class="todo-content">
        <div class="todo-left-content">
            <div class="flex justify-between items-center">
                <p class="text-title">My Todo List</p>
                <form action="" method="POST" class="form-groups">
                    <select name="todo_iscompleted" id="filter-status" class="form-select">
                        <option value="">Filter by Completed Status</option>
                        <option value="1">Completed</option>
                        <option value="0">Not Completed</option>
                    </select>
                </form>
            </div>
            <div class="flex flex-col">
                <?php
                $todos = getTodosByUser();

                while ($todo = mysqli_fetch_array($todos)) {
                ?>
                    <div class="card card-full">
                        <div class="card-body">
                            <div class="flex justify-between items-center">
                                <div class="flex flex-col">
                                    <p class="todo-title"><?php echo $todo['todo_name'] ?></p>
                                    <p class="todo-status <?php echo $todo['todo_iscompleted'] === 1 ? 'todo-status-completed' : 'todo-status-notcompleted'; ?>" data-status="<?php echo $todo['todo_iscompleted'] ?>">
                                        <?php echo $todo['todo_iscompleted'] === 1 ? 'Completed' : 'Not Completed'; ?>
                                    </p>
                                    <p class="todo-subtitle"><?php echo $todo['todo_description'] ?></p>
                                </div>
                                <div class="flex">
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return confirmDelete()">
                                        <input type="hidden" name="todo_id" value="<?php echo $todo['todo_id'] ?>">
                                        <input type="submit" name="action" value="Delete Todo" class="btn btn-danger btn-sm">
                                    </form>
                                    <?php if ($todo['todo_iscompleted'] === 0) : ?>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return confirmSetToCompleted()">
                                            <input type="hidden" name="todo_id" value="<?php echo $todo['todo_id'] ?>">
                                            <input type="submit" name="action" value="Completed Todo" class="btn btn-success btn-sm">
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="todo-right-content">
            <p class="text-title">Create Todo</p>
            <div class="card card-full">
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form-groups">
                        <div class="form-group">
                            <label for="todo_name" class="form-label">Todo Name</label>
                            <input type="text" class="form-input" id="todo_name" name="todo_name" placeholder="Input your todo name" required>
                        </div>
                        <div class="form-group">
                            <label for="todo_description" class="form-label">Todo Description</label>
                            <input type="text" class="form-input" id="todo_description" name="todo_description" placeholder="Input your todo description" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="action" value="Create Todo">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>