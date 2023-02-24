<?php
/**
 * Created by PhpStorm.
 * User: youxingxiang
 * Date: 2019/9/29
 * Time: 11:19 AM
 */

namespace Surpaimb\LaravelQuick\Exceptions\Api;

use Surpaimb\LaravelQuick\Exceptions\ApiException;

class ApiRequestException extends ApiException
{

    public function render()
    {
        $this->requestError($this->getMessage());
        return parent::render();
    }
}
