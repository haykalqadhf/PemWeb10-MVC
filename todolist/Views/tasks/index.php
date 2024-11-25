<?php if (!empty($message)): ?>
    <div class="alert alert-success">
        <?= htmlspecialchars($message); ?>
    </div>
<?php endif; ?>

<div class="task-container">
    <a href="index.php?action=create" class="btn btn-primary">Tambah Tugas</a>
    <ul class="task-list">
        <?php foreach ($tasks as $task): ?>
            <li class="task-item <?= isset($highlightId) && $task['id'] === $highlightId ? 'highlight' : ''; ?>">
                <span><?= htmlspecialchars($task['title']); ?></span>
                <a href="index.php?action=delete&id=<?= $task['id']; ?>" class="btn btn-danger">Hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>