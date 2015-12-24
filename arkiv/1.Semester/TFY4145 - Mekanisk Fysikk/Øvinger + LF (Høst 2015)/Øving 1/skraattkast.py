#! /usr/bin/env python3
# -*- coding: UTF-8 -*- 

# FY1001/TFY4145 Mekanisk fysikk hosten 2015.
# Oving 1: Plotting av funksjonen
# cos(theta)*cos(theta)*(tan(theta)-tan(alpha))/cos(alpha), 
# som angir lengden av et skraatt kast i motbakke med
# helningsvinkel alpha, som funksjon av utgangsvinkelen theta,
# relativt horisontalretningen.
# Theta maa ligge mellom alpha og pi/2.

# Importering av funksjoner vi trenger til plottingen, fra plotte-modulen
# Matplotlib
from matplotlib.pyplot import rc,figure,title,xlabel,ylabel,plot,legend,show
# Importering av matematiske funksjoner vi trenger, fra numerikk-modulen
# NumPy
from numpy import sin,cos,tan,linspace,pi

# Her definerer vi en funksjon for aa beregne lengden paa kastet.
# I Python defineres funksjoner som
#
# def funksjonsnavn(arg_1,arg_2,...):
#   kode
#   return (var_1, var_2, ...)
#
# De innrykkede linjene(kode, return) er selve funksjonen.
# Denne funksjonen tar inn argumentene arg_1,arg_2, etc.
# I feltet kode kjores kommandoer, for aa finne variablene var_1, var_2, etc.
# I siste linje returneres disse variablene.
#
# Tegnet # brukes for aa skille kommentarer fra kode.

def beregn_lengde(alpha):
    # Denne funksjonen tar helningsvinkelen alpha som argument.
    # Antall vinkler vi vil regne ut lengden paa kastet for
    N=100
    # Den minste vinkelen(theta_min) vi kan kaste er helningsvinkelen paa
    # bakken.
    theta_min=alpha
    # Den storste vinkelen(theta_max) vi kan kaste er pi/2 (rett opp)
    theta_max=0.9999*pi/2
    # Her setter vi opp en tabell (theta) med N vinkler jevnt fordelt mellom
    # theta_min og theta_max
    theta=linspace(theta_min,theta_max,N)
    # Her regner vi for hver vinkel ut lengden paa kastet, og lagrer det i 
    # tabellen L.
    # Legg merke til at L automatisk blir en tabell, av samme storrelse som
    # tabellen theta.
    L=cos(theta)*cos(theta)*(tan(theta)-tan(alpha))/cos(alpha)
    # Til slutt returnerer vi tabellene med vinkler og lengder.
    return (theta, L)
    
def kjor_program():
    # I denne funksjonen vil vi regne ut lengder, og plotte dem i en figur.
    # Vi starter med aa regne ut lengden paa kastene, for ulike helningsvinkler,
    # ved aa benytte funksjonen beregn_lengde, som vi definerte ovenfor.
    (T1,L1)=beregn_lengde(pi/6)
    (T2,L2)=beregn_lengde(pi/5)
    (T3,L3)=beregn_lengde(pi/4)
    (T4,L4)=beregn_lengde(pi/3)
    # Vi har naa fire sett med vinkler, og korresponderende lengder.
    # Setter font til Computer Modern
    rc('font',**{'family':'sans-serif','serif':'Computer Modern'})
    # Vi kan naa lage en figur
    figure('Oving 1')
    # Tittelen paa figuren setter vi med
    title('Øving 1, skrått kast i motbakke med helningsvinkel '+r'$\alpha$')
    # Merking av akser gjores med
    xlabel('Utgangsvinkel (grader)')
    ylabel(r'$Lg/v_{0}^{2}$'+' (dimensjonsløs lengde)')
    # Her plotter vi punktene fra tabellene theta og L.
    plot(T1*180/pi,L1,label=r'$\alpha=\pi/6$')
    plot(T2*180/pi,L2,label=r'$\alpha=\pi/5$')
    plot(T3*180/pi,L3,label=r'$\alpha=\pi/4$')
    plot(T4*180/pi,L4,label=r'$\alpha=\pi/3$')
    # Naar vi plotter flere kurver i samme figur, er det lurt aa vise en oversikt
    # over kurvene, med 
    legend(loc='best')
    # Her gjor 'best' at denne oversikten blir plassert slik at den dekker minst
    # mulig av kurvene i plottet.
    # For aa vise figuren 
    show()

# Den neste linjen starter programmet
if __name__ == '__main__':
    # Her er selve programmet.
    # I dette tifellet er programmet "bare" funksjonen kjor_program
    kjor_program()
