<?php

return [
    'zf-metal-datagrid.custom' => [
        'zf-metal-security-entity-group' => [
            'gridId' => 'zfmdg_group',
            'title' => "Grupos",
            'title_add' => "Nuevo Grupo",
            'title_edit' => "Edición de Grupos",
            'multi_filter_config' => [
                "enable" => false,
                "properties_disabled" => []
            ],
            "multi_search_config" => [
                "enable" => true,
                "properties_enabled" => ['name', 'users',]
            ],
            'sourceConfig' => [
                'type' => 'doctrine',
                'doctrineOptions' => [
                    'entityName' => \ZfMetal\Security\Entity\Group::class,
                    'entityManager' => 'doctrine.entitymanager.orm_default',
                ],
            ],
            'formConfig' => [
                'columns' => \ZfMetal\Commons\Consts::COLUMNS_ONE,
                'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                'groups' => [
                    [
                        'type' => \ZfMetal\Commons\Options\FormGroupConfig::TYPE_HORIZONTAL,
                        'id' => 'Grupo',
                        'title' => "Grupo",
                        'columns' => \ZfMetal\Commons\Consts::COLUMNS_ONE,
                        'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                        'fields' => ['name',]
                    ],
                    [
                        'type' => \ZfMetal\Commons\Options\FormGroupConfig::TYPE_HORIZONTAL,
                        'id' => 'Usuarios',
                        'title' => 'Usuarios',
                        'columns' => \ZfMetal\Commons\Consts::COLUMNS_ONE,
                        'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                        'fields' => ['users']
                    ],
                ]
            ],
            'columnsConfig' => [
                'id' => [
                    'displayName' => 'ID',
                    "hidden" => true
                ],
                'name' => [
                    'displayName' => 'Nombre',
                    'priority' => 10,
                ],
                'username' => [
                    'displayName' => 'Usuario',
                    'priority' => 20,
                ],
                'users' => [
                    'displayName' => 'Usuarios',
                    'hidden' => true,
                    'type' => "relational",
                    'multiSearchProperty' => "username"
                ]
            ],
            'crudConfig' => [
                'enable' => true,
                'side' => "right",
                'displayName' => "Acciones",
                'tdClass' => 'action_column',
                'thClass' => 'action_column',
                'add' => [
                    'enable' => true,
                    'class' => '',
                    'value' => 'Agregar',
                    'action' => 'href="/admin/groups/create"'
                ],
                'edit' => [
                    'enable' => true,
                    'class' => '',
                    'value' => '<span class="fa-stack btnCircle btn btnBlue"></i><i class="fa fa-pencil fa-stack-1x"></i></span>',
                    'action' => 'href="/admin/groups/edit/{{id}}"'
                ],
                'del' => [
                    'enable' => true,
                    'class' => '',
                    'value' => '<span class="fa-stack btnCircle btn btnRed"></i><i class="fa fa-trash-o fa-stack-1x"></i></span>',
                ],
                'view' => [
                    'enable' => true,
                    'class' => '',
                    'value' => '<span class="fa-stack btnCircle btn btnBlue"></i><i class="fa fa-search-plus fa-stack-1x"></i></span>',
                    'action' => 'href="/admin/groups/view/{{id}}"',
                ],
                'manager' => [
                    'enable' => false,
                    'class' => ' glyphicon glyphicon-asterisk cursor-pointer',
                    'value' => '',
              
                ],
            ],
        ],
    ],
];
