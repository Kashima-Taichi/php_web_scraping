<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://freelance.levtech.jp/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($ch);
if ($html === false) {
    exit('フリーランス情報のフェッチに失敗');
}

$doc = new DOMDocument;
@$doc->loadHTML($html);

$xpath = new DOMXpath($doc);

$nodes = $xpath->query('//div[@class="searchTab__body"][1]');

foreach ($nodes as $key => $value) {
    echo $key . ':' . $node->textContent, PHP_EOL;
}