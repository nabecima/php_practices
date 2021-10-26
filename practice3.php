<?php
$webservices = [
  'cms' => ['WordPress', 'Jindo', 'Wix'],
  'male' => ['Gmail'],
  'sns' => [
    [
      'name' => 'Twitter',
      'famousUsers' => [
        ['name' => 'バラク・オバマ'],
        ['name' => 'アリアナ・グランデ']
      ]
    ],
  ]
];

echo $webservices['sns'][0]['famousUsers'][0]['name'];
