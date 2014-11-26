#!/bin/bash

# Vars
SASS_SRC_DIR=public_html/sass/
SASS_FILE=style.scss
CSS_SRC_DIR=public_html/css/
CSS_FILE=style.css
CSS_MIN_FILE=style.min.css

# Build sass
sass $SASS_SRC_DIR$SASS_FILE:$CSS_SRC_DIR$CSS_FILE
sass --style compressed $SASS_SRC_DIR$SASS_FILE:$CSS_SRC_DIR$CSS_MIN_FILE

# Exit script
exit 0