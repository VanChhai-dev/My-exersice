<?php
require 'common.php';
$items = [
    '01_greet.php'            => '១. greet() — សារស្វាគមន៍',
    '02_server_datetime.php'  => '២. serverDateTime() — កាលបរិច្ឆេទ Server',
    '03_invoice.php'          => '៣. calcInvoice() — Invoice',
    '04_profile.php'          => '៤. profileTable() — Profile Table',
    '05_check_extension.php'  => '៥. checkExtension() — PHP Extension',
    '06_server_info.php'      => '៦. serverInfo() — ព័ត៌មាន Server',
    '07_nav_active.php'       => '៧. navLink() — Navbar Active',
    '08_get_vs_post.php'      => '៨. requestInfo() — GET vs POST',
    '09_usd_to_khr.php'       => '៩. usdToKhr() — USD → រៀល',
    '10_http_status.php'      => '១០. httpStatusExplain() — HTTP Status',
];
page_head('មេរៀនទី ១ — 10 Functions & Forms', 'សាកលវិទ្យាល័យអង្គរ | សឿង លីម');
foreach ($items as $file => $label) {
    echo '<p><a href="' . e($file) . '">' . e($label) . '</a></p>';
}
echo '</div></body></html>';
 