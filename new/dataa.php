<?php

if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    $bersih = "cls";
} else {
    $bersih = "clear";
}

date_default_timezone_set('Asia/Jakarta');
$date = date('d~M~Y H:i:s');
$green = "\e[92m";
$red = "\e[91m";
$yellow = "\e[93m";
$blue = "\e[36m";
$cyan = "\e[0;36m";
$purple = "\e[0;35m";
$brown = "\e[0;33m";
$lightgray = "\e[0;37m";
$nick = "XerXez7 Gans";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";
$bg = "\033[48;9;32m";
$gb = "\033[0;0m";
$rd = "\033[41;2;32m";
pilih:
    system($bersih);

echo "$bg Xcode By : XerXez77 $gb
$green        W
       WWW
       WWW
      WWWWW       $lightred   [$darkgray NekoPoi :$lightpurple Install whit Termux$lightred  ]$green
W     WWWWW     W $lightred   [$darkgray Version :$lightpurple 1.3.1$lightred                ]$green
WWW   WWWWW   WWW  $lightred  [$darkgray Author  :$lightpurple XerXez777$lightred            ]$green
 WWW  WWWWW  WWW $lightred    [$darkgray Since   :$lightpurple 2k19-2k20$lightred            ]$green
  WWW  WWW  WWW   $lightred   [$darkgray Log     :$lightpurple $date$lightred ]$green
   WWW WWW WWW   $lightred    [$darkgray Team    :$lightpurple FR13NDS!T-Black CoderCrus$lightred  ] $green
     WWWWWWW
  WWWW$darkgray  |$green  WWWW
$darkgray        |$bg$lightred
11)$lightgreen [NekoPoi]_LOL-163    $lightred |$darkgray 16)$lightgreen [NekoPoi]_SSNI-166$darkgray
12)$lightgreen [NekoPoi]_Ane_Chijo  $lightred |$darkgray 17)$lightgreen [NekoPoi]_Araiya$darkgray
13)$lightgreen [NekoPoi]_MIDE-511   $lightred |$darkgray 18)$lightgreen [NekoPoi]_Otome_Chibaku$darkgray
14)$lightgreen Shoujo_Kyouiku_01    $lightred |$darkgray 19)$lightgreen [NekoPoi]_RKI-438$darkgray
15)$lightgreen [NekoPoi]_VRTM-001   $lightred |$darkgray 20)$lightgreen [NekoPoi]_Imouto3$darkgray $brown
";
