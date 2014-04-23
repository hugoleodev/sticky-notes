<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'StickyNotes\Controller\StickyNotes' => 'StickyNotes\Controller\StickyNotesController',
        ),
        'view_manager' => array(
            'stickynotes' => __DIR__ . "/../view",
        ),
    ),
);
