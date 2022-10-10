<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

namespace xvrart\request;

class SpaceDetailRequest extends \xvrart\BaseRequest
{
    public string $api_name = 'space/detail';

    public ?int $hub_id = null;

    public function getData(): array
    {
        $data = [];
        $this->hub_id !== null && $data['hub_id'] = $this->hub_id;
        return $data;
    }
}
