<?php

use PKPass\PKPass;

# Ideally neither of these would be in the public directory
require('vendor/autoload.php');
$pass = new PKPass('Certificates.p12', '123');

// Pass content
$data = [
    "formatVersion" => 1,
    "passTypeIdentifier" => "pass.uk.org.newcastlescouts.explorers",
    "serialNumber" => "103565",
    "teamIdentifier" => "7HYGE94XQW",
    "organizationName" => "Newcastle Scouts",
    "description" => "Newcastle Scouts Explorer ID",
    "backgroundColor" => "rgb(73,4,153)",
    "foregroundColor" => "rgb(255,255,255)",
    "labelColor" => "rgb(255,255,255)",
    "storeCard" => [
        "headerFields" => [
            [
                "key" => "memberId",
                "value" => "103565",
                "label" => "Member ID"
            ]
        ],
        "secondaryFields" => [
            [
                "key" => "name",
                "value" => "Jake Hall",
                "label" => "Name"
            ],
            [
                "key" => "group",
                "value" => "Newcastle Explorers",
                "label" => "Group"
            ]
        ],
        "auxiliaryFields" => [
            [
                "key" => "help",
                "value" => "Now with added php",
                "label" => "Help"
            ]
        ],
        "backFields" => [
            [
                "key" => "site_link",
                "label" => "WEBSITE",
                "value" => "<a href='https://www.newcastlescouts.org.uk/'>newcastlescouts.org.uk</a>"
            ],
            [
                "key" => "terms",
                "label" => "TERMS",
                "value" => "This pass does not guarantee entry to any events. Prior booking is required to reserve your space. All existing event terms apply."
            ],
            [
                "key" => "last_updated",
                "label" => "LAST UPDATED",
                "value" => "2023-12-30T23:10:00Z",
                "dateStyle" => "PKDateStyleFull"
            ]
        ]
    ],
    "barcodes" => [
        [
            "message" => "103565",
            "format" => "PKBarcodeFormatQR",
            "messageEncoding" => "iso-8859-1",
            "altText" => "Member ID 103565"
        ]
    ]
];
$pass->setData($data);

// Add files to the pass package
$pass->addFile('images/icon.png');
$pass->addFile('images/thumbnail.png');
$pass->addFile('images/strip.png');
$pass->addFile('images/logo.png');

// Create and output the pass
$pass->create(true);
