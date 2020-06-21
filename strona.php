<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$is_admin = $_SESSION['admin'] ?? false;
?>

<p>Treść dla zwykłego użytkownika</p>

<?php if ($is_admin): ?>
<p>Dodatkowa treść dla administratora</p>
<?php endif; ?>