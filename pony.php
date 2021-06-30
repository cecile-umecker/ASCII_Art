<?php

function six(){
    echo "+-------+" . "     " . "   _ ____" . PHP_EOL;
    echo "| o   o |" . "     " . " /( ) _   \ " . PHP_EOL;
    echo "| o   o |" . "     " . " \//   /\` \,  ||--||--||-" . PHP_EOL;
    echo "| o   o |" . "     " . "  \|   |/  \|  ||--||--||-" . PHP_EOL;
    echo "+-------+" . "     " . "~^~^~^~~^~~~^~~^^~^^^^^^^^^^^^" . PHP_EOL;
}

function cinq(){
    echo "+-------+" . "     " . "   _ ____ __,," .  PHP_EOL;
    echo "| o   o |" . "     " . " /( ) _   / (| " . PHP_EOL;
    echo "|   o   |" . "     " . "/ //   /\`     ||--||--||-" . PHP_EOL;
    echo "| o   o |" . "     " . " / \   | \     ||--||--||-" . PHP_EOL;
    echo "+-------+" . "     " . "~^~^~^~~^~~~^~~^^~^^^^^^^^^^^^" . PHP_EOL;
}

function quatre(){
    echo "+-------+" . "     " . "   _ ____" . PHP_EOL;
    echo "| o   o |" . "     " . " /( ) _   \ " . PHP_EOL;
    echo "|       |" . "     " . " \//   /\` \,  ||--||--||-" . PHP_EOL;
    echo "| o   o |" . "     " . "  \|   |/  \|  ||--||--||-" . PHP_EOL;
    echo "+-------+" . "     " . "~^~^~^~~^~~~^~~^^~^^^^^^^^^^^^" . PHP_EOL;
}

function trois(){
    echo "+-------+" . "     " . "   _ ____ __,," .  PHP_EOL;
    echo "| o     |" . "     " . " /( ) _   / (| " . PHP_EOL;
    echo "|   o   |" . "     " . "/ //   /\`     ||--||--||-" . PHP_EOL;
    echo "|     o |" . "     " . " / \   | \     ||--||--||-" . PHP_EOL;
    echo "+-------+" . "     " . "~^~^~^~~^~~~^~~^^~^^^^^^^^^^^^" . PHP_EOL;
}

function deux(){
    echo "+-------+" . "     " . "   _ ____" . PHP_EOL;
    echo "| o     |" . "     " . " /( ) _   \ " . PHP_EOL;
    echo "|       |" . "     " . " \//   /\` \,  ||--||--||-" . PHP_EOL;
    echo "|     o |" . "     " . "  \|   |/  \|  ||--||--||-" . PHP_EOL;
    echo "+-------+" . "     " . "~^~^~^~~^~~~^~~^^~^^^^^^^^^^^^" . PHP_EOL;
}

function un(){
    echo "+-------+" . "     " . "   _ ____ __,," .  PHP_EOL;
    echo "|       |" . "     " . " /( ) _   / (| " . PHP_EOL;
    echo "|   o   |" . "     " . "/ //   /\`     ||--||--||-" . PHP_EOL;
    echo "|       |" . "     " . " / \   | \     ||--||--||-" . PHP_EOL;
    echo "+-------+" . "     " . "~^~^~^~~^~~~^~~^^~^^^^^^^^^^^^" . PHP_EOL;
}
function bonus(){
    @system('clear');
    $bonus = six();
    usleep(99000);
    @system('clear');
    $bonus = cinq();
    usleep(99000);
    @system('clear');
    $bonus = quatre();
    usleep(99000);
    @system('clear');
    $bonus = trois();
    usleep(99000);
    @system('clear');
    $bonus = deux();
    usleep(99000);
    @system('clear');
    $bonus = un();
    usleep(99000);
    bonus();
}

bonus();



