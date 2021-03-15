<?php
 //Homework

$eol = PHP_SAPI === 'cli' ? PHP_EOL : '<br>';

$menu = [
    [
        'title' => 'Shopping',
        'link' => '/shop',
        'subMenu' => [
             [
                'title' => 'Cloth',
                'link' => '/shop/cloth'
            ],
            [
                'title' => 'Accessories',
                'link' => '/shop/accessories'
            ],
            [
                'title' => 'Toys',
                'link' => '/shop/toys'
            ],
        ],
    ],
    [
        'title' => 'Delivery',
        'link' => '/delivery',
    ],
    [
        'title' => 'About us',
        'link' => '/aboutUs',
        'subMenu' => [
            [
                'title' => 'Contacts',
                'link' => '/aboutUs/contacts'
            ],
            [
                'title' => 'Map',
                'link' => '/aboutUs/map'
            ],
            [
                'title' => 'History',
                'link' => '/aboutUs/history',
            ],
        ],
    ],
];

echo $eol;
?>

<!--PHP in HTML -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <?php for ($list = 0; $list < count($menu); $list++) : ?>
        <?php if (array_key_exists('subMenu', $menu[$list])) : ?>
            <li>
                <a href="<?= $menu[$list]['link'] ?>"><?= $menu[$list]['title'] ?></a>
                <ul>
                <?php for ($subList = 0; $subList < count($menu[$list]['subMenu']); $subList++) :?>
                    <li>
                        <a href="<?= $menu[$list]['subMenu'][$subList]['link'] ?>">
                            <?= $menu[$list]['subMenu'][$subList]['title'] ?>
                        </a>
                    </li>
                <?php endfor?>
                </ul>
            </li>
        <?php else : ?>
            <li>
                <a href="<?= $menu[$list]['link'] ?>">
                    <?= $menu[$list]['title'] ?>
                </a>
            </li>
        <?php endif ?>
    <?php endfor ?>
</ul>
    </body>
    </html>

<!--HTML in PHP-->

<?php
$html = "<ul>";
for ($list2 = 0; $list2 < count($menu); $list2++) {
    if (array_key_exists('subMenu', $menu[$list2])) {
        $html .= "<li>";
        $html .= "<a href='{$menu[$list2]['link']}'> {$menu[$list2]['title']} </a>";
        $html .= "<ul>";
        for ($subList2 = 0; $subList2 < count($menu[$list2]['subMenu']); $subList2++)
        {
            $html .= "<li>";
            $html .= "<a href='{$menu[$list2]['subMenu'][$subList2]['link']}'> {$menu[$list2]['subMenu'][$subList2]['title']} </a>";
            $html .= "</li>";
        }
        $html .= "</ul>";
        $html .= "</li>";
    } else {
        $html .= "<li>";
        $html .= "<a href='{$menu[$list2]['link']}'>{$menu[$list2]['title']}</a>";
        $html .= "</li>";

    }
}
$html .= "</ul>";

echo $html;
?>


<!--PHP ForEach-->

<?php

$html2 = "<ul>";
foreach ($menu as $key => $value) {
    if (array_key_exists('subMenu', $menu[$key])) {
        $html2 .= "<li>";
        $html2 .= "<a href='{$menu[$key]['link']}'> {$menu[$key]['title']} </a>";
        $html2 .= "<ul>";
        foreach ($menu[$key]['subMenu'] as $key2 => $value2) {
            $html2 .= "<li>";
            $html2 .= "<a href='{$menu[$key]['subMenu'][$key2]['title']}'> {$menu[$key]['subMenu'][$key2]['title']} </a>";
            $html2 .= "</li>";
        }
        $html2 .= "</ul>";
        $html2 .= "</li>";
    } else {
        $html2 .= "<li>";
        $html2 .= "<a href='{$menu[$key]['link']}'> {$menu[$key]['title']} </a>";
        $html2 .= "</li>";
    }
}
$html2 .= "</ul>";

echo $html2;
?>
<!---->
<!---->
<!--<ul>-->
<!--      <li><a href="/link1">Text 1</a></li>-->
<!--      <li><a href="/link2">Text 2</a></li>-->
<!--      <li>-->
<!--          Text 3-->
<!--          <ul>-->
<!--              <li><a href="/link3_1">Text 3.1</a></li>-->
<!--              <li><a href="/link3_2">Text 3.2</a></li>-->
<!--          </ul>-->
<!--      </li>-->
<!-- </ul>-->