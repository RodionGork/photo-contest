Resize to 900x900 box, first moving into some subfolder

    for f in *.jpg ; do convert $f -resize 900x900 ../$f ; done
