<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

namespace xvrart\request;

class AccountCreateRequest extends \xvrart\BaseRequest
{
    public string $api_name = 'account/create';

    public ?string $email = null;

    public ?string $state = null;

    public function getData(): array
    {
        $data = [];
        $this->email !== null && $data['email'] = $this->email;
        $this->state !== null && $data['state'] = $this->state;
        return $data;
    }
}
