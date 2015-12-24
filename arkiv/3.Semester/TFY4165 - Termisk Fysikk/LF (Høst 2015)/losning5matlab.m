%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% maxwell.m:
% Øving 5 FY1005/TFY4165 Termisk fysikk 2014:
% Maxwells hastighetsfordeling for skiver på luftputebord.
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Nullstiller variable og lukker figurer
clear all;
close all;
% Leser eksperimentelle data fra 49 filer mass8_1.txt, mass8_2.txt osv 
% Hver fil inneholder 3 kolonner: 
%      tid (i sekunder), horisontal posisjon, vertikal posisjon
% Posisjonsverdiene multipliseres med faktoren 0.22 for
% at de skal angi verdier i cm.
% Det er 2 linjer med overskrift, derfor 'headerlines',2
% Heltallet j holder styr på totalt antall hastighetsmålinger (920)
j=0;
% Tidssteget er 1/15 sekund
dt = 1.0/15.0;
for ifil = 1:49
   filnavn = ['mass8_',int2str(ifil),'.txt'];
   [t,x,y] = textread(filnavn,'%f %f %f','headerlines',2);
   x = x*0.22;
   y = y*0.22;
   n = length(t);
   for i = 1:n-1, % For i=n kan det ikke beregnes forflytning.
      j = j+1;
      dx(j) = x(i+1) - x(i);
      dy(j) = y(i+1) - y(i);
%%% HER kan det med fordel lages tabeller xpos og ypos med
%%% samtlige x- og y-verdier, med tanke på plotting av skiveposisjoner
   end
end
% Beregner forflytningene (absoluttverdi)
ds = ..........;
% Beregner fart v og hastighetskomponenter vx og vy
v  = ..........;
vx = ..........;
vy = ..........;
%%% HER kan diverse middelverdier beregnes
vmiddel = .........;
vrms = .........;
%%% og evt <vx>, <vy>
%%% HER kan midlere kinetisk energi beregnes og ekvipartisjonsprinsippet
%%% benyttes til å besvare oppgave b).
%%% HER sorteres v, vx og vy med tanke på å lage histogram
v_sortert  = sort(v);
vx_sortert = ......;
vy_sortert = ......;
%%% HER bestemmes bins = antall intervaller; bruk for eksempel
%%% "The Rice Rule"; kommandoen ceil(x) returnerer første heltall
%%% som er større enn argumentet x
bins = ..........;
%%% HER beregnes intervallbredder; lik hele intervallet fra minimal 
%%% til maksimal verdi dividert med antall intervaller (bins)
v_binbredde  = ...........;
vx_binbredde = ...........;
vy_binbredde = ...........;
%%% HER nullstilles tabeller for eksperimentelle og teoretiske fordelinger
f = zeros(1,bins);
%%% osv; du trenger tabeller for f, gx, gy (de eksperimentelle) og tilhørende
%%% teoretiske, samt tabeller for vbin, vxbin og vybin

%%% HER lages eksperimentelle histogrammer og tilhørende teoretiske fordelinger
% Teoretisk fartsfordeling: fteo = 2*B*v*exp(-B*v^2)
% med B = 1/(vrms^2). Siden integralet av fteo fra 0
% til uendelig er lik 1, må fteo multiplisert
% med intervallbredden, summert over de bins=20
% histogramintervallene, bli lik 1.
B = 1/(vrms^2);
k = 1;
ibin = 0;
while (ibin < bins)
    ibin = ibin + 1;
    while (k <= j && v_sortert(k) <= v_binbredde*ibin)
        f(ibin) = f(ibin)+1;
        k=k+1;
    end
    f(ibin) = f(ibin)/j;
    vbin(ibin) = v_binbredde*(ibin-0.5);
    fteo(ibin) = 2*B*vbin(ibin)*exp(-B*vbin(ibin)*vbin(ibin))...
                  *v_binbredde;
end
%%% DERETTER lages på tilsvarende vis eksperimentelle histogrammer og
%%% tilhørende teoretiske fordelinger for komponentene vx og vy.
%%%
%%% HER kan du vurdere å kontrollere at du har fått riktig normering av
%%% de ulike fordelingene: Summen av alle elementene i tabellene f og fteo
%%% skal nå være (omtrent) lik 1. Tilsvarende for gx osv.
%%%
%%% PLOTTING: Her angis essensielt kun bruken av kommandoen bar(x,y). 
%%% Du må selv utvide programmet slik at det totalt sett lager et panel
%%% med 2 x 3 figurer, som vist i øvingsteksten.
figure;
hold on;
bar(vbin,f);
plot(vbin,fteo,'ro');
xlabel('v (cm/s)');
ylabel('Andel fartsmålinger');
title('Fordeling for fart v');
axis([0 120 0 max(f)*1.1]);
