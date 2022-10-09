<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

namespace xvrart;

class Client
{
    public string $gateway;

    public string $access_token;

    public string $secret_key;

    public string $timestamp;

    public string $format = 'json';

    public string $version = '1.0';

    public string $sign_method = 'md5';

    public function __construct(array $config = [])
    {
        foreach ($config as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function execute($req, $debug = false)
    {
        $data = $req->getData();
        $url = rtrim($this->gateway, '/') . '/' . $req->api_name;

        $sysParams = [];
        $sysParams["access_token"] = $this->access_token;
        $sysParams["v"] = $this->version;
        $sysParams["format"] = $this->format;
        $sysParams["sign_method"] = $this->sign_method;
        $sysParams["timestamp"] = time();

        $sysParams['sign'] = $this->sign($sysParams + $data);
        $url .= '?' . http_build_query($sysParams);

        $httpClient = new \GuzzleHttp\Client();
        $req = $httpClient->request('POST', $url, ['json' => $data, 'http_errors' => false]);
        $res = json_decode($req->getBody()->getContents(), true);
        if ($debug) {
            $this->outputDebugInfo($url, $data, $res);
        }

        return $res;
    }

    public function sign($params)
    {
        if (empty($this->secret_key)) {
            throw new \Exception('Secret key not set');
        }

        ksort($params);
        $string = $this->secret_key;
        foreach ($params as $key => $val) {
            $string .= $key . $val;
        }
        $string .= $this->secret_key;

        return strtolower(md5($string));
    }

    public function outputDebugInfo(string $url, array $data, array $res): void
    {
        $postjson = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $result = json_encode($res, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        echo "POST {$url}\n";
        echo "{$postjson}\n";
        echo "{$result}\n";
    }
}
