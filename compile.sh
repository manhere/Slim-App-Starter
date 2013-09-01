#!/bin/bash

scripts=(
  'js/helpers.js'
  'js/scripts.js'
)

join() {
  set $1[*]
  cat <<< "${!1}"
}

scripts=`join scripts`

cat $scripts | uglifyjs -c -m -o js/min/main.min.js

stylus -c styl/main.styl -o ./css
