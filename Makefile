# Makefile.

zip:
	# Build zip file for moodle.org with last commit.
	git archive HEAD --prefix="ubicast/" --format=zip -o "block_ubicast.zip"
