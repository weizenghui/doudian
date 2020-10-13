<?php

/*
 * This file is part of the xbhub/ShopDouyin.
 *
 * (c) jory <jorycn@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xbhub\ShopDouyin\Api\Kernel\Messages;

/**
 * Class Text.
 *
 * @author jory <jorycn@163.com>
 */
class Text extends Message
{
    protected $type = 'text';

    public function __construct(string $content)
    {
        parent::__construct(compact('content'));
    }
}
