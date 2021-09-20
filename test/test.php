<?php
/**
 * Project xml2json-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/21/2021
 * Time: 01:27
 */
require_once __DIR__ . '/../vendor/autoload.php';

use nguyenanhung\Libraries\XML2JSON\Xml2Json;

$xml = '<?xml version="1.0" encoding="UTF-8"?>
<books>
    <book id="1">
        <title>Code Generation in Action</title>
        <author><first>Jack</first><last>Herrington</last></author>
        <publisher>Manning</publisher>
    </book>

    <book id="2">
        <title>PHP Hacks</title>
        <author><first>Jack</first><last>Herrington</last></author>
        <publisher>OReilly</publisher>
    </book>

    <book id="3">
        <title>Podcasting Hacks</title>
        <author><first>Jack</first><last>Herrington</last></author>
        <publisher>OReilly</publisher>
    </book>
</books>';

$convert = new Xml2Json();

echo "XML Raw String: " . $xml . PHP_EOL;
echo "XML to JSON Result: " . $convert::fromXml($xml, false) . PHP_EOL;