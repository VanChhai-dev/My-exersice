<?php
require 'common.php';

function requestInfo(): string
{
    $method = $_SERVER['REQUEST_METHOD'] ?? 'N/A';
    $data = $method === 'POST' ? $_POST : $_GET;
    $out = "Method: {$method}\n";
    foreach ($data as $k => $v) {
        $out .= "  {$k} = " . (is_string($v) ? $v : json_encode($v)) . "\n";
    }
    return $out;
}

$result = null;
if (!empty($_POST) || !empty($_GET)) {
    $result = requestInfo();
}

page_head('៨. requestInfo() — GET ធៀបនឹង POST', 'HTTP Methods | Bloom C2');
?>
<form method="post">  
    <label>Username</label><input type="text" name="username" value="student01">
    <label>Password</label><input type="password" name="password" value="123456">
    <button type="submit">បញ្ជូនតាម POST</button>
</form>
<?php if ($result !== null): ?><pre class="out"><?= e($result) ?></pre><?php endif; ?>
<p class="desc">សម្គាល់៖ ការប្រើប្រាស់ POST ជួយលាក់ទិន្នន័យ (Password) មិនឱ្យបង្ហាញលើ URL ដូចការប្រើ GET នោះទេ។</p>
<?php page_foot(); ?>