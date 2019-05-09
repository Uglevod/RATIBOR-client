#! /usr/bin/env python
import os
import time
import sys
import curses


def sl(t,s):
	stdscr = curses.initscr()
	for i in range(t):
		stdscr.addstr(0, 0,"  "+str(s)+" stage min left"+str(t-i))
		stdscr.refresh()
		time.sleep(60)

print ("Start")
os.system('timeout 3s timidity ./midi/trava_u_doma.mid')
#os.system(time.clock())
sl(40,"Work 1")
	
os.system('timeout 3m timidity ./midi/eto_vse.mid')
sl(10,"End Work 1")
os.system('timeout 3m timidity ./midi/lesnik.mid')
sl(10,"Relax 1")

os.system('timeout 3m timidity ./midi/saundtrek.mid')
sl(40,"Work 2")
os.system('timeout 3m timidity ./midi/osen.mid')
sl(10,"End Work 2")
os.system('timeout 3m timidity ./midi/lesnik.mid')
sl(10,"Relax 2")


os.system('timeout 3m timidity ./midi/main_theme.mid')
sl(40,"Work 3")
os.system('timeout 3m timidity ./midi/eto_vse.mid')
sl(10,"end Work 3")
os.system('timeout 3m timidity ./midi/ya_svoboden.mid')
sl(10,"relax 3")
