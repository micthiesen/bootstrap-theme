# this makefile packages all the required files for the theme into a zip file ready for
# distribution on Extend

# the files to be included in the zip file
FILES =	Bootstrap-Theme/template.php Bootstrap-Theme/css/custom.css \
		Bootstrap-Theme/css/bootstrap.min.css \
		Bootstrap-Theme/fonts/glyphicons-halflings-regular.eot \
		Bootstrap-Theme/fonts/glyphicons-halflings-regular.svg \
		Bootstrap-Theme/fonts/glyphicons-halflings-regular.ttf \
		Bootstrap-Theme/fonts/glyphicons-halflings-regular.woff \
		Bootstrap-Theme/js/bootstrap.min.js \
		images/screenshot.png readme.md

# the server to update the files on (change this if you want to use update)
SERVER = k5r8@remote.ugrad.cs.ubc.ca:~/public_html/

# the current version of the theme
VERSION = 1.3

# make the zip file
bootstrap-theme-$(VERSION).zip:
	zip -9 -X bootstrap-theme-$(VERSION).zip $(FILES)

# clean up the zip file
clean:
	rm -fv bootstrap-theme-*.zip

# update the theme on a server
update:
	rsync -rvp --del --include "*/" --include "*.css" \
	--include "*.png" --include "*.php" --include "*.svg" \
	--include "*.woff" --include "*.ttf" --include "*.js" \
	--exclude "*" \
	Bootstrap-Theme/ $(SERVER)theme/Bootstrap-Theme/
