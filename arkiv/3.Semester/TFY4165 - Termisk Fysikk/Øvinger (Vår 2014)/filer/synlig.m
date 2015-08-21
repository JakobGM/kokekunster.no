%FY1005/TFY4165 Termisk fysikk vår 2014.
%Øving 11, oppgave 7.
%Beregning av temperatur som gir maksimal andel av
%utsendt energi i det synlige området mellom 400 og 700 nm.
%
clear all;
close all;
%konstanter
h = 6.626e-34;
c = 2.998e8;
k = 1.3806e-23;
sigma = 2*pi^5*k^4/(15*h^3*c^2);
%Plotter ksi(lambda) for T = 7000 K
T0 = 7000;
lam = 1e-9:1e-9:2000e-9;
spec = (2*pi*h*c^2./lam.^5)./(exp(h*c./(lam*k*T0))-1);
figure;
plot(lam*1e9,spec*1e-27);
xlabel('Bølgelengde (nm)');
ylabel('Bølgelengdefordeling (W/nm^3)');
N = 101;
T = zeros(1,N);
total = zeros(1,N);
visible = zeros(1,N);
fraction = zeros(1,N);
%løkke for T mellom 5000 og 10000 K
for i = 1:N;
T(i) = (i-1)*50 + 5000;
%%total intensitet fra Stefan-Boltzmanns lov:
total(i) = sigma*T(i)^4;
xmin = h*c/(k*T(i)*700e-9);
xmax = h*c/(k*T(i)*400e-9);
factor = 2*pi*k^4*T(i)^4/(h^3*c^2);
%%Integrerer med quad() for å finne intensitetsbidraget
%%mellom 400 og 700 nm. 
%%Definerer først en symbolsk funksjon f;
%%"@(x)" sier at x er variabel, resten er uttrykket for f(x).
f = @(x) x.^3./(exp(x)-1); 
%%Numerisk integrasjon av f fra xmin til xmax med såkalt 
%%adaptiv Simpson-kvadratur:
visible(i) = factor*quad(f, xmin, xmax);
%%fraction = synlig andel/total intensitet:
fraction(i) = visible(i)/total(i);
end;
%Plotter relativ synlig andel som funksjon av T:
figure;
plot(T,fraction);
xlabel('Temperatur (K)');
ylabel('Intensitetsandel i synlig område');