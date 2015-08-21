%%FY1005/TFY4165, Øving 10: van der Waals koeksistenstrykk
%%for kjølemediet R134a, 1,1,1,2-tetrafluoretan.
%%Kritisk punkt: 374 K, 4060 kPa, 0.198 L/mol.
%%Programmet tegner først opp p(V) for aktuell T,
%%og ber deretter om initialverdi for væske- og
%%gassvolumet, samt ønsket nøyaktighet. Koeksistenstrykket regnes
%%deretter ut automatisk.
clear all;
close all;
%%Velger utskrift med flere gjeldende siffer enn det som er standard.
format long;
%%Temperatur i Kelvin
T=331;
%%V = molart volum (L/mol)
Vmin=0.12e-3;
Vmax=5.00e-3;
NV=1000;
%%V = vektor med verdier mellom Vmin og Vmax, i alt NV verdier
V=linspace(Vmin,Vmax,NV);
%%Verdier for a og b for R134a:
%%a = 1.00466, b = 9.5734e-5
R=8.314;
a=1.00466;
b=9.5734e-5;
%%van der Waals tilstandsligning
p = R*T./(V-b) - a./(V.*V);
%%Plott av isotermen
fig = plot(V*1e3,p*1e-5);
axis([0 1.5 0 50]);
%%Tekst paa figuren
title('Isoterm: van der Waals modell for R134a','fontsize',18);
xlabel('Molart volum (L)','fontsize',18);
ylabel('Trykk (bar)','fontsize',18);
%%Saa vi kan tegne en rett linje i samme figur helt til slutt:
hold on;

%%Oppgi væskevolumet V1 i enheten L:
V1 = input('Gjett vaeskevolum V1 (enhet L): ')
V1 = V1*1e-3; %%Omregning til m^3
epsilon = input('Feiltoleranse mht regel om like arealer (f.eks 0.001): ')
%%Vi setter err = 2*epsilon,
%%for helt sikkert å komme inn i while-løkka nedenfor:
err=2*epsilon;
%%Vi teller hvor mange ganger den ytterste løkka har kjørt:
n=0;
disp('Velg startverdi for V_stor (L) som helt sikkert er større enn gassvolumet V2')
V_stor = input('Startverdi for gassvolumbestemmelse: ')
V_stor = V_stor*1e-3 %%Omregning til m^3
%%Lagrer innlest V_stor som V_stornok for senere bruk
V_stornok = V_stor;
%%Så lenge feilen er større enn epsilon prøver vi på nytt. 
%%Vi stopper også hvis vi har iterert svært mange ganger (mer enn 1000).
while (abs(err) > epsilon && n < 1000)
   disp('---------------------')
   disp('Iterasjon nr.:  ')
   n = n + 1;
   disp(n)
   P1 = R*T/(V1-b) - a/(V1*V1);
   %%Steglengden dV for volumet settes lik 0.05*V1*err. 
   %%Da håper vi at feil i V1 og V2 ikke
   %%vil dominere den totale numeriske feilen. Faktoren 0.05 er basert
   %%på prøving og feiling.
   dV = 0.05*V1*err
   p_find = R*T/(V_stor-b) - a/(V_stor*V_stor);
   %%Betingelsen V_stor > 0 sørger for at vi stopper hvis noe går galt.
   while (p_find < P1 && V_stor > 0)
	  V_stor = V_stor - abs(dV);
	  p_find = R*T/(V_stor-b) - a/(V_stor*V_stor);
   end
   %%Nå vil V_stor og p_find med god tilnærmelse være lik hhv V2 og P2,
   %%dvs gassvolum og tilsvarende trykk:
   V2 = V_stor
   P2 = p_find;
   %%Så skal vi integrere p(V) fra V1 til V2, og sammenligne med P*(V2-V1):
   %%Integrerer med funksjonen quad(). Definerer først en symbolsk funksjon F:
   F = @(v) R*T./(v-b) - a./(v.*v);
   %%Numerisk integrasjon av F fra V1 til V2 med adaptiv Simpson-kvadratur:
   I = quad(F, V1, V2);
   %%Regner ut forskjellen mellom rektangelarealet P1*(V2-V1) 
   %%og arealet I under p(V)-kurven.
   %%Beregner deretter relativ feil mht regel om like arealer:
   err = (I-P1*(V2-V1))/(P1*(V2-V1));
   disp('Relativ feil mht like arealer:  ')
   disp(err)
   %%Foretar endring i V1 i riktig retning:
   %%Hvis V1 er for liten, er P1*(V2-V1) > I, dvs
   %%err < 0 og vi må øke verdien av V1.
   %%Omvendt, hvis V1 er for stor, er P1*(V2-V1) < I, err < 0,
   %%og vi må redusere verdien av V1.
   %%Siden dV har samme fortegn som err (dV = 0.05*V1*err), betyr
   %%dette at V1 må justeres ved å trekke fra dV:
   V1 = V1 - dV
   %%Ny gjetning på V_stor settes lik V_stornok, dvs opprinnelig
   %%innlest startverdi for beregning av gassvolumet:
   V_stor = V_stornok;
   %%Hvis behov, skriv ut V1, V2, P1, P2 ved å fjerne %% i neste 4 linjer:
   %%V1=V1
   %%V2=V2
   %%P1=P1
   %%P2=P2
end

%Tegner linjen som gir like arealer
plot([V1*1e3,V2*1e3],[P1*1e-5,P2*1e-5]);
grid on;
%Skriver ut verdier for løsningen
disp('Væskevolum V1 (L): ')
disp(V1*1e3)
disp('Gassvolum V2 (L): ')
disp(V2*1e3)
disp('Trykket P1 (bar): ')
disp(P1*1e-5)
disp('Trykket P2 (bar): ')
disp(P2*1e-5)
hold off;
