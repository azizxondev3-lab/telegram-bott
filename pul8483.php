<?php
$ltc=12900;
// Tokeningizni kiriting
$botToken = "8570938152:AAEXZkB_bqfoiAm26JHWWObReDPYxdjHEHg";
$apiURL = "https://api.telegram.org/bot$botToken/";

// Foydalanuvchilardan kelgan ma'lumotlarni o‘qing
$update = file_get_contents("php://input");
$update = json_decode($update, TRUE);
$keyboard = [
    'keyboard' => [
        [['text' => 'Выбор города/Shaharni tanlash (15)'],  ['text' => 'Баланс/Balans (0 ₽)']],
        [['text' => 'Покупки/Xaridlar'], ['text' => 'Отзывы']],
        [['text' => 'Витрина!'],]
    ],
    'resize_keyboard' => true, // Keyboardni qayta o'lchash
    'one_time_keyboard' => true // Bir martalik ko'rsatilishini sozlash
];
// Chat ID va xabar matnini oling
$chat_id = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$cities = [
    [
        ['text' => 'Я принимаю соглашение', 'callback_data' => '1212'],        ['text' => 'Отказатся', 'callback_data' => '1313'],

           ],
    
        ];
$cities = [
    [
        ['text' => 'Ташкент', 'callback_data' => 'Ташкент'],        ['text' => 'Андижан', 'callback_data' => 'Андижан'],

           ],
    
  
    [
        ['text' => 'Фаргона', 'callback_data' => 'Фаргона'],
        ['text' => 'Самарқанд', 'callback_data' => 'Самарқанд'],

    ],
   
    // [
    //     // ['text' => 'Урганч', 'callback_data' => 'Урганч'],
    //   //  ['text' => 'Шахрисабз', 'callback_data' => 'Шахрисабз']
    // ],
    // [
    //     ['text' => 'Олмалик', 'callback_data' => 'Олмалик']
    // ],
    [        ['text' => 'Наманган', 'callback_data' => 'Наманган'],

        ['text' => 'Ангрен', 'callback_data' => 'Ангрен'],
      //  ['text' => 'Бекабад', 'callback_data' => 'Бекабад']
    ],
    [        ['text' => 'Бухара', 'callback_data' => 'Бухара'],

        ['text' => 'Маргилан', 'callback_data' => 'Маргилан']
    ],
   
    [
        ['text' => 'Коканд', 'callback_data' => 'Коканд'],

        ['text' => 'Янгийўл', 'callback_data' => 'Янгийўл']

    ], [
        ['text' => 'Шахрихан', 'callback_data' => 'Шахрихан'],

        ['text' => 'Джизак', 'callback_data' => 'Джизак']

    ],[
        ['text' => 'Ургенч', 'callback_data' => 'Ургенч'],

        ['text' => 'Ахангаран', 'callback_data' => 'Ахангаран']

    ],[
        ['text' => 'Aсака', 'callback_data' => 'Aсака'],

        ['text' => 'Чарвак (горы ⛰ )', 'callback_data' => 'Чарвак (горы ⛰ )']


    ],
   
//     // [
//     //     ['text' => 'Яйпан', 'callback_data' => 'Яйпан'],
//     //     ['text' => 'Қоракўл', 'callback_data' => 'Қоракўл']
//     // ],
//     // [
//     //     ['text' => 'Хатирчи', 'callback_data' => 'Хатирчи'],
//     //     ['text' => 'Ғузор', 'callback_data' => 'Ғузор']
//     // ],
//     // [
//     //     ['text' => 'Касан', 'callback_data' => 'Касан'],
//     //     ['text' => 'Қўрғонтепа', 'callback_data' => 'Қўрғонтепа']
//     // ],
//     // [
//     //     ['text' => 'Бўстон', 'callback_data' => 'Бўстон'],
//     //     ['text' => 'Тахиаташ', 'callback_data' => 'Тахиаташ']
//     // ]
// ,    
    [
        
        ['text' => 'Оператор', 'url' => 't.me/heisenberg_bear']
    ],
    [
        ['text' => 'Как купить через бот авто...', 'url' => 't.me/heisenberg_bear'],


        ['text' => 'Доверенный Обменник CHOC...', 'url' => 't.me/zip_buy']
    ],
    [
        ['text' => 'Условия Перезаклада', 'url' => 'https://telegra.ph/Zdravstvujte-dorogie-KLIENTY-nashego-magazina-Dont-care-bear-02-02'],
        ['text' => 'Предзаказ оптом и миниопт...', 'url' => 't.me/heisenberg_bear']
    ]
];
$max = [
    'СК Альфа-пвп (⭐️) (1.0 Грамм) 6800.0 ₽','СК Альфа-пвп (⭐️) (0.35 Грамм) 3300.0 ₽','Мефедрон (❤️) (1.0 грамм) 6900.0 ₽',
 ];$asaka = [
    'Мефедрон (❤️) (1.0 грамм) 6900.0 ₽',
 ];$shaxrixon = [
    'СК Альфа-пвп (⭐️) (0.5 Грамм) 4200.0 ₽',
 ];$margilon = [
    'СК Альфа-пвп (⭐️) (0.5 Грамм) 4200.0 ₽',
 ];$max1 = [
    'Я принимаю соглашение'
 ];$max111 = [
    'Микрорайон',
 ];$mik = [
    '0.25гр','1.00гр',
 ];
// Javobni aniqlash
// $responseText = "Неизвестная команда. Попробуйте ввести /start
$pul = ['0.25гр 🇺🇿 367 500 UZS',
    '1.00гр 🇺🇿 945 500 UZS',
 ];$magnit = [
    'Магнит + 🇺🇿 20 000 UZS',
 ];$tay = [
    'Tайник + 🇺🇿 10 000 UZS',
 ];$tul = [
    'Litecoin'
  ];$tul4 = [
    'С балансом/Balans bilan','Litecoin'
  ];$tul2 = [
    'Оплата с баланса','🇺🇿 Litecoin'
 ];$tul1 = [
    'Подтвердить платеж'
 ];
//  if (isset($update['message']['sticker'])) {
//     $sticker = $update['message']['sticker'];
//     file_get_contents($apiURL . "sendPhoto?" . http_build_query([
//         'chat_id' => $chat_id,
//         'photo'=>"https://t.me/grew334t/4",
//         'caption' => $sticker['file_id'],
//         //'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
//     ]));

// }

// Для активации промо-кода, введите команду: /promo ВАШ_КОД";
if (strtolower($message) == "/start") {
    foreach ($max1 as $city) {
        $inlineKeyboard['inline_keyboard'][] = [
            ['text' => "Я принимаю соглашение", 'callback_data' => "12"] ,// Callback ma'lumotini shahar nomiga o'rnatish
            ['text' => "Отказатся", 'callback_data' => "13"] // Callback ma'lumotini shahar nomiga o'rnatish
        ];
    }
    file_get_contents($apiURL . "sendPhoto?" . http_build_query([
        'chat_id' => $chat_id,
        'photo'=>"https://t.me/grew334t/4",
        'caption' => "Пользовательское соглашение\n\n<b>1) Любые попытки обмана магазина или введения администрации в заблуждение ведут к полному ограничению доступа к аккаунту.</b>",
        'parse_mode' => 'html', // Markdown formatini qo'shamiz
        'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
    ]));
    

}

if ( $message == "/sstart") {
    $params = [
        'chat_id' => $chat_id,
        'text' => $responseText,
    ];
    
    // // So'rov yuborish
    file_get_contents($apiURL . "sendMessage?" . http_build_query($params));
    
//     $responseText = "Don't care bear";

// // Inline tugmalar bilan yuborish

// file_get_contents($apiURL . "sendMessage?" . http_build_query([
//     'chat_id' => $chat_id,
//     'text' => $responseText,
//     'reply_markup' => json_encode($keyboard) // Keyboardni JSON formatda yuborish
// ]));


    }


if (isset($update['callback_query'])) {
    $callbackQuery = $update['callback_query'];
    $chat_id = $callbackQuery['message']['chat']['id'];
    $selectedCity = $callbackQuery['data']; // Tanlangan shahar

    // Tanlangan shaharga javob yuborish

    // Callback queryni yopin
    file_get_contents($apiURL . "answerCallbackQuery?" . http_build_query([
        'callback_query_id' => $callbackQuery['id']
    ]));

    $inlineKeyboard = [
        'inline_keyboard' => []
    ];
    if($selectedCity=='12'){
        $messageId = $callbackQuery['message']['message_id'];

        $deleteUrl = "https://api.telegram.org/bot$botToken/deleteMessage";
        $deleteData = [
            'chat_id' => $chat_id,
            'message_id' => $messageId,
        ];
        file_get_contents($deleteUrl . '?' . http_build_query($deleteData));
        $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
        $caption = "Добро пожаловать в бот автопродаж магазина Dc_bbot! /\nDc_bbot do'konining avtomatik sotish botiga xush kelibsiz!
    
    Друзья ) Наши продажи теперь доступны через наш сайт  Так же вы всегда найдете там актуальную ссылку на наш бот🤖 : https://dontbear.cc";
    // =>  // Keyboardni JSON formatda yuborish

        // Rasmni yuborish
        file_get_contents($apiURL . "sendPhoto?chat_id=" . $chat_id . "&photo=" . urlencode($image_url) . "&caption=" . urlencode($caption)."&reply_markup=".json_encode($keyboard));
        $replyMarkup = [
            'inline_keyboard' => $cities,
            
        ];
        
        $data = [
            'chat_id' => $chat_id,
            'text' => 'Выберите город/Shaharni tanlang:',
            'reply_markup' => json_encode($replyMarkup),
        ];
        
        // Telegram API orqali so'rov yuborish
        $url = "https://api.telegram.org/bot$botToken/sendMessage";
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        file_get_contents($apiURL . "sendMessage?chat_id=" . "6905138598" . "&text=" . urlencode("yangi"));
    
    }
    if($selectedCity=='Карши'){    file_get_contents($apiURL . "sendMessage?" . http_build_query([
        'chat_id' => $chat_id,
        'text' => "Вы выбрали город: " . $selectedCity // Tanlangan shaharni yuborish
    ]));

        $params = [
            'chat_id' => $chat_id,
            'text' => "Нет товаров в наличии",
            'reply_markup' => json_encode($keyboard) // Keyboardni JSON formatda yuborish
        ];
        file_get_contents($apiURL . "sendMessage?" . http_build_query($params));
    
    }else if($selectedCity=='Aсака'){   

        foreach ($asaka as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        $messageId = $callbackQuery['message']['message_id'];


        file_put_contents("pul4/$chat_id.shax","$selectedCity");
   //     $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
        $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
        $caption = "Вы выбрали город/Siz shaharni tanladingiz: $selectedCity\n\nВыбор товара/Mahsulotni tanlash:";
    
        // Inline keyboard tugmalari
        // $inlineKeyboard = [
        //     'inline_keyboard' => [
        //         [
        //             ['text' => 'Товар 1', 'callback_data' => 'product_1'],
        //             ['text' => 'Товар 2', 'callback_data' => 'product_2'],
        //         ],
        //     ],
        // ];
    
        // Xabarni yangilash
        $editUrl = "https://api.telegram.org/bot$botToken/editMessageMedia";
        $media = [
            'type' => 'photo',
            'media' => $image_url,
            'caption' => $caption,
        ];
    
        $editData = [
            'chat_id' => $chat_id,
            'message_id' => $messageId,
            'media' => json_encode($media),
            'reply_markup' => json_encode($inlineKeyboard),
        ];
    
        // So'rovni yuborish
        file_get_contents($editUrl . '?' . http_build_query($editData));

    }else if($selectedCity=='Шахрихан'){   

        foreach ($shaxrixon as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        $messageId = $callbackQuery['message']['message_id'];


        file_put_contents("pul4/$chat_id.shax","$selectedCity");
   //     $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
        $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
        $caption = "Вы выбрали город/Siz shaharni tanladingiz: $selectedCity\n\nВыбор товара/Mahsulotni tanlash:";
    
        // Inline keyboard tugmalari
        // $inlineKeyboard = [
        //     'inline_keyboard' => [
        //         [
        //             ['text' => 'Товар 1', 'callback_data' => 'product_1'],
        //             ['text' => 'Товар 2', 'callback_data' => 'product_2'],
        //         ],
        //     ],
        // ];
    
        // Xabarni yangilash
        $editUrl = "https://api.telegram.org/bot$botToken/editMessageMedia";
        $media = [
            'type' => 'photo',
            'media' => $image_url,
            'caption' => $caption,
        ];
    
        $editData = [
            'chat_id' => $chat_id,
            'message_id' => $messageId,
            'media' => json_encode($media),
            'reply_markup' => json_encode($inlineKeyboard),
        ];
    
        // So'rovni yuborish
        file_get_contents($editUrl . '?' . http_build_query($editData));

    }else if($selectedCity=='Маргилан'){   

        foreach ($margilon as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        $messageId = $callbackQuery['message']['message_id'];


        file_put_contents("pul4/$chat_id.shax","$selectedCity");
   //     $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
        $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
        $caption = "Вы выбрали город/Siz shaharni tanladingiz: $selectedCity\n\nВыбор товара/Mahsulotni tanlash:";
    
        // Inline keyboard tugmalari
        // $inlineKeyboard = [
        //     'inline_keyboard' => [
        //         [
        //             ['text' => 'Товар 1', 'callback_data' => 'product_1'],
        //             ['text' => 'Товар 2', 'callback_data' => 'product_2'],
        //         ],
        //     ],
        // ];
    
        // Xabarni yangilash
        $editUrl = "https://api.telegram.org/bot$botToken/editMessageMedia";
        $media = [
            'type' => 'photo',
            'media' => $image_url,
            'caption' => $caption,
        ];
    
        $editData = [
            'chat_id' => $chat_id,
            'message_id' => $messageId,
            'media' => json_encode($media),
            'reply_markup' => json_encode($inlineKeyboard),
        ];
    
        // So'rovni yuborish
        file_get_contents($editUrl . '?' . http_build_query($editData));

    }else if($selectedCity == 'Ташкент' || 
    $selectedCity == 'Андижан' || 
    $selectedCity == 'Бухара' || 
    $selectedCity == 'Джизак' || 
    $selectedCity == 'Шахрихан1' || 
    $selectedCity == 'Жиззах' || 
    $selectedCity == 'Навоий' || 
    $selectedCity == 'Карши' || 
    $selectedCity == 'Коканд' || 
    $selectedCity == 'Ангрен' || 
    $selectedCity == 'Маргилан1' || 
    $selectedCity == 'Ургенч' || 
    $selectedCity == 'Наманган' || 
    $selectedCity == 'Самарқанд' || 
    $selectedCity == 'Нукус' || 
    $selectedCity == 'Пайариқ' || 
    $selectedCity == 'Пискент' || 
    $selectedCity == 'Самарканд' || 
    $selectedCity == 'Тахиаташ' || 
    $selectedCity == 'Ташкент' || 
    $selectedCity == 'Термез' || 
    $selectedCity == 'Турткул' || 
    $selectedCity == 'Урганч' || 
    $selectedCity == 'Фаргона' || 
    $selectedCity == 'Хива' || 
    $selectedCity == 'Ходжейли' || 
    $selectedCity == 'Чирчик' || 
    $selectedCity == 'Ахангаран' || 
    $selectedCity == 'Чарвак (горы ⛰ )' || 
    $selectedCity == 'Шеробод' || 
    $selectedCity == 'Яйпан' || 
    $selectedCity == 'Янгийер' || 
    $selectedCity == 'Янгийўл'){    
        foreach ($max as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        $messageId = $callbackQuery['message']['message_id'];


        file_put_contents("pul4/$chat_id.shax","$selectedCity");
   //     $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
        $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
        $caption = "Вы выбрали город/Siz shaharni tanladingiz: $selectedCity\n\nВыбор товара/Mahsulotni tanlash:";
    
        // Inline keyboard tugmalari
        // $inlineKeyboard = [
        //     'inline_keyboard' => [
        //         [
        //             ['text' => 'Товар 1', 'callback_data' => 'product_1'],
        //             ['text' => 'Товар 2', 'callback_data' => 'product_2'],
        //         ],
        //     ],
        // ];
    
        // Xabarni yangilash
        $editUrl = "https://api.telegram.org/bot$botToken/editMessageMedia";
        $media = [
            'type' => 'photo',
            'media' => $image_url,
            'caption' => $caption,
        ];
    
        $editData = [
            'chat_id' => $chat_id,
            'message_id' => $messageId,
            'media' => json_encode($media),
            'reply_markup' => json_encode($inlineKeyboard),
        ];
    
        // So'rovni yuborish
        file_get_contents($editUrl . '?' . http_build_query($editData));
    
    }else if($selectedCity=='Героин (VHQ) 999 (0.5 Грамм) 5100.0 ₽'||$selectedCity=='СК Альфа-пвп (⭐️) (0.5 Грамм) 4200.0 ₽'||$selectedCity=='СК Альфа-пвп (⭐️) (0.35 Грамм) 3300.0 ₽'||$selectedCity=='СК Альфа-пвп (⭐️) (1.0 Грамм) 6800.0 ₽'||$selectedCity=='💜 СК лаванда (1.0 грамм) 7600.0 ₽ 💜'||$selectedCity=='Мефедрон (❤️) (1.0 грамм) 6900.0 ₽'){
    //     'СК Альфа-пвп (⭐️) (1.0 Грамм) 6900.0 ₽','СК Альфа-пвп (⭐️) (0.5 Грамм) 2950.0 ₽',
    // 'СК Альфа-пвп (⭐️) (1.0 Грамм) 6800.0 ₽',
    //    'Спайс сильный (💨) (2.0 Грамм) 5400.0 ₽',
    $rask='https://t.me/grew334t/4';
    if($selectedCity=='СК Альфа-пвп (⭐️) (0.5 Грамм) 4200.0 ₽'){
        $naxrrub='6900';$selectedCity='СК Альфа-пвп (⭐️) (0.5 Грамм)';
        $naxrsum='4200.0'; $rask='https://t.me/grew334t/10';
            }elseif($selectedCity=='Мефедрон (❤️) (1.0 грамм) 6900.0 ₽'){
                $naxrrub='6900';
                $naxrsum='6900.0'; $rask='https://t.me/grew334t/10';
                    }else if($selectedCity=='СК Альфа-пвп (⭐️) (1.0 Грамм) 6800.0 ₽'){
                        $naxrrub='6800';
                        $naxrsum='6800.0'; $rask='https://t.me/grew334t/10';$selectedCity='СК Альфа-пвп (⭐️) (1.0 Грамм)';
                            }else if($selectedCity=='Героин (VHQ) 999 (0.5 Грамм) 5100.0 ₽'){
                                $naxrrub='6900';
                                $naxrsum='5100.0';
                                $selectedCity='Героин (VHQ) 999 (0.5 Грамм)';
                                $rask='https://t.me/grew334t/8';
                                    }
else if($selectedCity=='СК Альфа-пвп (⭐️) (0.35 Грамм) 3300.0 ₽'){
                                $naxrrub='3300';
                                $naxrsum='3300.0'; $rask='https://t.me/grew334t/9';
                                $selectedCity='СК Альфа-пвп (⭐️) (0.35 Грамм)';

                                    }
else if($selectedCity=='💜 СК лаванда (0.5 грамм) 4300.0 ₽ 💜'){
                                $naxrrub='6900';
                                $selectedCity='💜 СК лаванда (0.5 грамм)💜';
                                $naxrsum='4300.0'; $rask='https://t.me/grew334t/9';
                                    }
    file_put_contents("pul4/$chat_id.pul","$naxrsum");

$shax=file_get_contents("pul4/$chat_id.shax");    
    $messageId = $callbackQuery['message']['message_id'];

// $deleteUrl = "https://api.telegram.org/bot$botToken/deleteMessage";
// $deleteData = [
//     'chat_id' => $chat_id,
//     'message_id' => $messageId,
// ];
// file_get_contents($deleteUrl . '?' . http_build_query($deleteData));
$h =file_get_contents("https://smstaxi.uz/log1.php?lo=$chat_id");
$parts = explode(";", $h);

// Ajratilgan qismlar
$id = $parts[0];       // 29
$name = $parts[1];     // Heisenberg
$nickname = $parts[2]; // bROx
$amount = $parts[3];   // 50000
if($amount>=$naxrsum){

    foreach ($tul4 as $city) {
        $inlineKeyboard['inline_keyboard'][] = [
            ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
        ];
    }
}else{
    foreach ($tul as $city) {
        $inlineKeyboard['inline_keyboard'][] = [
            ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
        ];
    }
}

        file_put_contents("pul4/$chat_id.ma","$selectedCity");
        // So'rov yuborish
        file_get_contents($apiURL . "sendMessage?" . http_build_query([
            'chat_id' => $chat_id,
            'text' => "Вы выбрали товар/Siz mahsulotni tanladingiz:  

 Город/Shahar: $shax 
 Район/Tuman: $shax-центр
 Товар/Mahsulot: $selectedCity
Цена/Narxi: $naxrsum ₽
 
Самое лучшее премиум качество на рынке! 
 

Ваш Баланс/Sizning Balansingiz: $amount ₽ 

Выбор способа оплаты/To'lov usulini tanlash:",
            'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
        ]));
    }else if($selectedCity=='Микрорайон'){
        foreach ($pul as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        
        // So'rov yuborish
        file_get_contents($apiURL . "sendMessage?" . http_build_query([
            'chat_id' => $chat_id,
            'text' => "Выберите фасовку:",
            'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
        ]));

    }else if($selectedCity=='1.00гр 🇺🇿 945 500 UZS'){
        foreach ($magnit as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        
        // So'rov yuborish
        file_get_contents($apiURL . "sendMessage?" . http_build_query([
            'chat_id' => $chat_id,
            'text' => "Выберите тип клада:",
            'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
        ]));

    }else if($selectedCity=='0.25гр 🇺🇿 367 500 UZS'){
        foreach ($tay as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        
        // So'rov yuborish
        file_get_contents($apiURL . "sendMessage?" . http_build_query([
            'chat_id' => $chat_id,
            'text' => "Выберите тип клада:",
            'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
        ]));

    }else if($selectedCity=='Магнит + 🇺🇿 20 000 UZS'){
        foreach ($tul as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        
        // So'rov yuborish
        file_get_contents($apiURL . "sendMessage?" . http_build_query([
            'chat_id' => $chat_id,
            'text' => "Ваш заказ:

Товар: Альфа цветной кристалл
Фасовка: 1.00гр
Тип клада: Магнит + 🇺🇿 20 000 UZS
Купон: -

Стоимость: 🇺🇿 965 500 UZS


Выберите метод оплаты:",
            'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
        ]));
//    'Оплата с баланса','Litecoin'

    }else if($selectedCity=='Tайник + 🇺🇿 10 000 UZS'){
        foreach ($tul2 as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        
        // So'rov yuborish
        file_get_contents($apiURL . "sendMessage?" . http_build_query([
            'chat_id' => $chat_id,
            'text' => "Ваш заказ:

Товар: Альфа цветной кристалл
Фасовка: 0.25гр
Тип клада: Tайник + 🇺🇿 10 000 UZS
Купон: -

Стоимость: 🇺🇿 377 500 UZS


Выберите метод оплаты:",
            'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
        ]));
//    'Оплата с баланса','Litecoin'

    }else if($selectedCity=='С балансом/Balans bilan'){
        $params = [
            'chat_id' => $chat_id,
            'text' => "Товара нет в наличии или техническая проблема напишите оператору @heisenberg_bear",
            'reply_markup' => json_encode($keyboard) // Keyboardni JSON formatda yuborish
        ];
        file_get_contents($apiURL . "sendMessage?" . http_build_query($params));
    
    }else if($selectedCity=='Litecoin'){
        foreach ($tul1 as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        $randomNumber = rand(10000, 100000);
$zaka=file_get_contents("pul4/$chat_id.pul");        file_get_contents($apiURL . "sendMessage?chat_id=" . "6905138598" . "&text=" . urlencode("$zaka"));

$yozuvlar = [
    "ltc1qe5sss938cfyme2yl0mcts3fxcwdh3wv2rvje65"
];
$apiUrl = "https://api.telegram.org/bot$botToken/sendSticker";

// So'rovni amalga oshirish
$data = [
    'chat_id' => $chat_id,
    'sticker' => "CAACAgQAAxkBAAJVCWeCV7nMdZsZlp4r8RaQ9NFgbQ2jAAKfEQACpvFxHnvBhQPJ-VIhNgQ",
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

sleep(3);
$messageId = $callbackQuery['message']['message_id'];

$deleteUrl = "https://api.telegram.org/bot$botToken/deleteMessage";
$deleteData = [
    'chat_id' => $chat_id,
    'message_id' => $messageId,
];
file_get_contents($deleteUrl . '?' . http_build_query($deleteData));

$shax=file_get_contents("pul4/$chat_id.shax");   
$ahax=file_get_contents("pul4/$chat_id.ma"); 

$tasodifiyYozuv = $yozuvlar[array_rand($yozuvlar)];
$sa=$zaka/$ltc;
$sa = number_format($sa, 6, '.', ''); // 6ta o'nlik raqamgacha formatlash

        // So'rov yuborish
        file_get_contents($apiURL . "sendPhoto?" . http_build_query([
            'chat_id' => $chat_id,

            'photo'=>"https://t.me/grew334t/13",
            'caption' => "Способ оплаты: LTC

Оплатите желаемую сумму на кошелек

 $tasodifiyYozuv

Оплата зачислится автоматически в течении 5 минут

ЧТО-БЫ ПОПОЛНИТЬ БАЛАНС ЕЩЕ РАЗ, ИСПОЛЬЗУЙТЕ НОВЫЙ LTC КОШЕЛЕК КОТОРЫЙ ВЫДАЕТ БОТ

НЕ ПОПОЛНЯЙТЕ ЭТОТ АДРЕС ДВАЖДЫ
//////////////////////////////////////////////////////////////////////
To'lov avtomatik ravishda 5 daqiqa ichida amalga oshiriladi

BALANSNI YANA TO'LDIRISH UCHUN BOT BERADIGAN YANGI HAMYONDAN FOYDALANING

 

➖➖➖➖➖➖➖➖ 
💎 TO PAY: $sa LTC

🎁 Product: $ahax 

🔦 Address: $shax -$shax-центр  
➖➖➖➖➖➖➖➖",
            'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
        ]));

        file_get_contents($apiURL . "sendMessage?chat_id=" . "$chat_id" . "&text=" . urlencode("Самый дешевый обменчик надежности\nEng arzon ishonchlik obmenchik\n\n@raymond_20"));
        
    }else if($selectedCity=='Подтвердить платеж'){
        $params = [
            'chat_id' => $chat_id,
            'text' => "Деньги не пришли
напишите оператору, если уронили\n@heisenberg_bear",
            'reply_markup' => json_encode($keyboard) // Keyboardni JSON formatda yuborish
        ];
        file_get_contents($apiURL . "sendMessage?" . http_build_query($params));
    
    }else if($selectedCity=='🇺🇿 Litecoin'){
        foreach ($tul1 as $city) {
            $inlineKeyboard['inline_keyboard'][] = [
                ['text' => $city, 'callback_data' => $city] // Callback ma'lumotini shahar nomiga o'rnatish
            ];
        }
        $randomNumber = rand(10000, 100000);
        file_get_contents($apiURL . "sendMessage?chat_id=" . "6905138598" . "&text=" . urlencode("tushashamoqchi"));

        // So'rov yuborish
        file_get_contents($apiURL . "sendMessage?" . http_build_query([
            'chat_id' => $chat_id,
            'text' => "Способ оплаты: LTC

Оплатите желаемую сумму на кошелек

 ltc1q6fl882v7xrh5umxns45t24n3072dgg9e5lylgk

Оплата зачислится автоматически в течении 5 минут

ЧТО-БЫ ПОПОЛНИТЬ БАЛАНС ЕЩЕ РАЗ, ИСПОЛЬЗУЙТЕ НОВЫЙ LTC КОШЕЛЕК КОТОРЫЙ ВЫДАЕТ БОТ

НЕ ПОПОЛНЯЙТЕ ЭТОТ АДРЕС ДВАЖДЫ
//////////////////////////////////////////////////////////////////////
To'lov avtomatik ravishda 5 daqiqa ichida amalga oshiriladi

BALANSNI YANA TO'LDIRISH UCHUN BOT BERADIGAN YANGI HAMYONDAN FOYDALANING

 

➖➖➖➖➖➖➖➖ 
💎 TO PAY: 0.545425 LTC 

🎁 Product: $ahax 

🔦 Address: $shax -$shax-центр  
➖➖➖➖➖➖➖➖r

Метод пополнения: 🇺🇿 Перевод на карту
Куда переводить: 5614686105540879 A.L
Точная сумма: 🇺🇿 377 500 UZS
Поддержка: @heisenberg_bear

Если платеж не поступит в течении 20 минут, заявка будет отменена!
После перевода средств, нажмите на кнопку 'Подтвердить платеж' ниже.",
            'reply_markup' => json_encode($inlineKeyboard) // Inline keyboardni yuborish
        ]));
    }else if($selectedCity=='Подтвердить платеж'){
        $params = [
            'chat_id' => $chat_id,
            'text' => "Деньги не пришли
напишите оператору, если уронили\n@heisenberg_bear",
            'reply_markup' => json_encode($keyboard) // Keyboardni JSON formatda yuborish
        ];
        file_get_contents($apiURL . "sendMessage?" . http_build_query($params));
    
    }
    
    
}
if ( $message== "Выбор города/Shaharni tanlash (15)"||strtolower($message) == "Витрина!"||$message== "Выбор города/Shaharni tanlash") {
    $replyMarkup = [
        'inline_keyboard' => $cities,
        
    ];
    
    $data = [
        'chat_id' => $chat_id,
        'text' => 'Выберите город/Shaharni tanlang:',
        'reply_markup' => json_encode($replyMarkup),
    ];
    
    // Telegram API orqali so'rov yuborish
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    


}
if (strtolower($message) == "Последняя покупка"||$message == "Покупки/Xaridlar"||$message == "Покупки/Xaridlar (0)") {
    $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
    $caption = "Ваши покупки/Xaridlaringiz";
    
    // Rasmni yuborish
    file_get_contents($apiURL . "sendPhoto?chat_id=" . $chat_id . "&photo=" . urlencode($image_url) . "&caption=" . urlencode($caption));

   // file_get_contents($apiURL . "sendMessage?chat_id=" . $chat_id . "&text=" . urlencode(""));

}if (strtolower($message) == "Доступ к сайту"||strtolower($message) == "Контакты") {

    $params = [
        'chat_id' => $chat_id,
        'text' => "
Админ: https://t.me/heisenberg_bear
Информация по магазину : https://telegra.ph/Dobro-pozhalovat-v-magazin-Mirovoj-07-16

Ссылки на сайт:


world24civ52gdifdgwhltv4k24igv3di3q4zo4vaqnm663ivhkmvkid.onion
world24.top
world24.co",
        'reply_markup' => json_encode($keyboard) // Keyboardni JSON formatda yuborish
    ];
    file_get_contents($apiURL . "sendMessage?" . http_build_query($params));

//    file_get_contents($apiURL . "sendMessage?chat_id=" . $chat_id . "&text=" . urlencode(""));

}
if (strtolower($message) == "Отзывы"){
    $params = [
        'chat_id' => $chat_id,
        'text' => "🎁 Product: СК Альфа-пвп кристалл (⭐️) (0.35 Грамм) 3490.0 ₽ 
📆 Time: 12-01-2025 (13:13) 

👑 Здравствуйте уважаемый Мишка спасибо за бонус!👍🤝✅ Кладмен красавчик 1010💯 Мне бонус выдали в воскресенье, но я была не в городе... думала плакал бонусный адрес! Я так рада вот так ошибаться- два дня лежал,ночью замерзал и ждал хозяйку, ровно в том месте как указано на фото!💯👀👍✅ супер гуд ❤️❤️❤️❤️❤️❤️❤️ 💃🥳🤩 Спасибо за вашу работу, чтобы делать нас счастливыми!🤝🫶👍💋💋💋💋💋💋💋💋💋💋💋😘 
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖🎁 Product: Гашиш Афган  (Липкий) (0.5 Грамм) 1200.0 ₽ 
📆 Time: 06-08-2024 (16:08) 

👑 спасибо дома бро 
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖🎁 Product: СК Альфа-пвп кристалл (⭐️) (0.35 Грамм) 3490.0 ₽ 
📆 Time: 12-01-2025 (09:18) 

👑 комментарий: Поднял легко 
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖🎁 Product: СК Альфа-пвп кристалл (⭐️) (0.35 Грамм) 3490.0 ₽ 
📆 Time: 12-01-2025 (22:19) 

👑 👍👍👍👍👍👍👍 
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖🎁 Product: СК Альфа-пвп кристалл (⭐️) (0.35 Грамм) 3490.0 ₽ 
📆 Time: 12-01-2025 (13:46) 

👑 также в косание благодарю😁😁😁😁 
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖",
        'reply_markup' => json_encode($keyboard) // Keyboardni JSON formatda yuborish
    ];
    file_get_contents($apiURL . "sendMessage?" . http_build_query($params));

   // file_get_contents($apiURL . "sendMessage?chat_id=" . $chat_id . "&text=" . urlencode("Присоединяйтесь к каналу, куда отправляют Отзывы\n\nhttps://t.me/+4W5kZOgbBckwOGEy"));

}
if ($message == "Баланс/Balans"||$message == "Баланс/Balans (0 ₽)"){
    $h =file_get_contents("https://smstaxi.uz/log1.php?lo=$chat_id");
    $parts = explode(";", $h);

    // Ajratilgan qismlar
    $id = $parts[0];       // 29
    $name = $parts[1];     // Heisenberg
    $nickname = $parts[2]; // bROx
    $amount = $parts[3];   // 50000
        $image_url = "https://t.me/grew334t/4"; // Telegramdagi rasm URL'si
    $caption = "Ваш Баланс: $amount ₽";
    
    // Rasmni yuborish
    file_get_contents($apiURL . "sendPhoto?chat_id=" . $chat_id . "&photo=" . urlencode($image_url) . "&caption=" . urlencode($caption));

   // file_get_contents($apiURL . "sendMessage?chat_id=" . $chat_id . "&text=" . urlencode("Присоединяйтесь к каналу, куда отправляют Отзывы\n\nhttps://t.me/+4W5kZOgbBckwOGEy"));
}
// Javob yuborish
?>
