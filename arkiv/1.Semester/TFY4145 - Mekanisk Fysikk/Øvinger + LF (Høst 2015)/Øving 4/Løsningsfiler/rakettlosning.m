% TFY4109 Fysikk hosten 2015.
% Oving 4, oppgave 3: Saturn V, trinn 1.

% Starter med aa definere variabler
beta=-1.32E4;	% rakettens masseendring pr tidsenhet (kg/s)
u=-2580;	% eksoshastighet relativt raketten (m/s)
tf=150;		% brenntid (s)
g=9.81;		% tyngdens akselerasjon p� bakkeniv� (m/s^2)
m0=3.04E6;	% rakettens startmasse (kg)m0 = 3.04E6
md=-beta*tf;	% total drivstoffmasse (kg)
mf=m0-md;	% rakettens sluttmasse (kg)
N=200;		% antall punkter for plotting langs t-aksen

% Tabell med N t-verdier mellom t_min=0 og t_max=tf
t=linspace(0,tf,N);

% Regne ut akselerasjonen  a(t)=u*beta/(m0+beta*t)-g
% ved tid t.
a=u*beta./(m0+beta.*t)-g;
% Regne ut hastigheten v(t)=-u*ln(m0/(m0+beta*t))-g*t
% ved tid t.
v=-u*log(m0./(m0+beta.*t))-g.*t;
% v_max = v(tf)
v_max=-u*log(m0/(m0+beta*tf))-g*tf;
% a_min = a(0)
a_min=u*beta/m0 -g;
% a_max = a(tf)
a_max=u*beta/(m0+beta*tf)-g;

% Beregne den lineare tilnermingen for akselerasjonen 
% a_lin = (u*beta/m0)*(1-beta*t/m0)-g
% Uttrykket er en god approksimasjon for a(t) saa lenge t er
% mye mindre enn m0/(-beta)
a_lin=(u*beta/m0).*(1.0-beta.*t/m0)-g;

% Skriv ut akselerasjon og hastighet ved t=0 og t=tf
fprintf('Akselerasjon ved t=0: %f\n' , a_min)
fprintf('Akselerasjon ved t=tf: %f\n' , a_max)
fprintf('Hastighet ved t=tf: %f\n' , v_max)

% Plotte a og a_lin i samme figur
figure;
hold on;
% Plotte a(t)
plot(t,a,'k');
% Plotte a_lin(t)
plot(t,a_lin,'r');
hold off;
title('Saturn V: Akselerasjon');
% Merke aksene
xlabel('Tid(s)');
ylabel('Akselerasjon (m/s^{2})');
legend('a(t)','a_{lin}(t)');
% Plotter v i ny figur
figure;
plot(t,v);
title('Saturn V: Hastighet');
xlabel('Tid(s)');
ylabel('Hastighet (m/s)');


