<?php
require 'common.php';
 

function usdToKhr(float $usd, float $rate = 4100.0): string
{
    return number_format($usd, 2) . ' USD = ' . number_format($usd * $rate) . ' ៛ (Rate: ' . number_format($rate) . ')';
}
 
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = usdToKhr((float)($_POST['usd'] ?? 0), (float)($_POST['rate'] ?? 4100));
}
 
page_head('បម្លែងលុយ USD → រៀល', '');
?>
<form method="post">
    <label>ចំនួនដុល្លារ ($)</label><input type="number" step="0.01" name="usd" value="10" required>
    <label>អត្រាប្តូរប្រាក់ (៛ ក្នុង ១ $)</label><input type="number" name="rate" value="4100" required>
    <button>បម្លែង</button>
</form>
<?php if ($result !== null): ?><pre class="out"><?= e($result) ?></pre><?php endif;
page_foot();