<?php

$menu = [
    [   "title" => "Shop",
        "link" => "/shop",
        "subMenu" => [
            [  "title" => "Cloth",
                "link" => "/shop/cloth",
                "subMenu" => [
                    [   "title" => "Shirts",
                        "link" => "/shop/cloth/shirts",
                    ],
                    [   "title" => "Jeans",
                        "link" => "/shop/cloth/jeans",
                    ],
                    [   "title" => "Socks",
                        "link" => "/shop/cloth/socks",
                        "subMenu" => [
                            [
                                "title" => "Everyday",
                                "link" => "/shop/cloth/socks/everyday",
                            ],
                            [
                                "title" => "Gift",
                                "link" => "/shop/cloth/socks/gift",
                            ],
                        ],
                    ],
                ],
            ],
            [   "title" => "Accessories",
                "link" => "/shop/accessories",
                "subMenu" => [
                    [
                        "title" => "Earrings",
                        "link" => "/shop/accessories/earrings",
                    ],
                    [
                        "title" => "Rings",
                        "link" => "/shop/accessories/rings",
                    ],
                ],

            ],
        ],
    ],
    [
        "title" => "About us",
        "link" => "/aboutUs",
        "subMenu" => [
            [
                "title" => "History",
                "link" => "/aboutUs/history",
            ],
            [
                "title" => "News",
                "link" => "/aboutUs/news",
            ],
            [
                "title" => "Contacts",
                "link" => "/aboutUs/contacts",
            ],
        ],
    ],
    [
        "title" => "Delivery",
        "link" => "/delivery"
    ],
];


function menuBuild ($value)
{
    $html = "<ul>";
    if (is_array($value)) {
        foreach ($value as $value) {
            if (!array_key_exists("subMenu", $value)) {
                $html .= "<ul>";
                $html .= "<li>";
                $html .= "<a href='{$value['link']}'> {$value['title']} </a>";
                $html .= "</li>";
                $html .= "</ul>";
            } else {
                $html .= "<ul>";
                $html .= "<li>";
                $html .= "<a href='{$value['link']}'> {$value['title']} </a>";
                $html .= "</li>";
                foreach ($value["subMenu"] as $value) {
                    $html .= "<ul>";
                    $html .= "<li>";
                    $html .= "<a href='{$value['link']}'> {$value['title']} </a>";
                    $html .= "</li>";
                    $html .= "</ul>";
                    if (array_key_exists('subMenu', $value)) {
                        $value = $value['subMenu'];
                        $html2 = menuBuild($value);
                        $html .= $html2;
                        $html .= "</ul>";
                    } else {
                        exit;
                    }
                }
                $html .= "</ul>";
            }
        }
    } else {
        exit;
    }
    return $html;
}

echo (menuBuild($menu));