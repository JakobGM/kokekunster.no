% Oving 1 TFY4109 Fysikk hosten 2015
% Plotting av lengden på skaatt kast i motbakke med gitt helningsvinkel
%
% I matlab-kode er alt som staar etter et %-tegn kommentarer
% Vi starter med aa fjerne alle variabler fra tidligere program med clear 
clear all;
% Her vil vi benytte funksjonen beregn_lengde (definert i filen 
% beregn_lengde.m som maa ligge i samme mappe som denne filen) til aa
% beregne lengden (L1) paa kast med ulike utgangsvinkler (T1), i en 
% motbakke med helningsvinkel pi/6.
[T1,L1]=beregn_lengde(pi/6);
% Et semikolon paa slutten av linjen hindrer utskrift til skjerm.
% Vi kan enkelt beregne lengden paa kast i motbakker med andre helningsvinkler
[T2,L2]=beregn_lengde(pi/5);
[T3,L3]=beregn_lengde(pi/4);
[T4,L4]=beregn_lengde(pi/3);
% Vi lager en figur ved aa plotte tabellen med vinkler mot tabellene med lengder.
% For mer informasjon om plotting, skriv help plot i matlab-kommandovinduet.
plot(T1*180/pi,L1,'k');
% For aa kunne plotte flere grafer i samme figur, ber vi matlab om aa beholde
% alle grafer som blir plottet med kommandoen hold on
hold on;
plot(T2*180/pi,L2,'r');
plot(T3*180/pi,L3,'g');
plot(T4*180/pi,L4,'b');
% For aa vise en oversikt over grafene, benytter vi funksjonen legend.
% Legg merke til at vi kan benytte LaTeX-koder.
legend('\alpha=\pi/6','\alpha=\pi/5','\alpha=\pi/4','\alpha=\pi/3');
% Tittelen paa figuren settes med
title('{\O}ving 1, skr{\aa}tt kast i motbakke med helningsvinkel \alpha');
% Merkelapper paa aksene settes med
xlabel('Utgangsvinkel (grader)');
ylabel('Lg/v_0^2 (dimensjonsl{\o}s lengde)');
hold off;
