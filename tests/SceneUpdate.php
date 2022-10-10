<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use xvrart\Client;
use xvrart\request\SceneUpdateRequest;

$req = new SceneUpdateRequest();
$req->setData(['scene_id' => 1266457025731100701, 'scene_sid' => '5fi3HzB', 'name' => '测试修改']);

// 以下代码无需修改

$config = require(__DIR__ . '/config.php');
$client = new Client($config);

$rs = $client->execute($req, true);

$tmp = explode('/', __FILE__);
$resultFile = './results/' . str_replace('.php', '.json', end($tmp));
$result = json_encode($rs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents($resultFile, $result);

echo "{$resultFile}\n";
