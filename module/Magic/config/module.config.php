<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Magic\Controller\Magic' => 'Magic\Controller\MagicController',
        ),
    ),

    'router' => array(
        'routes' => array(

            'magic' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/[:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Magic\Controller\Magic',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    
    'translator' => array(
        'locale' => 'ru_RU',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    
    'view_manager' => array(
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);