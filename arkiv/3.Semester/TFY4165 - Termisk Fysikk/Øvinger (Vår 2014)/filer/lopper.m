%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% lopper.m:
% Øving 7 FY1005/TFY4165 Termisk fysikk 2014:
% Simulering av loppebefengte hunder, se PCH kapittel 4.8.
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Nullstiller variable og lukker figurer
clear all;
close all;
% Antall lopper
N = 10;
% Antall tidssteg
NT = 100;
% Eksponentiell decay-faktor
c = 1/N;
% Nullstiller tabeller
NA = zeros(1,NT);
NB = zeros(1,NT);
NAexp = zeros(1,NT);
tid = zeros(1,NT);
% Alle lopper paa hund A i starten.
% Paa hund A: 1;  Paa hund B: 0
loppested = ones(1,N);
% Tabell med tilfeldig valgt loppe som hopper.
% NT tilfeldige heltall mellom 1 og N.
hopper = randi([1,N],[NT,1]);
% Alle paa hund A i starten
NA(1)=N;
NB(1)=0;
% Analytisk NA(t)
NAexp(1) = (N/2)*(1+exp(-2*c*1));
tid(1) = 1;
for i = 2:NT
    if loppested(hopper(i)) == 1
       loppested(hopper(i)) = 0;
       NB(i)=NB(i-1)+1;
       NA(i)=NA(i-1)-1;
    else
       loppested(hopper(i)) = 1;
       NB(i)=NB(i-1)-1;
       NA(i)=NA(i-1)+1;
    end
    NAexp(i) = (N/2)*(1+exp(-2*c*i));
    tid(i) = i;
end
% Plotting.
figure;
plot(tid,NA/N,tid,NAexp/N);
xlabel('t');
ylabel('N_A(t)/N');
axis([0 NT 0 1])