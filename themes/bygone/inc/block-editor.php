<?php
register_block_style(
    'core/list',
    array(
        'name'         => 'bygone-list',
        'label'        => __( 'Bygone List' ),
        'isdefault' => true,
        'inline_style' => '.is-style-bygone-list { } ',
    )
);

register_block_style(
    'core/list',
    array(
        'name'         => 'bullet-list',
        'label'        => __( 'Bullet List' ),
        'isdefault' => false,
        'inline_style' => '.is-style-bullet-list { } ',
    )
);