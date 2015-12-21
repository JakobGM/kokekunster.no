%   Atmosfæren på Mars
%   Termisk Fysikk Øving 1
%   8. januar 2014

clear all;

R=8.314;    % gasskonstanten (J/mol K)
g=3.71;     % tyngdens akselerasjon på Mars (m/s^2)
M=0.04334;  % midlere molar masse i atmosæren på Mars (kg/mol)
T0=234;     % konstant verdi brukt for temperatur (K)

H0=R*T0/(g*M)   % skalahøyde (m) med konstant temperatur T0

z0=0.0;       % velger høyde z0 = 0 på bakken (km)
z1=16.0;      % velger maksimal høyde over bakken z1 = 16 km
N=641;        % antall integrasjonspunkter, gir h = 0.025 km
h=(z1-z0)/(N-1);    % intervall-lengde (km)

%p0 = 600 Pa er ca midlere atmosfæretrykk på bakken på Mars
p0 = 600;
% nullstiller for beregning av integralet \int_0^z dz'/T(z')
integral=zeros(N);
% nullstiller for Tinv = 1/T
Tinv=zeros(N);
%nullstiller tabeller for plotting
height=zeros(N);
pressure=zeros(N);
pexp=zeros(N);
temperature=zeros(N);
for i=1:N
     z=z0+(i-1)*h;
     %Tilpasset temperaturprofil: T(z)=234.0-2.25*z+14.0*exp(-2.0*z)  
     T=234.0-2.25*z+14.0*exp(-2.0*z);
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
     %faktor 1000 for omregning fra km til m
     pressure(i)=p0*exp(-1000.0*(M*g/R)*integral(i));
     %med konstant H0 = RT/gM blir p(z) en ren exp-funksjon
     pexp(i)=p0*exp(-1000*z/H0);
     temperature(i)=T;
 end;
%plotter trykk som funksjon av høyde, med tilpasset T og med konstant T
plot(height,pressure,height,pexp);
ylabel('Trykk (Pa)');
xlabel('Høyde (km)');
grid on;
legend('T(z)=234-2.25z+14exp(-2z)','T=234');