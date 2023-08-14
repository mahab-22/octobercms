<?php 
class Cms98fa8c7d62fa63784753a1a9a78924dbfc3d3d01bf2967e8b67f33dc27705027Class extends Cms\Classes\PageCode
{
public function onTest()
{
    $value1 = input('value1');
    $value2 = input('value2');
    $operation = input('operation');

    switch ($operation) {
        case '+' :
            $this['result'] = $value1 + $value2;
            break;
        case '-' :
            $this['result'] = $value1 - $value2;
            break;
        case '*' :
            $this['result'] = $value1 * $value2;
            break;
        default :
            $this['result'] = $value2 != 0 ? round($value1 / $value2, 2) : 'NaN';
            break;
    }
}
}
