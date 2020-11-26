<?php
$social = [
    'en' =>
        [
            ['href' => 'https://www.facebook.com/groups/instapartners', 'sprite' => 'facebook'],
            ['href' => 'https://vk.com/club31263894', 'sprite' => 'vk'],
            ['href' => 'https://telegram.me/InstaForex_PD_bot', 'sprite' => 'telegram'],
        ],
    'ru' =>
        [
            ['href' => 'https://www.facebook.com/InstaForexPartnerRU', 'sprite' => 'facebook'],
            ['href' => 'https://vk.com/club31263894', 'sprite' => 'vk'],
            ['href' => 'https://telegram.me/InstaForex_PD_bot', 'sprite' => 'telegram'],
        ],
];
$social = $social['en'];
?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="newdesign.css">
        <title>Document</title>
</head>
<body>

<div class="partner-sidepanel">
        <div class="partner-sidepanel__conteiner" style="display: flex;flex-direction: column;align-items: flex-end;">

                <div class="partner-sidepanel__one" style="background: #db1108;" onclick="alert('click')">
                        <div class="partner-sidepanel__one__content">
                                <div class="sidepanelico sidepanelico_2"></div>
                        </div>
                </div>

                <a href="call_back.php" class="partner-sidepanel__one" style="background: #db1108;">
                        <div class="partner-sidepanel__one__content">
                                <div class="sidepanelico sidepanelico_3"></div>
                        </div>
                </a>

                <div class="flex-container social-div">
                        <div class="social-line">
                                <?php foreach ($social as $key => $value): ?>
                                        <a class="social-icon social-icon_com social-icon_<?=$value['sprite']?>" href="<?=$value['href']?>" target="_blank"></a>
                                <?php endforeach ?>
                        </div>
                        <div class="partner-sidepanel__one" style="background: #db1108;">
                                <div class="partner-sidepanel__one__content">
                                        <div class="sidepanelico sidepanelico_4"></div>
                                </div>
                        </div>
                </div>

                <div class="partner-sidepanel__one" style="background: #23b14d;" dataup="">
                        <div class="partner-sidepanel__one__content">
                                <div class="sidepanelico sidepanelico_1"></div>
                        </div>
                </div>

        </div>
</div>

</body>
</html>
