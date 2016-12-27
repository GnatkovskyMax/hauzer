<?php $menu = [
    [ 'label' => 'Главная',
       'url' => '/main/index',
 ],
    [ 'label' => 'Каталог',
        'url' => '/manual/catalogs',
        'children' => ['Аренда','Продажа','Аренда посуточно'
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