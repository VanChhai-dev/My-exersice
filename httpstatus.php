<?php
require 'common.php';
 

function httpStatusExplain(int $code): string
{
    return match ($code) {
        200 => '200 OK → សំណើ (Request) ជោគជ័យ',
        301 => '301 Moved Permanently → ប្តូរទិសអចិន្ត្រៃយ៍ (Redirect)',
        302 => '302 Found → ប្តូរទិសបណ្តោះអាសន្ន (Redirect)',
        404 => '404 Not Found → រក File/URL មិនឃើញ (ខុសទីតាំង ឬឈ្មោះ)',
        500 => '500 Internal Server Error → កូដ PHP មាន Error (Syntax/Logic)',
        default => "{$code} → មិនមានក្នុងមេរៀនទី ១",
    };
}
 
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = httpStatusExplain((int)($_POST['code'] ?? 0));
}
 
page_head(' ពន្យល់ HTTP Status Code', '');
?>
<form method="post">
    <label>ជ្រើសរើស Status Code</label>
    <select name="code">
        <option>200</option><option>301</option><option>302</option>
        <option>404</option><option>500</option><option>403</option>
    </select>
    <button>ពន្យល់</button>
</form>
<?php if ($result !== null): ?><pre class="out"><?= e($result) ?></pre><?php endif;
page_foot();