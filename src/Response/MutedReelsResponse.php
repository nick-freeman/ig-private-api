<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

class MutedReelsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'users'       => 'Model\User[]',
        'next_max_id' => 'string',
        'page_size'   => '',
        'big_list'    => '',
    ];
}
