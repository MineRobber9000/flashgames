all: games.zip games.json

games.zip: $(wildcard games/*)
	cd games && zip -9 -r ../games.zip .

games.json: $(wildcard games/*)
	python games.json.py
