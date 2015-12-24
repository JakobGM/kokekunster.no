#! /usr/bin/env python3
# -*- coding: UTF-8 -*- 

# FY1001/TFY4145 Mekanisk fysikk hosten 2015.
# Oving 4, oppgave 3: Saturn V, trinn 1.

from numpy import log,linspace
from matplotlib.pyplot import rc,figure,title,xlabel,ylabel,plot,legend,hold,show

if __name__=="__main__":
	rc('font',**{'family':'sans-serif','serif':'Computer Modern'})
	# Starter med aa definere variabler
	# beta=	rakettens masseendring pr tidsenhet (kg/s)
	# u = 	eksoshastighet relativt raketten (m/s)
	# tf =	brenntid (s)
	# g = 	tyngdens akselerasjon p� bakkeniv� (m/s^2)
	# m0 = 	rakettens startmasse (kg)m0 = 3.04E6
	# md = 	-beta*tf = total drivstoffmasse (kg)
	# mf = 	m0-md = rakettens sluttmasse (kg)
	# N = 	antall punkter for plotting langs t-aksen
	beta = -1.32E4
	u = -2580
	tf = 150
	g = 9.81
	m0 = 3.04E6
	md = -beta*tf
	mf = m0-md
	N = 200
	# Tabell med N t-verdier mellom t_min=0 og t_max=tf
	t = linspace(0,tf,N)
	# Regne ut akselerasjonen  a(t)=u*beta/(m0+beta*t)-g
	# ved tid t.
	a=u*beta/(m0+beta*t)-g
	# Regne ut hastigheten v(t)=-u*ln(m0/(m0+beta*t))-g*t
	# ved tid t.
	v=-u*log(m0/(m0+beta*t))-g*t
	# v_max = v(tf)
	v_max = -u*log(m0/(m0+beta*tf))-g*tf
	# a_min = a(0)
	a_min = u*beta/m0 - g
	# a_max = a(tf)
	a_max = u*beta/(m0+beta*tf)-g
	# Skriv ut akselerasjon og hastighet ved t=0 og t=tf
	print('Akselerasjon ved t=0: %f' % (a_min))
	print('Akselerasjon ved t=tf: %f' % (a_max))
	print('Hastighet ved t=tf: %f' % (v_max))
	# Beregne den lineare tilnermingen for akselerasjonen 
	# a_lin = (u*beta/m0)*(1-beta*t/m0)-g
	# Uttrykket er en god approksimasjon for a(t) saa lenge t er
	# mye mindre enn m0/(-beta)
	a_lin=(u*beta/m0)*(1.0-beta*t/m0)-g
	# Plotte a og a_lin i samme figur
	# Benytte LaTeX i figurer
	rc('text', usetex=True)
	figure('Akselerasjon')
	title('Saturn V: Akselerasjon')
	hold(True)
	# Plotte a(t)
	plot(t,a,label=r'$a(t)$')
	# Plotte a_lin(t)
	plot(t,a_lin,label=r'$a_{\rm lin}(t)$')
	# Merke aksene
	xlabel('Tid '+r'$(s)$')
	ylabel('Akselerasjon '+r'$(m/s^{2})$')
	legend(loc='best')
	# Plotter v i ny figur
	figure('Hastighet')
	hold(True)
	title('Saturn V: Hastighet')
	plot(t,v,label=r'v$(t)$')
	xlabel('Tid '+r'$(s)$')
	ylabel('Hastighet '+r'$(m/s)$')
	show()
