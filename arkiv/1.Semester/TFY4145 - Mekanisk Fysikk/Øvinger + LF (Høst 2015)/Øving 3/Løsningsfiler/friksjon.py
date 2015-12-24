#! /usr/bin/env python3
# -*- coding: UTF-8 -*- 

# FY1001/TFY4145 Mekanisk fysikk hosten 2015.
# Oving 3: Beregning av midlere
# friksjonskoeffisient utifra fysiske data

from numpy import array,log,sum,sqrt,loadtxt
from matplotlib.pyplot import rc,figure,title,xlabel,ylabel,scatter,plot,legend,savefig,show,hold

# Funksjon som beregner middelverdi, standardavvik og standardfeil
def beregn_middel(mu):
	# Antall verdier
	N=len(mu)
	musum=sum(mu)
	# Middelverdi av mu
	mumiddel=musum/N
	# Standardavvik og standardfeil i mu:
	kvadratavvik=sum((mu-mumiddel)**2)
	deltamu=sqrt(kvadratavvik/(N-1))
	deltamumiddel=deltamu/sqrt(N)
	# Returnerer middelverdi, standardavvik og standardfeil
	return (mumiddel,deltamu,deltamumiddel)

if __name__=="__main__":
	rc('font',**{'family':'sans-serif','serif':'Computer Modern'})
	# Lese data fra fil 'friksjon.txt' til variabel data
	data=loadtxt('snorkraft.txt')
	# I filen er 1. kolonne vinkler, og 2. kolonne snordrag
	# data blir derfor en tabell med to kolonner, og like 
	# mange rader som i filen.
	# Egne tabeller for vinklene og snordragene
	phi=data[:,0]
	S=data[:,1]
	# her representerer : alle radene.
	# S0 = 185.0 gram = loddets masse
	S0 = 185.0
	mu=log(S/S0)/phi
	(mm,dm,dmm)=beregn_middel(mu)
	print('mumiddel = %f' % (mm))
	print('deltamu = %f' % (dm))
	print('deltamumiddel = %f' % (dmm))
	figure('Figur 1')
	title('Oving 3')
	hold(True)
	xlabel(r'$\phi$'+'(rad)')
	scatter(phi,log(S/S0),label=r'$\ln(S/S0)$')
	plot(phi,mm*phi,label=r'$\overline{\mu}$',color='b')
	plot(phi,(mm+dm)*phi,label=r'($\overline{\mu}+\Delta\mu)$',color='g')
	plot(phi,(mm-dm)*phi,label=r'($\overline{\mu}-\Delta\mu)$',color='r')
	legend(loc='best')
	# Lagre figuren som vektorgrafikk(eps-format)
	savefig('snorkraft.eps')
	show()
