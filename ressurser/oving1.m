%Oving 1 i Termisk Fysikk (TFY4165) - Jakob Gerhard Martinussen
%Innleveringsfrist 28. august
%Alt beregnes i SI enheter
clear all

%Konstanter
R = 8.314;
m = 43.34;
g = 3.71;
p_0 = 600;

%-------------Funksjonsimplementering-------------%
%Temperatur (OBS! z gitt i meter)
T = @(z) 234 - 2.25 .* (z .* 1e-3) + 14 .* exp(-2 .* (z .* 1e-3));
%Skalah?yden
H = @(z) R .* T(z) ./ (m*g);
%Invers skalah?yde
H_inv = @(z) 1 ./ H(z) .* 1e-3;


%------------Numerisk integrasjon------------%
%Fastsetter integrasjonsgrensene
z_min = 0;
z_max = 16e3;
%Oppl?sningen p? integrasjonen
dz = 1;
%Antall integrasjonspunkter
N = (z_max - z_min) ./ dz;
%Minneallokerer verdier som skal regnes ut og n?dvendige vektorer
potens_verdier = zeros(1,N+1);
p_verdier = zeros(1, N+1);
p_verdier(1) = p_0;
z_verdier = linspace(z_min, z_max, N+1);
%Iterasjonsvariabel
i = 2;

for z = z_verdier(1:end-1)
    potens_verdier(i) = potens_verdier(i-1) + dz .* H_inv(z);
    p_verdier(i) = p_0 * exp(-potens_verdier(i));
    i = i + 1;
end %for

%plotter verdiene
plot(z_verdier, p_verdier)
xlabel('Hoyde over bakkenivaa, m')
ylabel('Atmosfaerisk trykk, Pa')

%Regner ut med konstant temperatur
T_0 = 234;
H_inv_konstant = m .* g ./ (R .* T_0) .* 1e-3;
potens_verdier2 = zeros(1,N+1);
p_verdier2 = zeros(1, N+1);
p_verdier2(1) = p_0;
%Iterasjonsvariabel
j = 2;

for z = z_verdier(1:end-1)
    potens_verdier2(j) = potens_verdier2(j-1) + dz .* H_inv_konstant;
    p_verdier2(j) = p_0 * exp(-potens_verdier2(j));
    j = j + 1;
end %for

hold on
plot(z_verdier, p_verdier2)
legend('Hoydeavhengig temperatur', 'Hoydeuavhengig temperatur')