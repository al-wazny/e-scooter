<?php

class Pages extends Controller {

    private $pagesModel;
    private $authModel;
    private $todoModel;

    public function __construct()
    {
        $this->authModel = $this->model('authenticationModel');
    }

    public function index () // default method if there is no method
    {
<<<<<<< HEAD
        $this->view('index');
=======


        $this->view('index', $data);
>>>>>>> c48d043ec287f0c1fe87388d04d2f50ca207a33e
    }

    public function create ()
    {
        $types = $this->pagesModel->getTypess();

        $data = [
            'type' => $types,
            'form_title' => 'Add',
            'method' => 'addTodo',
        ];

        $this->view('pages/create', $data);

    }

    public function editTodo($todo)
    {
        $currentTask = $this->pagesModel->getSingleTodo($todo['id']);

        if (!$this->authModel->isAuthorized($currentTask->user_id)) {
            return header("location: index.php");
        }

        $types = $this->pagesModel->getTypes();

        $data = [
            'type' => $types,
            'todo' => $currentTask,
            'selected-type' => $currentTask->task_type,
            'form_title' => 'Edit',
            'method' => 'updateTodo',
            'user_id' => $_SESSION['user'],
        ];

        $this->view('pages/create', $data);
    }

    public function Types($task)
    {

        $todo = $this->pagesModel->getSingleTodo($task['task-id']);

        if ($this->authModel->isAuthorized($todo->user_id) || $task['method'] === "addTodo")
        {
            if (isset($_GET['add-new-type']))
            {
                $this->addType($task);
            }
            elseif (isset($_GET['edit-type']))
            {
                $this->editType($task);
            }
        } else {
            $data = $this->pagesModel->getFormData($task['method'], $task['title'], null);
            $data['error'] = 'So nicht mein Lieber, so nicht!';

            $this->view('pages/create', $data);
        }
    }

    public function addType($task)
    {
        $data = $task;
        $this->view('pages/addType', $data);
    }

    public function editType($task)
    {
        $types = $this->pagesModel->getTypes();

        $data = [
            'types' => $types,
            'todo' => $task['task-id'],
            'method' => $task['method'],
            'form_title' => $task['title'],
            'user_id' => $task['user_id'],
        ];

        $this->view('pages/editType', $data);
    }
}
