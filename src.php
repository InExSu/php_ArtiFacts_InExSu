function array2D_Columns_Delete(array &$arr2D, array $arr1d_columns)
{   // удалить столбцы в массиве 2мерном из гугл таблиц по номерам
    // массивы могут быть не строгими

    for ($row = 0, $rows = count($arr2D); $row < $rows; ++$row) {

        if (is_array($arr2D[$row])) {

            for ($col = 0, $cols = count($arr2D[$row]); $col < $cols; ++$col) {

                if (in_array($col, $arr1d_columns)) {

                    unset($arr2D[$row][$col]);
                }
            }
        }
    }
}
