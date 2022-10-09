<p align="center">
    <a href="https://xvr.art/?ref=github_repo_hubsapi" target="_blank">
        <img src="https://xvr.oss-cn-hangzhou.aliyuncs.com/common/logo-dark-icon.png" height="100px">
    </a>
    <h1 align="center">XVR元宇宙 - PHPSDK</h1>
    <br>
</p>

## API列表

1. 场景
   1. 场景列表
   2. 场景详情
   3. 更新场景
2. 空间
   1. 空间列表
   2. 空间详情
   3. 创建空间
   4. 更新空间(转移/启用/停用)
3. 账号
   1. 账号列表
   2. 账号详情
   3. 创建账号
   4. 更新账号(启用/停用)

## 安装

国内用户建议使用[阿里云的Composer镜像](https://developer.aliyun.com/composer)来提升下载体验

```
composer require xvrart/phpsdk
```

## 使用范例

```php
use xvrart\Client;
use xvrart\request\SpaceCreateRequest;

$req = new SpaceCreateRequest();
$req->setData([
    // 'hub_sid' => '', // 唯一, 不传入会自动生成
    'created_by_account_id' => 1338662375435272265,
    'scene_id' => 1266457025731100701,
    'name' => '测试空间-' . time(),
    'room_size' => 10,
    'description' => '又一个全新的VR空间',
    'entry_mode' => 'allow' // deny
]);

$config = [
    'gateway' => 'http://localhost/v1/',
    'access_token' => 'kTXGCNpcP4BkU',
    'secret_key' => 'kTXBkUkTXGCNpcpcP4BkP4BkUkTXGCNpcP4GCNpcP4BkUkTXGCNU',
];
$client = new Client($config);
$rs = $client->execute($req);
print_r($rs);
```

## 测试

私有化部署后, 联系客服获取网关和密钥即可测试, 更多范例详见 [./tests](./tests) 目录

```sh
# 获取场景列表

cd ./tests
php SceneList.php
```
