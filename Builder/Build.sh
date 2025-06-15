#!/usr/bin/env bash

echo "=-=-=-=-=-=-=-=-=-=";
echo "=  Building Rune  =";
echo "=-=-=-=-=-=-=-=-=-=";

bash Less.sh
php ./Archiver.php
echo "Done building.";