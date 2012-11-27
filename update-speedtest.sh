#!/bin/bash

# This script fetches the latest version of mini.zip from http://www.speedtest.net/mini.php
# and places the content into the assets/ subfolder
# WARNING: overwrites /tmp/mini.zip

curl --output /tmp/mini.zip http://c.speedtest.net/mini/mini.zip 
unzip -o -d `dirname "$0"`/assets /tmp/mini.zip 
