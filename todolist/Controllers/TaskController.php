<?php
require_once 'models/Task.php';

class TaskController {
    public function index($highlightId = null, $message = '') {
        $tasks = Task::all();
        $this->render('tasks/index', [
            'tasks' => $tasks,
            'highlightId' => $highlightId,
            'message' => $message,
        ]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newTaskId = uniqid(); // ID unik untuk tugas baru
            Task::create($_POST['title'], $newTaskId);
            $this->index($newTaskId, "Tugas berhasil ditambahkan!");
            exit;
        }

        $this->render('tasks/create');
    }

    public function delete() {
        if (isset($_GET['id'])) {
            Task::delete($_GET['id']);
            $this->index(null, "Tugas berhasil dihapus!");
            exit;
        }

        $this->index(null, "ID tugas tidak ditemukan!");
    }

    private function render($view, $data = []) {
        extract($data);
        require "views/layout.php";
    }
}
