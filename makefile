# the files to be included in the zip file
files =	Bootstrap-Theme/template.php Bootstrap-Theme/css/bootstrap-responsive.min.css \
		Bootstrap-Theme/css/bootstrap.min.css \
		Bootstrap-Theme/img/glyphicons-halflings-white.png \
		Bootstrap-Theme/img/glyphicons-halflings.png Bootstrap-Theme/js/bootstrap.min.js \
		images/screenshot.png readme.md

# the current version of the theme
version = 0.3

# the `make` command
bootstrap-theme-$(version).zip :	# does not depend on other files
									zip -9 -X bootstrap-theme-$(version).zip $(files)

# the `make clean` command
clean :								# does not depend on other files
									rm -fv bootstrap-theme-*.zip
