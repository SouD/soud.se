#!/bin/bash

# General settings (1 is false and 0 is true)
TRUE=0;
FALSE=1;
COMPRESS=$TRUE;

# Dirs
WEB_ROOT=public_html/;
SRC_DIR=sass/;
OUT_DIR=css/;

# Module main file name
MOD_MAIN_NAME=style; # MOD short for MODULE

# Extensions
SASS_EXT=.scss;
CSS_EXT=.css;
MIN_CSS_EXT=.min.css;

# Module main file names w/ extensions
MOD_SASS=$MOD_MAIN_NAME$SASS_EXT;
MOD_CSS=$MOD_MAIN_NAME$CSS_EXT;
MOD_MIN_CSS=$MOD_MAIN_NAME$MIN_CSS_EXT;

cd $WEB_ROOT;

for MOD_SRC in $(find "$SRC_DIR" -name $MOD_SASS); do
    echo "Module found $MOD_SRC";

    if [ ! -r "$MOD_SRC" ]; then
        echo "Cannot read from $MOD_SRC"
        exit 1;
    fi;

    MOD_SRC_DIR="$(dirname $MOD_SRC)/"; # Not sure if best approach...
    MOD_OUT_DIR="${MOD_SRC_DIR/$SRC_DIR/$OUT_DIR}";

    if [ ! -d "$MOD_OUT_DIR" ]; then
        mkdir -p "$MOD_OUT_DIR";
    fi;

    MOD_OUT="$MOD_OUT_DIR$MOD_CSS";

    if [ ! -e "$MOD_OUT" ]; then
        touch "$MOD_OUT";
    fi;

    if [ ! -w "$MOD_OUT" ]; then
        echo "Cannot write to $MOD_OUT"
        exit 1;
    fi;

    echo "Building $MOD_OUT ...";
    sass "$MOD_SRC:$MOD_OUT"

    if [ $COMPRESS == $TRUE ]; then
        MOD_MIN_OUT="$MOD_OUT_DIR$MOD_MIN_CSS";

        if [ ! -e "$MOD_MIN_OUT" ]; then
            touch "$MOD_MIN_OUT";
        fi;

        if [ ! -w "$MOD_MIN_OUT" ]; then
            echo "Cannot write to $MOD_MIN_OUT"
            exit 1;
        fi;

        echo "Compressing $MOD_MIN_OUT ...";
        sass --style compressed "$MOD_SRC:$MOD_MIN_OUT";
    fi;
done;

exit 0;
