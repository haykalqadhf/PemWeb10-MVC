<?php
class Task {
    private static $filePath = 'storage/tasks.json';

    public static function all() {
        if (!file_exists(self::$filePath)) {
            return [];
        }
        $json = file_get_contents(self::$filePath);
        return json_decode($json, true) ?: [];
    }

    public static function save($tasks) {
        file_put_contents(self::$filePath, json_encode($tasks, JSON_PRETTY_PRINT));
    }

    public static function create($title, $id) {
        $tasks = self::all();
        $tasks[] = ['id' => $id, 'title' => $title, 'completed' => false];
        self::save($tasks);
    }

    public static function delete($id) {
        $tasks = self::all();
        $tasks = array_filter($tasks, fn($task) => $task['id'] !== $id);
        self::save($tasks);
    }
}
