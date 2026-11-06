<?php
declare(strict_types=1);
date_default_timezone_set('Asia/Phnom_Penh');

function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function page_head(string $title, string $desc): void
{
    echo '<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>' . e($title) . '</title>
    <style>
        body {
            font-family: "Khmer OS Siemreab", "Segoe UI", sans-serif;
            background: #F1F5F9;
            color: #1E293B;
            margin: 0;
            padding: 20px;
        }
        .card {
            background: #fff;
            border: 1px solid #CBD5E1;
            border-radius: 10px;
            padding: 18px 22px;
            max-width: 560px;
            margin: 30px auto;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .05);
        }
        h2 {
            margin: 0 0 4px;
            color: #4F46E5;
        }
        .desc {
            color: #64748B;
            margin: 0 0 12px;
            font-size: 14px;
        }
        label {
            display: block;
            font-size: 14px;
            margin-top: 8px;
        }
        input, select {
            width: 100%;
            padding: 7px 9px;
            border: 1px solid #CBD5E1;
            border-radius: 6px;
            box-sizing: border-box;
            font-family: inherit;
        }
        button {
            margin-top: 12px;
            background: #4F46E5;
            color: #fff;
            border: 0;
            padding: 9px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-family: inherit;
        }
        button:hover {
            background: #4338CA;
        }
        pre.out {
            background: #F1F5F9;
            border-left: 4px solid #0078D4;
            padding: 10px;
            margin-top: 14px;
            white-space: pre-wrap;
            color: #0078D4;
            font-weight: 600;
        }
        .t {
            border-collapse: collapse;
            margin-top: 14px;
            width: 100%;
        }
        .t th, .t td {
            border: 1px solid #CBD5E1;
            padding: 6px 8px;
            text-align: left;
        }
        .t th {
            background: #E0E7FF;
            width: 35%;
        }
        .navbar {
            margin-top: 14px;
            padding: 8px;
            background: #0F172A;
            border-radius: 6px;
        }
        a.nav {
            color: #CBD5E1;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            margin-right: 4px;
        }
        a.nav.active {
            background: #4F46E5;
            color: #fff;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="card">
    <h2>' . e($title) . '</h2>
    <p class="desc">' . e($desc) . '</p>';
}

function page_foot(): void
{
    echo '<a class="back" href="index.php">← ត្រឡប់ទៅបញ្ជីមេរៀន</a>
</div>
</body>
</html>';
}