#!/bin/bash

# Dirs
SRC_DIR=public_html/sass/
OUT_DIR=public_html/css/

# Base style
BASE_SASS=${SRC_DIR}style.scss
BASE_CSS=${OUT_DIR}style.css
BASE_MIN_CSS=${OUT_DIR}style.min.css

# Dashboard style
D_SRC_DIR=${SRC_DIR}dashboard/
D_OUT_DIR=${OUT_DIR}dashboard/
D_SASS=${D_SRC_DIR}style.scss
D_CSS=${D_OUT_DIR}style.css
D_MIN_CSS=${D_OUT_DIR}style.min.css

# Build sass
sass $BASE_SASS:$BASE_CSS
sass --style compressed $BASE_SASS:$BASE_MIN_CSS

sass $D_SASS:$D_CSS
sass --style compressed $D_SASS:$D_MIN_CSS

# Exit script
exit 0