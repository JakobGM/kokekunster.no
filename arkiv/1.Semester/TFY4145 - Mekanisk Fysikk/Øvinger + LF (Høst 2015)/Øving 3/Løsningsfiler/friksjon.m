% TFY4109 Fysikk hosten 2015.
% Oving 3: Beregning av midlere
% friksjonskoeffisient utifra fysiske data

% Lese inn data fra fil 'snorkraft.txt'
data=load('snorkraft.txt');
% I filen er 1. kolonne vinkler, og 2. kolonne snordrag,
% data blir derfor en tabell med to kolonner, og like 
% mange rader som i filen.
% Egne tabeller for vinklene og snordragene
phi=data(:,1);
S=data(:,2);
% her representerer : alle radene.
% S0 = 185.0 gram = loddets masse
S0 = 185.0;
mu=log(S./S0)./phi;

[mm,dm,dmm]=beregn_middel(mu);
fprintf('mumiddel = %f\n' , mm);
fprintf('deltamu = %f\n' , dm);
fprintf('deltamumiddel = %f\n' , dmm);

figure;
title('Oving 3')
hold on;
plot(phi,log(S./S0),'ok')
plot(phi,mm.*phi,'r')
plot(phi,(mm+dm).*phi,'g')
plot(phi,(mm-dm).*phi,'b')
legend({'$\ln(S/S0)$','$\overline{\mu}$','$\overline{\mu}+\Delta\mu$','$\overline{\mu}-\Delta\mu$'},'Interpreter','latex','location','southeast')
saveas(gcf,'snorkraft.eps','epsc')
