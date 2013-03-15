# this makefile packages all the required files for the theme into a zip file ready for
# distribution on Extend

# the files to be included in the zip file
files =	Bootstrap-Theme/template.php Bootstrap-Theme/css/bootstrap-responsive.min.css \
		Bootstrap-Theme/css/bootstrap.min.css \
		Bootstrap-Theme/img/glyphicons-halflings-white.png \
		Bootstrap-Theme/img/glyphicons-halflings.png Bootstrap-Theme/js/bootstrap.min.js \
		images/screenshot.png readme.md

# the current version of the theme
version = 0.4

# make the zip file
bootstrap-theme-$(version).zip :    # does not depend on other files
									zip -9 -X bootstrap-theme-$(version).zip $(files)

# clean up the zip file
clean :                             # does not depend on other files
									rm -fv bootstrap-theme-*.zip
