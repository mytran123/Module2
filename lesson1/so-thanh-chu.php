
<?php
function convert_number_to_words($number) {
    $dictionary = array(
        0 => 'không',
        1 => 'một',
        2 => 'hai',
        3 => 'ba',
        4 => 'bốn',
        5 => 'năm',
        6 => 'sáu',
        7 => 'bảy',
        8 => 'tám',
        9 => 'chín',
        10 => 'mười',
        11 => 'mười một',
        12 => 'mười hai',
        13 => 'mười ba',
        14 => 'mười bốn',
        15 => 'mười năm',
        16 => 'mười sáu',
        17 => 'mười bảy',
        18 => 'mười tám',
        19 => 'mười chín',
        20 => 'hai mươi',
        30 => 'ba mươi',
        40 => 'bốn mươi',
        50 => 'năm mươi',
        60 => 'sáu mươi',
        70 => 'bảy mươi',
        80 => 'tám mươi',
        90 => 'chín mươi',
        100 => 'một trăm',
        200 => 'hai trăm',
        300 => 'ba trăm',
        400 => 'bốn trăm',
        500 => 'năm trăm',
        600 => 'sáu trăm',
        700 => 'bảy trăm',
        800 => 'tám trăm',
        900 => 'chín trăm'
    );
    if (!is_numeric($number)) {
        return false;
    }
    switch (true) {
        case $number < 10 && $number >= 0;
            echo $dictionary[$number];
            break;
        default:
            echo "out of ability";
    }
}




