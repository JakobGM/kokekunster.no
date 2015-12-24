#! /usr/bin/env python3
# -*- coding: UTF-8 -*- 

# FY1001/TFY4145 Mekanisk fysikk hosten 2015.
# Oving 3: Numerisk bestemmelse av
# vinkler for fire like masser som henger med jevne
# mellomrom paa ei snor.

# Importering av funksjoner vi trenger fra plotte-modulen 
# matplotlib.pyplot
from matplotlib.pyplot import rc,figure,plot,legend,show,hold
# Importering av matematiske funksjoner og konstanter fra 
# numerikk-modulen Numpy
from numpy import array,append,sqrt,arccos,arctan,tan,pi,arange,cos

# Funksjon som finner losning paa ligningen x=f(x) ved iterasjon
def iterer_los_plot(x0,max_error,max_iter,f):
	# For aa visualisere iterasjonsprosessen tar vi vare paa punktene underveis
	X=array(x0)
	F=array(0.0)
	# Setter startverdi for feilen lik 1.0 slik at while-lokken garantert starter
	error = 1.0
	j = 0
	while error > max_error and j < max_iter:
		x1=f(x0)
		X=append(X,[x0,x0])
		F=append(F,[x0,x1])
		error = abs(x1-x0)
		x0 = x1
		j = j+1
	# Gi beskjed dersom vi har brukt opp max antall iterasjoner
	# uten at feilen har blitt mindre enn max_error
	if j == max_iter:
		print('Max antall iterasjoner brukt opp.\n')
	else:
		print('Losning funnet: x=%3.12f' % (x0))
	# Plotter x, f(x) og iterasjonsprosessen(stiplet)
	x = arange(0,1,0.001)
	figure('Iterasjoner')
	hold(True)
	plot(x,f(x),'b',label=r'$f(x)$')
	plot(X,F,'k--',label='iterasjoner')
	plot(x,x,'g',label=r'$y=x$')
	legend(loc='best')
	show()
	# Returner losningen
	return x0

if __name__ == "__main__":
	rc('font',**{'family':'sans-serif','serif':'Computer Modern'})
	# Her kjorer vi programmet
	# L = snoras lengde
	L = 1.0
	# D = lengden mellom festepunktene
	D = 0.9
	# Vi har utledet en ligning for x = cos(alpha):
	# (L/5)*(1+2x+4x/sqrt(1+3x^2))=D.
	# Denne ligningen kan omformes til en 4.gradsligning i x,
	# og paa sett og vis loses analytisk (se Rottmann). Men losningen
	# blir stygg og gir lite innsikt. Derfor vil vi lose problemet numerisk.
	# En mulighet (det finnes flere!) er da aa omforme ligningen til
	# formen x = f(x), sette inn en startverdi
	# x0 paa hoyre side, regne ut f(x0) og sette x1 = f(x0), deretter
	# regne ut f(x1) og sette x2 = f(x1) osv. Hvis dette "iterative
	# skjemaet" konvergerer, vil vi etter N iterasjoner med god tilnermelse
	# ha xN = x(N-1), som er losningen.
	# Her er flere varianter aktuelle. Vi innforer gamma=(5D/L-1)/2 og har:
	# 1: x = gamma/(1+2/sqrt(1+3x^2))
	# 2: x = gamma - 2x/sqrt(1+3x^2)
	# 3: x = sqrt(1+3x^2)(gamma-x)/2
	gamma = (5*D/L - 1)/2;
	# lambda-uttrykk gjor det enkelt aa benytte funksjoner som argument
	# Uttrykket y=f(x) defineres med 
	# f=lambda x: y(x)
	# Eksempel for funksjonen f(x)=(1-x^2)*cos(x)
	# f=lambda x: (1-x**2)*cos(x)
	# kan naa benytte f som argument til i funksjonen g(f)
	# def g(funk):
	#   funk()
	f=lambda x0: gamma/(1+2/sqrt(1+3*x0*x0))  # Metode 1
	#f=lambda x0: gamma - 2*x0/sqrt(1+3*x0*x0) # Metode 2
	#f=lambda x0: (gamma-x0)*sqrt(1+3*x0*x0)/2 # Metode 3
	# Setter startverdi for x: x0 = 0.5;
	x0=0.5
	# Setter max tillatt feil i x lik 1e-6
	max_error=1e-6
	max_iter=100
	# Benytte funksjonen iterer_los_plot for aa lose x=f(x) numerisk
	x0=iterer_los_plot(x0,max_error,max_iter,f)
	alpha = arccos(x0)
	print('Vinkelen alpha er %3.12f grader' % (alpha*180/pi))

	# Vi kan naa bestemme vinkelen beta, samt de 3 snordragene i enheter av mg:
	beta = arctan(tan(alpha)/2)
	S1 = 2/sqrt(1-x0*x0)
	S2 = sqrt((1+3*x0*x0)/(1-x0*x0))
	S3 = 2*x0/sqrt(1-x0*x0)
	print('Vinkelen beta er %3.12f grader' % (beta*180/pi))
	print('Snordragene er')
	print('S1 = %3.12f' % (S1))
	print('S2 = %3.12f' % (S2))
	print('S3 = %3.12f' % (S3))

