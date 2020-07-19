<?php

require_once("phpQuery-onefile.php");

$webPage = file_get_contents("https://freelance.levtech.jp/");

echo phpQuery::newDocument($webPage)->find('.searchTab__body')->find('div')->text();