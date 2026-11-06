<?php
require 'common.php';
 
// FUNCTION
function checkExtension(string $ext): string
{
    $ext = strtolower(trim($ext));
    return extension_loaded($ext)
        ? "✅ Extension '{$ext}' ត្រូវបាន Loaded (Enabled)"
        : "❌ Extension '{$ext}' មិនទាន់ Loaded (Disabled)";
}
 
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = checkExtension((string)($_POST['ext'] ?? ''));
}
 
page_head('៥. checkExtension() — ពិនិត្យ PHP Extension', 'extension_loaded() | Bloom C6 (Lab 1.8)');
?>
<form method="post">
    <label>ជ្រើសរើស Extension</label>
    <select name="ext">
        <option>pdo_mysql</option><option>mysqli</option>
        <option>curl</option><option>mbstring</option><option>gd</option>
    </select>
    <button>ពិនិត្យ</button>
</form>
<?php if ($result !== null): ?><pre class="out"><?= e($result) ?></pre><?php endif;
page_foot();  