<?php

// config for LowerRockLabs/LaravelLivewireTablesAdvancedFilters
return [
    'customFilterMenuWidth' => 'w-80 md:w-80',
    'slimSelect' => [
        'defaults' => [''],
    ],
    'smartSelect' => [
        'optionsMethod' => 'simple',    // Should be set to either simple/complex.
        'displayIdEnabled' => 'false',
        'iconStyling' => [
            'add' => [
                'classes' => '',        // Base classes for the "add" icon
                'defaults' => true,     // Determines whether to merge (true) or replace (false) the default class (inline-block)
                'svgEnabled' => true,  // Enable or Disable the use of the default SVG icon
                'svgFill' => '#000000', // Fill for the SVG Icon
                'svgSize' => '1.5em',   // Size for the SVG Icon
            ],
            'delete' => [
                'classes' => '',        // Base classes for the "delete" icon
                'defaults' => true,     // Determines whether to merge (true) or replace (false) the default class (inline-block)
                'svgEnabled' => true,   // Enable or Disable the use of the default SVG icon
                'svgFill' => '#000000', // Fill for the SVG Icon
                'svgSize' => '1.5em',   // Size for the SVG Icon
            ],
        ],
        'listStyling' => [
            'classes' => '',            // Classes for the list items
            'defaults' => true,         // Determines whether to merge (true) or replace (false) the default classes
        ],
        'closeAfterAdd' => true,        // Close the smartSelect after adding an item
        'closeAfterRemove' => true,     // Close the smartSelect after removing an item
    ],
    'dateRange' => [
        'defaults' => [
            'earliestDate' => '20214-0111-01',
            'latestDate' => '',
            'allowInput' => true,
            'altFormat' => 'F j, Y',
            'ariaDateFormat' => 'F j, Y',
            'dateFormat' => 'Y-m-d',
        ],
        // Set to true if you need to include the Flatpickr JS
        'publishFlatpickrJS' => true,
        // Set to true if you need to include the Flatpickr CSS
        'publishFlatpickrCSS' => true,
    ],
    'datePicker' => [
        'defaults' => [
            'earliestDate' => '',
            'latestDate' => '',
            'allowInput' => true,
            'altFormat' => 'F j, Y',
            'ariaDateFormat' => 'F j, Y',
            'dateFormat' => 'Y-m-d',
            'timeEnabled' => false,
        ],
        // Set to true if you need to include the Flatpickr JS
        'publishFlatpickrJS' => true,
        // Set to true if you need to include the Flatpickr CSS
        'publishFlatpickrCSS' => true,
    ],
    'numberRange' => [
        'defaults' => [
            'min' => '0', // A Default Minimum Value
            'max' => '100',  // A Default Maximum Value
        ],
        'minRange' => 0, // A Default Minimum Permitted Value
        'maxRange' => 100,  // A Default Minimum Permitted Value
        'suffix' => '', // A Default Suffix
        'styling' => [
            'light' => [ // Used When "dark" class is not in a parent element
                'activeColor' => '#FFFFFF', // Color of the text within the circle when hovered
                'fillColor' => '#0366d6', // The color of the bar for the selected range
                'primaryColor' => '#0366d6', // The primary color
                'progressBackground' => '#eee', // The color of the remainder of the bar
                'thumbColor' => '#FFFFFF', // The color of the Circle
                'ticksColor' => 'silver',
                'valueBg' => 'transparent',
                'valueBgHover' => '#0366d6', // The bg color of the current value when the relevant selector is hovered over
            ],
            'dark' => [ // Used When "dark" class is in a parent element
                'activeColor' => 'transparent',
                'fillColor' => '#000000', // The color of the bar for the selected range
                'progressBackground' => '#909090', // The color of the remainder of the bar
                'primaryColor' => '#000000', // The primary color
                'thumbColor' => '#000066', // The color of the Circle
                'ticksColor' => '#000000', // The color of the vertical lines at the end of the bar
                'valueBg' => '#000000',
                'valueBgHover' => '#000066', // The bg color of the current value when the relevant selector is hovered over

            ],
        ],
        /*
        How to Include the CSS file.  Options are:
        inline - Pushes the <style></style> tags to the
        include - Requires you to publish the CSS file, and will then include it
        none - Do not include the CSS, note that you will need to include the CSS in your webpack.
        */
        'cssInclude' => 'inline',
    ],
];
