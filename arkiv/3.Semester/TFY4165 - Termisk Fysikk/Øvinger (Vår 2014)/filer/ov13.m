%FY1005/TFY4165 Termisk fysikk, oving 13, oppgave e, 2014.
%Avkjoling av vannkule med perfekt kobling til omgivende
%varmereservoar.
clear;
format long;
%Tabell med tidspunkter (i sekunder)
t=0:60:10800;
%Tabell med posisjoner (i meter), fra 1 mm til 50 mm
r=0.001:0.001:0.050;
%Kulas radius (m):
R=0.050;
%Temperaturforskjell mellom kule og omgivelser ved t=0:
T0=80;
%Temperatur i omgivende reservoar (K):
T1=293;
%Termisk diffusivitet for vann (m^2/s):
D=(25E-7)/18;
a=D*pi*pi/(R*R);
%Antall ledd som tas med i losningen:
N=1000;
%Starttabell for T(r) med like mange elementer som
%tabellen for posisjonen r:
T = linspace(T1,T1+T0,length(r));
%Neste linje setter EraseMode til xor, bra for "smooth animation", se
%http://nd.edu/~dtl/cheg258/notes/doc/tec2.5.html
p=plot(r,T,'-','EraseMode','xor');
%Sett aksegrenser [xmin xmax ymin ymax]:
axis([0 0.05 T1-3 T1+1.25*T0]);
%Nodvendig med "hold on" for fortsatt bruk av samme figur:
hold on;
xlabel('Posisjon (m)');
ylabel('Temperatur (K)');
title('Avkjoling av vannkule, animasjon');
for i = 1 : length(t),
 for k = 1 : length(r),
  T(k) = T1;
  for j = 1 : N,
  T(k)=T(k)+2*T0*(-1)^(j+1)*exp(-j*j*a*t(i))*sin((j*pi/R)*r(k))/((j*pi/R)*r(k));
  end
  %Tsentrum = T(t) i sentrum av kula:
  if k == 1,
      Tsentrum(i) = T(k);
  end
  %Tmidti = T(t) i avstand R/2 fra sentrum:
  if k == int8(length(r)*1/2),
      Tmidti(i) = T(k);
  end
  %Tlangtut = T(t) i avstand 2R/3 fra sentrum:
  if k == int8(length(r)*2/3),
      Tlangtut(i) = T(k);
  end
  %Tytterst = T(t) paa kulas overflate:
  if k == length(r),
      Tytterst(i) = T(k);
  end
  %T60 = T(r) ved t = 60 s:
  if i == 2,
      T60 = T;
  end
  %T1200 = T(r) ved t = 1200 s:
  if i == 21,
      T1200 = T;
  end
  %T3600 = T(r) ved t = 3600 s:
  if i == 61,
      T3600 = T;
  end
  %T10800 = T(r) ved t = 10800 s:
  if i == 181,
      T10800 = T;
  end
 end
 %Plott T(r) for aktuelt tidspunkt:
 set(p,'XData',r,'YData',T) 
 %Oppdaterer grafen i figuren:
 drawnow
 %Forsinker framvisningen i 0.2 s (juster etter behov):
 pause(0.2);
end
hold off;
%Ber om ny figur for aa plotte T(t) for valgte avstander fra sentrum:
figure;
plot(t,Tsentrum,t,Tmidti,t,Tlangtut,t,Tytterst);
legend('r=0','r=R/2','r=2R/3','r=R');
xlabel('Tid (s)');
ylabel('Temperatur (K)');
title('Avkjoling av vannkule');
%Ber om ny figur for aa plotte T(r) for valgte tidspunkter:
figure;
plot(r,T60,r,T1200,r,T3600,r,T10800);
legend('t=1min','t=20min','t=60min','t=180min');
axis([0 0.05 T1-3 T1+1.5*T0]);
xlabel('Posisjon (m)');
ylabel('Temperatur (K)');
title('Avkjoling av vannkule');
