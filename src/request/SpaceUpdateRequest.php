<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

namespace xvrart\request;

class SpaceUpdateRequest extends \xvrart\BaseRequest
{
    public string $api_name = 'space/update';

    public ?int $hub_id = null;

    public ?string $hub_sid = null;

    public ?int $created_by_account_id = null;

    public ?int $scene_id = null;

    public ?string $name = null;

    public ?string $description = null;

    public ?int $room_size = null;

    public ?string $entry_mode = null;

    public ?string $embed_token = null;

    public ?int $member_permissions = null;

    public function getData(): array
    {
        $data = [];
        $this->hub_id !== null && $data['hub_id'] = $this->hub_id;
        $this->hub_sid !== null && $data['hub_sid'] = $this->hub_sid;
        $this->created_by_account_id !== null && $data['created_by_account_id'] = $this->created_by_account_id;
        $this->scene_id !== null && $data['scene_id'] = $this->scene_id;
        $this->name !== null && $data['name'] = $this->name;
        $this->description !== null && $data['description'] = $this->description;
        $this->room_size !== null && $data['room_size'] = $this->room_size;
        $this->entry_mode !== null && $data['entry_mode'] = $this->entry_mode;
        $this->embed_token !== null && $data['embed_token'] = $this->embed_token;
        $this->member_permissions !== null && $data['member_permissions'] = $this->member_permissions;
        return $data;
    }
}
