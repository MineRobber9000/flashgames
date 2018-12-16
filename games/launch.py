import subprocess
import os
import re
import sys

COMMAND = ("projector.exe" if sys.platform.startswith("win32") else "wine projector")+" {}"

games = {}

for game in os.listdir("."):
	if game.endswith(".swf"):
		name = re.sub("([a-z0-9])([A-Z0-9])",r"\g<1> \g<2>",game[:-4])
		games[name]=game

names = sorted(games.keys())

prompt = "Select a game:\n"
for i, name in enumerate(names,1):
	prompt+="{}) {}\n".format(i,name)
print(prompt.strip())
i = int(input("> "))-1
while i not in range(len(names)):
	print("Please use a number from 1 to {!s}.".format(len(names)))
	i = int(input("> "))-1
subprocess.run(COMMAND.format(games[names[i]]),shell=True)
