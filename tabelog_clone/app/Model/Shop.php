<?php

class Shop extends AppModel{

    public $validate = [
        'name' => ['rule' => ['notBlank']],
        'tel' => ['rule' => ['notBlank']],
        'addr' => ['rule' => ['notBlank']],
        'url' => ['rule' => ['url', true], 'message' => '形式が正しくありません']

    ];

}
