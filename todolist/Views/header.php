<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Todo List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .task {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .completed {
            text-decoration: line-through;
            color: #888;
        }
        .actions {
            margin-left: auto;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 3px;
            margin-left: 5px;
            cursor: pointer;
        }
        .btn-primary { background-color: #007bff; }
        .btn-danger { background-color: #dc3545; }
        .btn-success { background-color: #28a745; }
        .task-form {
            display: flex;
            margin-bottom: 20px;
        }
        .task-form input {
            flex-grow: 1;
            padding: 10px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">