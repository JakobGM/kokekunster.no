%   Atmosfæren på jorda
%   Termisk Fysikk Øving 1
%   8. januar 2014

clear all;

R=8.314;    % gasskonstanten (J/mol K)
g=9.81;     % tyngdens akselerasjon på jorda (m/s^2)
M=0.029;    % midlere molar masse i atmosæren på jorda (kg/mol)
T0=288;     % konstant verdi brukt for temperatur (K)

H0=R*T0/(g*M)   % skalahøyde (m) med konstant temperatur T0

z0=0.001;     % velger høyde z0 = 0.001 like over bakken (km),
              % ikke z0=0, for å unngå å dele med null nedenfor
z1=350.0;     % velger maksimal høyde over bakken z1 = 350 km
N=100;       % antall integrasjonspunkter
h=(z1-z0)/(N-1);    % intervall-lengde (km)

%plimit = publisert verdi for trykket i høyde 350 km
p350 = 2.5e-6;
%p0 = kjent verdi for trykket på bakkenivå
p0 = 1.0e5;
%initialisering av verdi for integralet
F=0; 
%tilpasningsparametre for T(z)
a1 = 275;
a2 = 8.4;
a3 = 0.290;
a4 = 0.002565;
a5 = 0.000;
a6 = 90;
a7 = 5;
a8 = 1000;
a9 = 288;
% nullstiller for beregning av integralet \int_0^z dz'/T(z')
integral=zeros(N);
% nullstiller for Tinv = 1/T
Tinv=zeros(N);
%for plotting
height=zeros(N);
pressure=zeros(N);
pdown=zeros(N);
pup=zeros(N);
temperature=zeros(N);
for i=1:N
     z=z1-(i-1)*h;
     %Tilpasning til målt T(z)
     Thigh=(a8*(a1/z)^2*exp(-a1/z)/(-exp(-a1/z)+1)^2)/(1+exp((a6-z)/a7));
     Tlow=(a9-a2*z+a3*z^2-a4*z^3)/(1+exp((z-a6)/a7));
     T = Tlow + Thigh;
     Tinv(i)=1/T;
     %Integrasjon med trapesmetoden og Simpsons metode
     %i=1 og i=2 behandles spesielt:
     if i==1
        integral(i)=0.0;  
     elseif i==2
        integral(i)=(h/2)*(Tinv(1)+Tinv(2));
     elseif mod(i,2)==0     %i=2,4,6,...: trapesmetoden
        integral(i)=integral(i-2)+(h/2)*(Tinv(i-2) + ...
                    2*Tinv(i-1)+Tinv(i));     
     else                   %i=3,5,7,...: Simpsons metode
        integral(i)=integral(i-2)+(h/3)*(Tinv(i-2) + ...
                    4*Tinv(i-1)+Tinv(i));
     end;
     height(i)=z;
     pressure(i)=p350*exp(1000.0*(M*g/R)*integral(i));
     pdown(i)=p350*exp((z1-z)*1000/H0);
     pup(i)=p0*exp((z0-z)*1000/H0);
     temperature(i)=T;
 end;
%plotter trykk mot høyde i semilog-plott
semilogy(height,pressure,height,pdown,height,pup);
legend('tilpasset T','T = 288 K, kjent p(350km)','T = 288 K, kjent p(0)');
ylabel('Trykk (Pa)');
xlabel('Høyde (km)');
grid on;
figure;
%plotter temperatur mot høyde i lineært plott (evt loglog plott)
%loglog(height,temperature);
plot(height,temperature);
ylabel('Temperatur (K)');
xlabel('Høyde (km)');
grid on;