<?php $menu = [
    [ 'label' => 'Главная',
       'url' => '/main/index',
 ],
    [ 'label' => 'Каталог',
        'url' => '/manual/catalogs',
        'children' => [
            [ 'label' => 'Аренда',
                'url' => '/manual/catalogs/rent',
            ],
            [ 'label' => 'Продажа',
                'url' => '/manual/catalogs/sale',
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