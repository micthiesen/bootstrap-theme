# this makefile packages all the required files for the theme into a zip file ready for
# distribution on Extend

# the files to be included in the zip file
files =	Bootstrap-Theme/template.php Bootstrap-Theme/css/bootstrap-responsive.min.css \
		Bootstrap-Theme/css/bootstrap.min.css \
		Bootstrap-Theme/img/glyphicons-halflings-white.png \
		Bootstrap-Theme/img/glyphicons-halflings.png Bootstrap-Theme/js/bootstrap.min.js \
		images/screenshot.png readme.md

# the server to update the files on (change this if you want to use update)
server = k5r8@remote.ugrad.cs.ubc.ca:~/public_html/

# the current version of the theme
version = 0.4

# make the zip file
bootstrap-theme-$(version).zip :    # does not depend on other files
									zip -9 -X bootstrap-theme-$(version).zip $(files)

# clean up the zip file
clean :                             # does not depend on other files
									rm -fv bootstrap-theme-*.zip

# update the theme on a server
update :							# does not depend on other files
									rsync -rvp --del --include "*/" --include "*.min.*" \
									--include "*.png" --include "*.php" --exclude "*" \
									Bootstrap-Theme/ $(server)theme/Bootstrap-Theme/
