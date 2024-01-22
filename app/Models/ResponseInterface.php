<?php

namespace App\Models;

interface ResponseInterface
{
    /**
     * HTTPResponse返却時にJsonオブジェクトに変換するための関数
     *
     * @return array
     */
    public function toArray(): array;
}
