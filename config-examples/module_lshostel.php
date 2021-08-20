<?php

/**
 * This is example configuration fot lsaai module.
 * Copy this file to default config directory and edit the properties.
 *
 * copy command (from SimpleSAML base dir)
 * cp modules/lsaai/module_lsaai.php config/
 */
$config = [
    'register_link' => '',

    'pwd_reset' => [
        'lsaai_entity_id' => '',
        'lsaai_scope' => '',
        'vo_short_name' => '',
        'perun_namespace' => '',
        'perun_url' => '',
        'perun_email_attr' => ''
    ]
];