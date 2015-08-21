%%FY1005/TFY4165, Øving 12, Oppgave 1.
%%Filnavn: varmeskjold.m
N = 21;
%%k = vektor med heltallsverdier mellom 0 og N
k=0:1:N;
Thigh = 373;
Tlow = 273;
T = (((N-k).*Tlow.^4+k.*Thigh.^4)./N).^(0.25);
plot(k,T,'b*');
title('Varmeskjold og stråling','fontsize',18);
xlabel('Plate nummer','fontsize',18);
ylabel('Temperatur (K)','fontsize',18);
axis([0 N 0 Thigh*1.1]);