%TFY4109 Fysikk hosten 2015.
%Oving 4: Saturn V, trinn 1.
clear all;
%beta = rakettens masseendring pr tidsenhet (kg/s)
beta = -1.32E4;
%u = eksoshastighet relativt raketten (m/s)
u = -2580;
%tf = brenntid (s)
tf = 150;
%g = tyngdens akselerasjon paa bakkenivaa (m/s^2)
g = 9.81;
%m0 = rakettens startmasse (kg)
m0 = 3.04E6;
%md = -beta*tf = total drivstoffmasse (kg)
md = -beta*tf;
%mf = m0-md = rakettens sluttmasse (kg)
mf = m0-md;
%N = antall punkter for plotting langs t-aksen
N = 200;
%tabell med N t-verdier mellom t_min=0 og t_max=tf
t_min = 0;
t_max = tf;
t = linspace(t_min,t_max,N);
%a(t)=u*beta/(m0+beta*t)-g = aksel. ved tid t (m/s^2)
HER MAA DU SKRIVE EN LINJE SOM TILORDNER a-verdier
%v(t)=-u*ln(m0/(m0+beta*t))-g*t = hastighet ved tid t (m/s)
HER TILORDNER DU v-verdier (BRUK log FOR ln I MATLAB!)
%v_min = 0
v_min = 0.0;
%v_max = v(tf)
v_max = -u*log(m0/(m0+beta*tf))-g*tf;
%a_min = a(0)
a_min = u*beta/m0 - g;
%Skriv ut a(0)
disp('Akselerasjon ved t=0:')
a_min
%a_max = a(tf)
a_max = u*beta/(m0+beta*tf)-g;
%Skriv ut a(tf)
disp('Akselerasjon ved t=tf:')
a_max
%Skriv ut v(tf)
disp('Hastighet ved t=tf:')
v_max
%a_lin = (u*beta/m0)*(1-beta*t/m0)-g = tilnaermet lineart
%uttrykk for a(t), en god approksimasjon saa lenge t er
%mye mindre enn m0/(-beta)
HER TILORDNER DU VERDIER FOR a_lin
%Plotter a og a_lin i samme figur
plot(t,a,t,a_lin,'linewidth',2);
axis([t_min t_max 0 a_max]);
% Aksetekster:
xlabel('Tid (s)');
ylabel('Akselerasjon (m/s^2)');
% Tittel:
title('Oving 4: Akselerasjon');
%Be om ny figur:
figure;
%Plotter v
plot(t,v,'linewidth',2);
axis([t_min t_max v_min v_max]);
% Aksetekster:
xlabel('Tid (s)');
ylabel('Hastighet (m/s)');
% Tittel:
title('Oving 4: Hastighet');
