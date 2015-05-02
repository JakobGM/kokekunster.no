%%FY1005/TFY4165, Øving 10: van der Waals koeksistenstrykk
%%for kjølemediet R134a, 1,1,1,2-tetrafluoretan.
%%Kritisk temperatur: 374 K
%%Kritisk trykk: 4060 kPa
%%Kritisk molart volum: 0.198 L
%%
%%Programmet tegner opp p(V) og ber om initialverdi for vaeskevolumet. 
%%Deretter beregnes det gassvolumet som gir samme trykk, ved å krype
%%innover isotermen fra en valgt tilstrekkelig stor startverdi.
%%Endelig beregnes integralet av p(V) numerisk og sammenlignes med
%%arealet under den rette linjen.
%%
clear all;
close all;
%%Velg utskrift med flere gjeldende siffer enn det som er standard
format long;
%%Valgt temperatur i Kelvin
T=331;
%%V = molart volum (m^3)
Vmin=0.12e-3;
Vmax=5.00e-3;
NV=1000;
%%V = vektor med verdier mellom Vmin og Vmax, i alt NV verdier
V=linspace(Vmin,Vmax,NV);
%%Verdier for a og b for R134a:
%%a = 27R^2 T_c^2/64p_c = 1.00466
%%b = R T_c/8p_c = 9.5734e-5
%%Enheter: [a] = N*m^4 = Pa*m^6 og [b] = m^3
R=8.314;
a=1.00466;
b=9.5734e-5;
%%van der Waals tilstandsligning:
p = R*T./(V-b) - a./(V.*V);
%%Plott av isotermen, volum i L og trykk i bar
fig = plot(V*1e3,p*1e-5);
%%axis([0 1.1*max(V) 0 1.1*max(p)]);
%%Tekst på figuren
title('Isoterm: van der Waals modell for R134a','fontsize',18);
xlabel('Molart volum (L)','fontsize',18);
ylabel('Trykk (bar)','fontsize',18);
%%Med hold on; vil plottene "overleve", saa vi kan sammenligne.
hold on;
%%Les inn V1 (L):
V1 = input('Gjett på V1 (enhet L):  ')
V1 = V1*1e-3 %%Omregning til m^3
%%Riktig verdi er omtrent V1=0.16 L.
%%Bestemmer tilhørende trykk P1 (Pa):
P1 = R*T/(V1-b) - a/(V1*V1);
%%Velger tilstrekkelig stor startverdi for V_stor (f.eks 5.00 L):
V_stor=5.00e-3;
%%Setter steglengden dV "liten nok", f.eks 0.0001 L
dV=0.0001e-3;
%%Bestemmer trykket for volumet V_stor
p_find = R*T/(V_stor-b) - a/(V_stor*V_stor);
%%Betingelsen V_stor > 0 gjør at programmet stopper hvis noe går galt
%%Ellers avsluttes while-løkka når p_find har blitt større enn eller 
%%lik P1, hvoretter V_stor og p_find brukes som gassvolum og -trykk
while (p_find < P1 && V_stor > 0)
	V_stor = V_stor - dV;
	p_find = R*T/(V_stor-b) - a/(V_stor*V_stor);
end;
%%Nå har vi funnet P2, V2, i den siste verdien:
V2 = V_stor;
P2 = p_find;
%%Skriver ut trykk- og volumverdier:
disp('V1 (L): ')
disp(V1*1e3)
disp('V2 (L): ')
disp(V2*1e3)
disp('P1 (bar): ')
disp(P1*1e-5)
disp('P2 (bar): ')
disp(P2*1e-5)
%%Estimat av usikkerhet dp i trykket P2, basert på verdi av dV:
dp = (- R*T/((V2-b)*(V2-b)) + 2.0*a/(V2*V2*V2))*dV;
disp('Estimert usikkerhet i trykket P2 (bar): ')
disp(abs(dp*1e-5))
disp('Differansen P2-P1 (bar): ')
disp((P2-P1)*1e-5)
%%Tegner en linje på plottet:
plot([V1*1e3,V2*1e3],[P1*1e-5,P2*1e-5]);
%%Så skal vi integrere trykket fra V1 til V2, og sammenligne med 
%%P1*(V2-V1), dvs. arealet under den horisontale linja. 
%%Integrerer med quad(). 
%%Definerer først en symbolsk funksjon F:
%%"@(v)" sier at v er variabelen vår, resten er ligningen for P(v).
F = @(v) R*T./(v-b) - a./(v.*v); 
%%Numerisk integrasjon av F fra V1 til V2 med såkalt adaptiv
%%Simpson-kvadratur.
I = quad(F, V1, V2); 
%%
disp('Relativ feil mht regel om like arealer:')
disp((I-P1*(V2-V1))/(P1*(V2-V1)))
disp('Kjør programmet på nytt med ny gjetning for V1 dersom')
disp('feilen er for stor.')
