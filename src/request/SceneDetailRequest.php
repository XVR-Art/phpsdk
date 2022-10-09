<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

namespace xvrart\request;

class SceneDetailRequest extends \xvrart\BaseRequest
{
    public string $api_name = 'scene/detail';

    public ?string $scene_sid = null;

    public function getData(): array
    {
        $data = [];
        $this->scene_sid !== null && $data['scene_sid'] = $this->scene_sid;
        return $data;
    }
}
