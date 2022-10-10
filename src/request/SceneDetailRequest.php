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

    public ?int $scene_id = null;

    public function getData(): array
    {
        $data = [];
        $this->scene_id !== null && $data['scene_id'] = $this->scene_id;
        return $data;
    }
}
