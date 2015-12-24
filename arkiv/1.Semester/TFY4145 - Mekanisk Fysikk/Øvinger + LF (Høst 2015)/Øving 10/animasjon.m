function animasjon

clear all;

pi = 3.141592654;
% Strekk-kraft (N = kg*m/s*s):
S = 4.0;
% Massetettheter (kg/m);
mu1 = 0.010;
mu2 = 0.090;
% Bolgehastigheter (m/s):
v1 = sqrt(S/mu1);
v2 = sqrt(S/mu2);
% Frekvens (Hz):
f = 5.0;
% Vinkelfrekvens (1/s):
w = 2*pi*f;
% Dette tilsvarer en periode T = 2*pi/w = 0.2 s.
% Bolgetall (1/m):
k1 = w/v1;
k2 = w/v2;
% Amplituden til innkommende bolge (mm):
A = 5.0;
% Amplituden til reflektert bolge (mm):
B = A * (sqrt(mu2)-sqrt(mu1))/(sqrt(mu2)+sqrt(mu1));
% Amplituden til transmittert bolge (mm):
C = A * 2.0 * sqrt(mu1)/(sqrt(mu2)+sqrt(mu1));
% Det halve av antall punkter langs x-aksen:
N = 400;
% Antall tidssteg:
M = 400;
% Tabeller for x- og y-verdier, begge med 2*N elementer.
% Velger x-intervallet slik at vi faar minst 2 bolgelengder paa
% begge sider av x=0
kmin = min(k1,k2);
xmax = 2*2*pi/kmin;
ymax = 1.25*(abs(A) + abs(B));
x = linspace(-xmax,xmax,2*N);
y = linspace(-ymax,ymax,2*N);

% Animasjon av refleksjon/transmisjon i x = 0:
p = plot(x,y,'-','EraseMode','xor'); 
axis([-xmax xmax -ymax ymax])
hold on
xlabel('posisjon (m)');
ylabel('utsving (mm)');
title('Transmisjon og refleksjon i x = 0 av harmonisk bølge på streng');
for i=1:M
    % Velger tidssteg slik at animasjonen varer i 10 hele perioder:
    t = i*10*2*pi/(w*M);
    % For j = 1:N er x<0, og der er y = y_inn + y_refl:
    for j = 1:N
        y(j) = A*sin(k1*x(j)-w*t) + B*sin(k1*x(j)+w*t);
%%      kun innkommende:
%%      y(j) = A*sin(k1*x(j)-w*t);
%%      kun reflektert:
%%      y(j) = B*sin(k1*x(j)+w*t);
    end;
    % For j = N+1:2*N er x>0, og der er y = y_trans:
    for j = N+1:2*N
        y(j) = C*sin(k2*x(j)-w*t);
    end;
    set(p,'XData',x,'YData',y) 
    % MATLAB help: drawnow flushes the event queue and updates the figure window
    drawnow    
    pause(0.050);  % Forsinker framvisningen i 0.05 s (juster hvis nodvendig)
end
