<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

namespace xvrart\request;

class AccountDetailRequest extends \xvrart\BaseRequest
{
    public string $api_name = 'account/detail';

    public ?string $account_id = null;

    public function getData(): array
    {
        $data = [];
        $this->account_id !== null && $data['account_id'] = $this->account_id;
        return $data;
    }
}
