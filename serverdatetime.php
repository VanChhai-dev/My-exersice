<?php
require 'common.php';
 

function serverDateTime(string $tz): string
{
    if (!in_array($tz, timezone_identifiers_list(), true)) {
        $tz = 'Asia/Phnom_Penh';
    }
    $dt = new DateTime('now', new DateTimeZone($tz));
    return $tz . ' → ' . $dt->format('Y-m-d H:i:s A');
}
 
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = serverDateTime((string)($_POST['tz'] ?? ''));
}
 
page_head(' កាលបរិច្ឆេទ Server', '');
?>
<form method="post">
    <label>ជ្រើសរើស Timezone</label>
    <select name="tz">
        <option>Asia/Phnom_Penh</option>
        <option>Asia/Tokyo</option>
        <option>Europe/London</option>
        <option>America/New_York</option>
    </select>
    <button>មើលម៉ោង</button>
</form>
<?php if ($result !== null): ?><pre class="out"><?= e($result) ?></pre><?php endif;
page_foot();