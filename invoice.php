<?php
require 'common.php';
 

function calcInvoice(float $p1, float $p2, float $p3, float $discountPercent): array
{
    $subtotal = $p1 + $p2 + $p3;
    $discount = $subtotal * ($discountPercent / 100);
    return ['subtotal' => $subtotal, 'discount' => $discount, 'total' => $subtotal - $discount];
}
 
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inv = calcInvoice(
        (float)($_POST['p1'] ?? 0), (float)($_POST['p2'] ?? 0),
        (float)($_POST['p3'] ?? 0), (float)($_POST['disc'] ?? 0)
    );
    $result = sprintf("Subtotal : %.2f $\nDiscount : %.2f $\nTotal    : %.2f $",
        $inv['subtotal'], $inv['discount'], $inv['total']);
}
 
page_head(' គណនា Invoice', 'Subtotal, Discount, Total ');
?>
<form method="post">
    <label>តម្លៃទំនិញទី ១ ($)</label><input type="number" step="0.01" name="p1" value="0" required>
    <label>តម្លៃទំនិញទី ២ ($)</label><input type="number" step="0.01" name="p2" value="0" required>
    <label>តម្លៃទំនិញទី ៣ ($)</label><input type="number" step="0.01" name="p3" value="0" required>
    <label>បញ្ចុះតម្លៃ (%)</label><input type="number" step="0.01" name="disc" value="0" required>
    <button>គណនា</button>
</form>
<?php if ($result !== null): ?><pre class="out"><?= e($result) ?></pre><?php endif;
page_foot();