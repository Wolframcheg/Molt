<?php

$properties = array();

$tmp = array(
    'tpl' => array(
        'type' => 'textfield',
        'value' => 'moltVar',
    ),
    'cssFilename' => array(
        'type' => 'textfield',
        'value' => 'styles',
    ),
    'cssSources' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'cssPack' => array(
        'xtype' => 'combo-boolean',
        'value' => true
    ),
    'cssDeferred' => array(
        'xtype' => 'combo-boolean',
        'value' => false
    ),
    'cssPlaceholder' => array(
        'xtype' => 'textfield',
        'value' => 'Molt.css',
    ),
    'cssRegister' => array(
        'xtype' => 'list',
        'value' => 'default',
        'options' => array(
            array('name' => 'Placeholder', 'value' => 'placeholder'),
            array('name' => 'In head', 'value' => 'head'),
            array('name' => 'Default', 'value' => 'default'),
        )
    ),
    'jsFilename' => array(
        'type' => 'textfield',
        'value' => 'scripts',
    ),
    'jsSources' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'jsPack' => array(
        'xtype' => 'combo-boolean',
        'value' => true
    ),
    'jsDeferred' => array(
        'xtype' => 'combo-boolean',
        'value' => true
    ),
    'jsPlaceholder' => array(
        'xtype' => 'textfield',
        'value' => 'Molt.js',
    ),
    'jsRegister' => array(
        'xtype' => 'list',
        'value' => 'default',
        'options' => array(
            array('name' => 'Placeholder', 'value' => 'placeholder'),
            array('name' => 'Startup script', 'value' => 'startup'),
            array('name' => 'Default', 'value' => 'default'),
        )
    ),
    'incjQuery' => array(
        'xtype' => 'combo-boolean',
        'value' => true
    ),
);

foreach ($tmp as $k => $v) {
	$properties[] = array_merge(
		array(
			'name' => $k,
			'desc' => PKG_NAME_LOWER . '_prop_' . $k,
			'lexicon' => PKG_NAME_LOWER . ':properties',
		), $v
	);
}

return $properties;