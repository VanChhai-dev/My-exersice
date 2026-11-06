<?php
require 'common.php';

function navLink(string $file, string $label, string $current): string
{
    $class = ($current === $file) ? 'nav active' : 'nav';
    return '<a href="' . e($file) . '" class="' . $class . '">' . e($label) . '</a>';
}

$allowed = ['index.php', 'about.php', 'contact.php'];
$current = basename($_SERVER['PHP_SELF']); 


$page = $current;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $page = in_array($_POST['page'] ?? '', $allowed, true) ? $_POST['page'] : 'index.php';
}

page_head('Navbar Active Class', "");
?>
<form method="post">
    <label>ក្លែងធ្វើថាកំពុងនៅទំព័រ៖</label>
    <select name="page">
        <?php foreach ($allowed as $p): ?>
            <option value="<?= e($p) ?>" <?= ($page === $p) ? 'selected' : '' ?>><?= e($p) ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">បង្ហាញ Navbar</button>
</form>

<div class="navbar" style="margin-top: 15px;">
    <?= navLink('index.php', 'Home', $page) ?>
    <?= navLink('about.php', 'About', $page) ?>
    <?= navLink('contact.php', 'Contact', $page) ?>
</div>

<p class="desc" style="margin-top:12px">ឯកសារពិតនេះ៖ <b><?= e($current) ?></b></p>
<?php page_foot(); ?>