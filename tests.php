<?php

require_once "src.php";

function array2D_Columns_Delete_Test()
{
    $arr2d = [
        ['11', '12', '13'],
        ['21', '22', '23'],
    ];

    array2D_Columns_Delete($arr2d, [1, 2]);

    assert(count($arr2d[0]) === 1);

    array2D_2_Screen($arr2d);
}

// Run tests

array2D_Columns_Delete_Test();
