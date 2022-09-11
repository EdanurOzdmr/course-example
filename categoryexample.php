<?php
$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Back-End'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Front-End'
    ],

    [
        'id' => 3,
        'parent' => 1,
        'name' => 'PHP'
    ],

    [
        'id' => 4,
        'parent' => 2,
        'name' => 'ReactJS'
    ],


];

function getCategories($arr, $par = 0)
{

    $html = '<ul>';
    foreach ($arr as $value) {
        if($value['parent']==$par){
            $html .= '<li>' . $value['name'];
            $html .= getCategories($arr, $value['id']);
            $html .= '</li>';
        }
    }
    $html .= '</ul>';
    return $html;
}

echo getCategories($categories);
