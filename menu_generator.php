<?php

$menu = [
  (object)[
    'text'=> 'Domov',
    'url' => 'index.html',
  ],
  (object)[
    'text'=> 'Hry',
    'url' => 'games.html',
    'items' =>[
      (object)[
        'text'=> 'Chinese Checkers',
        'url' => 'game-checkers.html',
      ],
      (object)[
        'text'=> 'Tangram',
        'url' => 'game-tangram.html',
      ],
  	  (object)[
    		'text'=> 'Zápalkový hlavolam',
    		'url' => 'game-zapalky.html',
  	  ],
      (object)[
    		'text'=> 'Zemepisné puzzle',
    		'url' => 'game-puzzle.html',
  	  ],
      (object)[
        'text'=> 'Hanojské veže',
        'url' => 'game-veze.html',
      ],
    ],
  ],
  (object)[
    'text'=> 'Pamiatky',
    'url' => 'pamiatky.html',
    'items' =>[
      (object)[
        'text'=> 'Zoznam',
        'url' => 'pamiatky.html',
      ],
      (object)[
        'text'=> 'Mapa/Casova OS',
        'url' => 'pamaiatky-os.html',
      ],
    ],
  ],
  (object)[
    'text'=> 'Pripomienkovac',
    'url' => 'pripomienkovac.html',
  ],
  (object)[
    'text'=> 'Meniny',
    'url' => 'meniny.html',
  ],
  /*
  (object)[
    'text'=> 'LVL1',
    'url' => 'index.html',
    'items' =>[
      (object)[
        'text'=> 'LVL2',
        'url' => 'index.html',
      ],
      (object)[
        'text'=> 'LVL2.1',
        'url' => 'index.html',
        'items' =>[
          (object)[
            'text'=> 'LVL3',
            'url' => 'index.html',
          ],
          (object)[
            'text'=> 'LVL3.1',
            'url' => 'index.html',
          ],
        ],
      ],
    ],
  ],*/
];
file_put_contents('js/menu.json',json_encode($menu));
echo json_encode($menu);
?>
