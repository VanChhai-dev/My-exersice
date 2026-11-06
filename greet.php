<?php
require 'common.php';
 

function greet(string $name): string
{
    $name = trim($name) !== '' ? trim($name) : 'និស្សិត';
    return "សួស្តី {$name}! ស្វាគមន៍មកកាន់ សាកលវិទ្យាល័យអង្គរ (Angkor University)";
}
 
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = greet((string)($_POST['name'] ?? ''));
}
 
page_head('  ស្វាគមន៍', 'មកកាន់បញ្ចីឈ្មោះ');
?>
<form method="post">
    <label>ឈ្មោះរបស់អ្នក</label>
    <input type="text" name="name" placeholder="បញ្ចូលឈ្មោះរបស់អ្នក" required>
    <button>បង្ហាញសារ</button>
</form>
<?php if ($result !== null): ?><pre class="out"><?= e($result) ?></pre><?php endif;
page_foot();