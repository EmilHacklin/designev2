<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

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
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
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
                    [
                        "text" => "Rapport designprincip",
                        "url" => "rapport/designprincip",
                        "title" => "Rapport för studie av designprinciper"
                    ],
                    [
                        "text" => "Rapport designelement",
                        "url" => "rapport/designelement",
                        "title" => "Rapport på implementation av designelement"
                    ],
                    [
                        "text" => "Rapport designprinciper",
                        "url" => "rapport/designprinciper",
                        "title" => "Rapport på implementation av designprinciper"
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
