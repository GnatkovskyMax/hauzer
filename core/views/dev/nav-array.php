<?php $menu = [
    [ 'label' => 'Главная',
       'url' => '/main/index',
 ],
    [ 'label' => 'Каталог',
        'url' => '/manual/catalogs',
        'children' => [
            [ 'label' => 'Аренда',
                'url' => '/manual/catalogs',
            ],
            [ 'label' => 'Продажа',
                'url' => '/main/index',
            ],
            [ 'label' => 'Аренда посуточно',
                'url' => '/main/index',
            ],

        ],
    ],
  [ 'label' => 'Новости',
       'url' => '/manual/news',
 ],
   [ 'label' => 'О нас',
       'url' => '/manual/about',
 ]
];
?>