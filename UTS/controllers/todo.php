<?php 
    function getTodosByUser () {
        include('./configs/connection.php');

        // Captcure User Id from Session
        $user_id = $_SESSION['user_id'];

        // DB Query
        $query = 'SELECT * FROM todos WHERE todo_user_id = ?';
        $stmt = $db->prepare($query);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();
        return $result;
    }

    function createTodo () {
        include('./configs/connection.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Create Todo') {
            // Capture Request Values
            $todo_user_id = $_SESSION['user_id'];
            $todo_name = $_POST['todo_name'];
            $todo_description = $_POST['todo_description'];

            // DB Query
            $query = 'INSERT INTO todos (todo_user_id, todo_name, todo_description) VALUES (?, ?, ?)';
            $stmt = $db->prepare($query);
            $stmt->bind_param('iss', $todo_user_id, $todo_name, $todo_description);
            
            // Execute query
            if ($stmt->execute()) {
                echo '<script>alert("Successfully create todo.");</script>';
            } else {
                echo '<script>alert("Failed to create todo :(, There is an error in internal server.");</script>';
            }
            
            // Close statement
            $stmt->close();
        }
    }

    function deleteTodo() {
        include('./configs/connection.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Delete Todo') {
            // Captcure Request Values
            $todo_id = $_POST['todo_id'];

            // DB Query
            $query = 'DELETE FROM todos WHERE todo_id = ?';
            $stmt = $db->prepare($query);
            $stmt->bind_param('i', $todo_id);

            // Execute query
            if ($stmt->execute()) {
                echo '<script>alert("Successfully delete todo.");</script>';
            } else {
                echo '<script>alert("Failed to delete todo :(, There is an error in internal server.");</script>';
            }
            
            // Close statement
            $stmt->close();
        }
    }

    function setTodoToCompleted () {
        include('./configs/connection.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Completed Todo') {
            // Captcure Request Values
            $todo_id = $_POST['todo_id'];

            // DB Query
            $query = 'UPDATE todos SET todo_iscompleted = 1 WHERE todo_id = ?';
            $stmt = $db->prepare($query);
            $stmt->bind_param('i', $todo_id);

            // Execute query
            if ($stmt->execute()) {
                echo '<script>alert("Successfully set todo to completed.");</script>';
            } else {
                echo '<script>alert("Failed set todo to completed :(, There is an error in internal server.");</script>';
            }
            
            // Close statement
            $stmt->close();
        }
    }
?>