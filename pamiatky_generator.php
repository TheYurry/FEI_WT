<?php

$pamiatky = [
  (object)[
    'nazov'=> 'Pamiatka1',
    'rokVzniku' => 1993,
    'sirka' => '123',
    'dlzka' => '456',
  ],
  (object)[
    'nazov'=> 'pamiatka2',
    'rokVzniku' => 1994,
    'sirka' => '123',
    'dlzka' => '456',
  ],
  (object)[
    'nazov'=> 'pamiatka3',
    'rokVzniku' => 1995,
    'sirka' => '123',
    'dlzka' => '456',
  ],
];

echo json_encode($pamiatky);
?>