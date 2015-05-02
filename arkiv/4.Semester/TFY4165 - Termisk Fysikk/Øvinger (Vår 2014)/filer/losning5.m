%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% losning5.m:
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
% Heltallet j holder styr på totalt antall hastighetsmaalinger (920)
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
      % Lager tabeller xpos og ypos med tanke på plotting
      % av skiveposisjoner
      xpos(j) = x(i);
      ypos(j) = y(i);
   end
end
% Beregner forflytningene (absoluttverdi)
ds = sqrt(dx.^2+dy.^2);
% Beregner fart v og hastighetskomponenter vx og vy
v  = ds/dt;
vx = dx/dt;
vy = dy/dt;
% Middelverdier
vmiddel = sum(v)/j;
vxmiddel = sum(vx)/j;
vymiddel = sum(vy)/j;
vrms = sqrt(sum(v.^2)/j);
% Ekvipartisjonsprinsippet:
kinetiskenergi = 0.5*0.032*(vrms/100)^2;  % i Joule
kp = kinetiskenergi/300; % "plastskivekonstant" i J/K
temperatur = kinetiskenergi/1.38e-23; % i K, med bruk av k_B
%Sorterer v, vx og vy med tanke på å lage histogram
v_sortert = sort(v);
vx_sortert = sort(vx);
vy_sortert = sort(vy);
% bins = antall intervaller for v; Rice rule
bins = ceil(2*j^(1/3));
% beregner intervallbredder
v_binbredde = max(v)/bins;
vx_binbredde = 2*max(abs(max(vx)),abs(min(vx)))/bins;
vy_binbredde = 2*max(abs(max(vy)),abs(min(vy)))/bins;
% nullstiller eksperimentelle og teoretiske fordelinger
f = zeros(1,bins);
gx = zeros(1,bins);
gy = zeros(1,bins);
fteo = zeros(1,bins);
gxteo = zeros(1,bins);
gyteo = zeros(1,bins);
vbin = zeros(1,bins);
vxbin = zeros(1,bins);
vybin = zeros(1,bins);
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
% Teoretisk komponentfordeling, gxteo = sqrt(B/pi)*exp(-B*vx^2), 
% og tilsvarende for gy.
k = 1;
ibin = 0;
while (ibin < bins)
    ibin = ibin + 1;
    while (k <= j && vx_sortert(k) <= min(vx)+vx_binbredde*ibin)
        gx(ibin) = gx(ibin)+1;
        k=k+1;
    end
    gx(ibin) = gx(ibin)/j;
    vxbin(ibin) = min(vx)+vx_binbredde*(ibin-0.5);
    gxteo(ibin) = sqrt(B/pi)*exp(-B*vxbin(ibin)*vxbin(ibin))...
                   *vx_binbredde;
end
k = 1;
ibin = 0;
while (ibin < bins)
    ibin = ibin + 1;
    while (k <= j && vy_sortert(k) <= min(vy)+vy_binbredde*ibin)
        gy(ibin) = gy(ibin)+1;
        k=k+1;
    end
    gy(ibin) = gy(ibin)/j;
    vybin(ibin) = min(vy)+vy_binbredde*(ibin-0.5);
    gyteo(ibin) = sqrt(B/pi)*exp(-B*vybin(ibin)*vybin(ibin))...
                   *vy_binbredde;
end
% Sjekker avvik mellom målte og teoretiske fordelinger
favvik = sum(sqrt((f-fteo).^2));
gxavvik = sum(sqrt((gx - gxteo).^2));
gyavvik = sum(sqrt((gy - gyteo).^2));
fsum = sum(f);
fteosum = sum(fteo);
gxsum = sum(gx);
gxteosum = sum(gxteo);
gysum = sum(gy);
gyteosum = sum(gyteo);
% Plotting. Lager panel med 2 x 3 subplott.
figure;
subplot(3,2,1);
plot(v);
xlabel('Hastighetsmåling nr');
ylabel('v (cm/s)');
title('Skivenes fart');
subplot(3,2,2);
hold on;
bar(vbin,f);
plot(vbin,fteo,'ro');
xlabel('v (cm/s)');
ylabel('Andel fartsmålinger');
title('Fordeling for fart v');
axis([0 120 0 max(f)*1.1]);
subplot(3,2,3);
hold on;
bar(vxbin,gx);
plot(vxbin,gxteo,'ro');
xlabel('v_x (cm/s)');
ylabel('Andel fartsmålinger');
title('Fordeling for v_x');
axis([-120 120 0 max(gx)*1.1]);
subplot(3,2,4);
hold on;
bar(vybin,gy);
plot(vybin,gyteo,'ro');
xlabel('v_y (cm/s)');
ylabel('Andel fartsmålinger');
title('Fordeling for v_y');
axis([-120 120 0 max(gy)*1.1]);
subplot(3,2,5);
plot(vx,vy,'bo');
xlabel('v_x (cm/s)');
ylabel('v_y (cm/s)');
title('Skivenes hastigheter');
axis([-120 120 -120 120]);
subplot(3,2,6);
plot(xpos,ypos,'bx');
xlabel('x (cm)');
ylabel('y (cm)');
title('Skivenes posisjoner');
