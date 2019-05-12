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

print ("Relax")
sl(30,"Relax Big",	"9")
os.system('timeout 3m timidity ./midi/eto_vse.mid')
#big relax


