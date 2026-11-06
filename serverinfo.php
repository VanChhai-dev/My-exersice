<?php
require 'common.php';
 

function serverInfo(): array
{
    return [
        'Server Software'  => $_SERVER['SERVER_SOFTWARE'] ?? 'N/A',
        'PHP Version'      => phpversion(),
        'Operating System' => PHP_OS,
        'Server Name'      => $_SERVER['SERVER_NAME'] ?? 'N/A',
        'Server Port'      => $_SERVER['SERVER_PORT'] ?? 'N/A',
        'Document Root'    => $_SERVER['DOCUMENT_ROOT'] ?? 'N/A',
    ];
}
 
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = '';
    foreach (serverInfo() as $k => $v) {
        $result .= str_pad($k, 18) . ': ' . $v . "\n";
    }
}
 
page_head('ព័ត៌មាន Web Server', '');
?>
<form method="post">
    <button>បង្ហាញព័ត៌មាន Server</button>
</form>
<?php if ($result !== null): ?><pre class="out"><?= e($result) ?></pre><?php endif;
page_foot();