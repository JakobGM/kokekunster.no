clear all;
close all;
alpha = 59000;
beta = 50;
R = 8.314;
T0 = 273.16;
p0 = 612;
Tc = 647;
LF0 = 54000;
DeltaT = 0.1;
T = [T0:DeltaT:Tc];
%Analytisk løsning av integralet:
%x = T./Tc;
%analytisk = -(1-x).^(1/3).*(((x-1)./x).^(2/3).*x.*hypergeom([2/3,2/3],[5/3],1./x) + ...
%    2.*x-2)./(2.*(x-1).*x);
%plot(x,analytisk);
LF = LF0.*(1-T./Tc).^(1/3);
N = length(T);
p = zeros(1,N);
p(1) = p0;
for j = 1:N-1
    p(j+1) = p(j)*(1+(LF(j)*DeltaT)/(R*T(j)^2));
end;
plin = p0.*(T0./T).^(beta/R).*exp((alpha/R).*(1/T0-1./T));
plot(T,p*1e-5,'-',T,plin*1e-5,'--','linewidth',2);
%plot(T,latentlin/1000,'--',T,latentfull/1000,'linewidth',2);
xlabel('Temperatur (K)');
ylabel('Damptrykk (bar)');
handle=legend('Numerisk','Analytisk');
set(handle, 'Box', 'off');