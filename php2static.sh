#!/bin/zsh

PREFIX=../basket-notepads.github.io
mkdir -pv $PREFIX

rsync -rCi --delete --exclude='*.php' --exclude='*.sh' ./ $PREFIX/

for p in **/*.php ; do
  if [ "$(dirname $p)" != "includes" ] ; then
    DIR=$p:h
    mkdir -pv $DIR
    HTML_FILE=$p:r.html
    
    php $p > $PREFIX/$HTML_FILE  # PHP
    sed -i 's/\(<a href="[^"]*\)\.php"/\1\.html"/' $PREFIX/$HTML_FILE  # Replace the extension in <a href>s
  fi
done