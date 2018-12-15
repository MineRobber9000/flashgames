import os, re, json

OUT = dict()
games = []

for file in os.listdir("games"):
	if file.endswith(".swf"):
		games.append(re.sub("([a-z0-9])([A-Z0-9])",r"\g<1> \g<2>",file[:-4]))

OUT["games"] = games
OUT["count"] = len(games)

with open("games.json","w") as f:
	json.dump(OUT,f)
