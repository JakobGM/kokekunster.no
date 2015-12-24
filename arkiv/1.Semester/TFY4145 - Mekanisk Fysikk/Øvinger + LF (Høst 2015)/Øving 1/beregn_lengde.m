% I Matlab defineres funksjoner med kodeordet function. For informasjon om 
% hvordan du lager funksjoner, skriv help function i Matlab-kommandovinduet.
%
% Funksjon som for gitt vinkel (alpha) setter opp en tabell med vinkler 
% mellom alpha og pi/2, for saa aa beregne lengden paa kastet for hver vinkel.
% Funksjonen returnerer en tabell med vinkler og en tabell med lengder.
function [vinkel,lengde]=beregn_lengde(alpha)
% Antallet vinkler vi vil beregne lengden for setter vi her
N=100;
% Definerer den minste og storste utgangsvinkelen
theta_min=alpha;
theta_max=0.9999*pi/2;
% Setter opp en tabell med N jevnt fordelte verdier mellom theta_min og 
% theta_max med den innebygde funksjonen linspace.
vinkel=linspace(theta_min,theta_max,N);
% Selve utregningen av lengden paa kastet
lengde=cos(vinkel).^2.*(tan(vinkel)-tan(alpha))./cos(alpha);
% Her sorger . foran operatoren (*+-/) for at operasjonen blir utfort
% for hvert element i tabellen vinkel, slik at lengde blir en tabell med 
% samme storrelse som vinkel.
