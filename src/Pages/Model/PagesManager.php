<?php
/**
 * User: Vasiliy Shvakin (orbisnull) zen4dev@gmail.com
 */

namespace Pages\Model;


use DeltaDb\Repository;

class PagesManager extends Repository
{
    protected $metaInfo = [
        'fields' => [
            "id",
            "name",
            "title",
            "description",
            "text",
            "created",
            "changed",
        ]
    ];

}
