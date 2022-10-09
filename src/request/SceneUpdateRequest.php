<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

namespace xvrart\request;

class SceneUpdateRequest extends \xvrart\BaseRequest
{
    public string $api_name = 'scene/update';

    public ?string $scene_sid = null;

    public ?string $name = null;

    public ?string $description = null;

    public ?string $state = null;

    public function getData(): array
    {
        $data = [];
        $this->scene_sid !== null && $data['scene_sid'] = $this->scene_sid;
        $this->name !== null && $data['name'] = $this->name;
        $this->description !== null && $data['description'] = $this->description;
        $this->state !== null && $data['state'] = $this->state;
        return $data;
    }
}
