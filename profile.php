<?php
require 'common.php';
 

function profileTable(string $name, string $major, int $year): string
{
    return '<table class="t">'
        . '<tr><th>ឈ្មោះ</th><td>' . e($name) . '</td></tr>'
        . '<tr><th>ជំនាញ</th><td>' . e($major) . '</td></tr>'
        . '<tr><th>ឆ្នាំសិក្សា</th><td>ឆ្នាំទី ' . $year . '</td></tr>'
        . '</table>';
}
 
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = profileTable(
        (string)($_POST['name'] ?? ''), (string)($_POST['major'] ?? ''), (int)($_POST['year'] ?? 1)
    );
}
 
page_head(' Profile ក្នុង HTML Table', 'បង្កប់ PHP ក្នុង HTML ');
?>
<form method="post">
    <label>ឈ្មោះ</label><input type="text" name="name" required>
    <label>ជំនាញ</label><input type="text" name="major" value="Computer Science" required>
    <label>ឆ្នាំសិក្សា</label>
    <select name="year"><option>1</option><option>2</option><option>3</option><option>4</option></select>
    <button>បង្កើត Table</button>
</form>
<?php if ($result !== null) echo $result;
page_foot();