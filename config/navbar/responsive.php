<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapporter från kursen",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Rapport färgschema",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport för studie av färgscheman"
                    ],
                    [
                        "text" => "Rapport laddningstid",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport för studie av laddningstid"
                    ],
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Blogg med bilder.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Tredje inlägg",
                        "url" => "redovisning/mitt-tredje-inlagg",
                        "title" => "Mitt tredje inlägg i bloggen",
                    ],
                    [
                        "text" => "Andra inlägg",
                        "url" => "redovisning/mitt-andra-inlagg",
                        "title" => "Mitt andra inlägg i bloggen.",
                    ],
                    [
                        "text" => "Första inlägg",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Mitt första inlägg i bloggen.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Testa olika konstruktioner."
        ],
    ],
];
