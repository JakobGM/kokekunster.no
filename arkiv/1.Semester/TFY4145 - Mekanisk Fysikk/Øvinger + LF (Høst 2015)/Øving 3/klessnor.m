clear all;
L=1.0;
D=0.9;
gamma=(5*D/L-1)/2;
f=@(x0) gamma./(1+2./sqrt(1+3.*x0.*x0)); % Metode 1
%f=@(x0) gamma - 2.*x0./sqrt(1+3.*x0.*x0); % Metode 2
%f=@(x0) (gamma-x0).*sqrt(1+3.*x0.*x0)/2; % Metode 3
x0=0.5;
max_error=1e-6;
max_iter=100;

x0=iter_los_plot(x0,max_error,max_iter,f);

alpha=acos(x0);
fprintf('Vinkelen alpha er %3.12f grader\n',alpha*180/pi)

beta=atan(tan(alpha)/2);
S1=2/sqrt(1-x0*x0);
S2=sqrt((1+3*x0*x0)/(1-x0*x0));
S3=2*x0/sqrt(1-x0*x0);
fprintf('Snordragene er:\n')
fprintf('S1 = %3.12f\n',S1)
fprintf('S2 = %3.12f\n',S2)
fprintf('S3 = %3.12f\n',S3)
