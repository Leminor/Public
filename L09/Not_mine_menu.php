<?php


$menu = [
    'Our services' => [
        'CRM' => [
            'Bitrix24' => '',
            'AMO CRM' => '',
            'YClient' => '',
        ],
        'CRM Marketing' => '',
        'Call Tracking' => '',
        'IP-Telephony' => '',
    ],
    'Prices' => [
        'Introduction' => '',
        'Support' => '',
    ],
    'Cases' => '',
    'About Us' => '',
    'Contacts' => '',
];

foreach ($menu as $key => $value) {
    echo "<ul>";
    echo '<li><a href="/link1">' . $key . '</a></li>';
    if (is_array($value)) {
        echo "<ul>";
        foreach ($value as $key1 => $value1) {
            echo '<li><a href="/link1">' . $key1 . '</a></li>';
            if (is_array($value1)) {
                echo "<ul>";
                foreach ($value as $key2 => $value2) {
                    echo '<li><a href="/link1">' . $key2 . '</a></li>';
                }
                echo "</ul>";
            }
        }
        echo "</ul>";
    }
    echo "</ul>";
}
