<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

namespace xvrart\request;

class SpaceCreateRequest extends \xvrart\BaseRequest
{
    public string $api_name = 'space/create';

    public ?string $hub_sid = null;

    public ?int $created_by_account_id = null;

    public ?int $scene_id = null;

    public ?string $name = null;

    public ?string $description = null;

    public ?int $room_size = null;

    public ?string $entry_mode = null;

    public function getData(): array
    {
        $data = [];
        $this->hub_sid !== null && $data['hub_sid'] = $this->hub_sid;
        $this->created_by_account_id !== null && $data['created_by_account_id'] = $this->created_by_account_id;
        $this->scene_id !== null && $data['scene_id'] = $this->scene_id;
        $this->name !== null && $data['name'] = $this->name;
        $this->description !== null && $data['description'] = $this->description;
        $this->room_size !== null && $data['room_size'] = $this->room_size;
        $this->entry_mode !== null && $data['entry_mode'] = $this->entry_mode;
        return $data;
    }
}
