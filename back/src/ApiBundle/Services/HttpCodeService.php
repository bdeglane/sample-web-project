<?php

namespace ApiBundle\Services;


class HttpCodeService
{
    const SUCCESS = 200;
    const REDIRECT_TEMP = 301;
    const REDIRECT_PERM = 302;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const INTERNAL_ERROR = 500;
    const NOT_IMPLEMENTED = 501;
    const SERVICE_UNAVAILABLE = 503;
}