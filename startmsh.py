#! /usr/bin/env python
import os
import time
import sys
import curses


def sl(t,s,b):
	stdscr = curses.initscr()
	for i in range(t):
		stdscr.addstr(0, 0,"  "+str(s)+" stage min left "+str(t-i))
		stdscr.refresh()
		os.system('echo '+b+' > tb.txt')
		time.sleep(60)

print ("Start")
# start 1 st time box
os.system('timeout 3m timidity ./midi/trava_u_doma.mid')
sl(40,"Work 1",		"1")
	
os.system('timeout 3m timidity ./midi/lesnik.mid')
sl(10,"End Work 1",	"2")

os.system('timeout 3m timidity ./midi/eto_vse.mid')
sl(10,"Relax 1",	"3")

# start 2 st time box
os.system('timeout 3m timidity ./midi/saundtrek.mid')
sl(40,"Work 2",		"4")

os.system('timeout 3m timidity ./midi/lesnik.mid')
sl(10,"End Work 2",	"5")

os.system('timeout 3m timidity ./midi/osen.mid')
sl(10,"Relax 2",	"6")

# start 2 st time box
os.system('timeout 3m timidity ./midi/main_theme.mid')
sl(40,"Work 3",		"7")


os.system('timeout 3m timidity ./midi/ya_svoboden.mid')
sl(10,"end Work 3",	"8")

os.system('timeout 3m timidity ./midi/eto_vse.mid')
#sl(30,"relax 3",	"9")

#big relax


