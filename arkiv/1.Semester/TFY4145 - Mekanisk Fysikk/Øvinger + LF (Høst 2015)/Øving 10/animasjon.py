#! /usr/bin/env python3
# -*- coding: UTF-8 -*- 

from numpy import linspace,zeros,sin,sqrt,pi
from matplotlib.pyplot import figure,axes,plot,show,xlabel,ylabel,title
from matplotlib.animation import FuncAnimation

#   Funksjon som beregner strengens utsving (innkommende + reflektert bolge for x<0,
#   og transmittert bolge for x>0)
def set_utsving(x,y,A,B,C,k1,k2,w,t,N):
    # For x<0
    y[0:N]=A*sin(k1*x[0:N]-w*t)+B*sin(k1*x[0:N]+w*t)
    # For x>0
    y[N:2*N]=C*sin(k2*x[N:2*N]-w*t)


def svingende_streng(mu_1,mu_2,f,S,A):
    v_1=sqrt(S/mu_1)            # Bolgehastighet x<0
    v_2=sqrt(S/mu_2)            # Bolgehastighet x>0
    w=2*pi*f                    # Vinkelfrekvens
    k_1=w/v_1                   # Bolgetall x<0
    k_2=w/v_2                   # Bolgetall x>0
    B=A*(sqrt(mu_2)-sqrt(mu_1))/(sqrt(mu_1)+sqrt(mu_2)) # Amplitude reflektert bolge
    C=A*2.0*sqrt(mu_1)/(sqrt(mu_1)+sqrt(mu_2))          # Amplitude transmittert bolge
    N=400                       # Halve antall punkter i x-retning
    M=400                       # 
    k_min=k_1
    if(k_2<k_1):
        k_min=k_2
    x_max=2*2*pi/k_min          # Storste x-verdi
    y_max=1.25*(abs(A)+abs(B))  #
    x=linspace(-x_max,x_max,num=2*N)    # Tabell med 2N x-verdier mellom -x_max og x_max
    y=zeros(2*N)                        # Tabell med 2N "nuller"

    # Animere strengen
    figur=figure('Figur')               
    akse=axes(xlim=(-pi,pi),ylim=(-y_max,y_max))
    title('Transmisjon og refleksjon i x=0 av harmonisk bolge paa streng')
    xlabel('posisjon '+r'$(m)$')
    ylabel('utsving  '+r'$(mm)$')
    linje, =plot([], [], lw=2)
    def initialisering():
        linje.set_data([], [])
        return linje,
    def animere(i):
        set_utsving(x,y,A,B,C,k_1,k_2,w,i*10*2*pi/(w*M),N)
        linje.set_data(x,y)
        return linje,
    animasjon=FuncAnimation(figur,animere,init_func=initialisering,frames=200,interval=50,blit=True)
    show()

if __name__=='__main__':
    # Definere parametre
    mu_1=.01    # Massetetthet for x<0
    mu_2=.09    # Massetetthet for x>0
    f=5.0       # Frekvens for innkommende bolge
    S=4.0       # Snordrag
    A=5.0       # Amplitude for innkommende bolge
    # Her kaller vi funsjonen
    svingende_streng(mu_1,mu_2,f,S,A)
