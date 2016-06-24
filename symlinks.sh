#!/bin/bash

echo
echo 'Creating symlinks..'

ln -svf vendor/pxn/phputils/update.sh     update.sh
ln -svf vendor/pxn/phputils/pxnloader.php pxnloader.php

[ -d public/static ] || mkdir -pv public/static/
ln -svf ../../vendor/twbs/bootstrap/    public/static/
ln -svf ../../vendor/components/jquery/ public/static/

#if [ -d ../phpUtils/ ]; then
#	pushd "vendor/pxn/" || exit 1
#	ln -s ../../../phpUtils/ phputils
#	popd
#fi

#if [ -d ../phpPortal/ ]; then
#	pushd "vendor/pxn/" || exit 1
#	ln -s ../../../phpPortal/ phpportal
#	popd
#fi

echo

