games.zip: $(wildcard games/*)
	cd games && zip -9 -r ../games.zip .
