<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 25/03/20
 * Time: 15:25
 */

namespace App\Libraries;


class QueryLib
{

    public static function getSqlWithBindings($query)
    {
        $addSlashes = str_replace('?', "'?'", $query->toSql());

        return vsprintf(str_replace('?', '%s', $addSlashes), $query->getBindings());
    }

}