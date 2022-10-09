<?php

/**
 * @copyright Copyright (c), 2010-2022, Haikou Taozhi Network Technology Co., Ltd.
 * @author Super Junior <easelify@gmail.com>
 * @link https://github.com/XVR-Art/phpsdk
 */

declare(strict_types=1);

namespace xvrart\request;

class AccountListRequest extends \xvrart\BaseRequest
{
    public string $api_name = 'account/list';

    public int $page = 1;

    public int $page_size = 20;

    public function getData(): array
    {
        $data = [];
        $this->page !== null && $data['page'] = $this->page;
        $this->page_size !== null && $data['page_size'] = $this->page_size;
        return $data;
    }
}
