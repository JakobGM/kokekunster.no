function [mumiddel,deltamu,deltamumiddel]=beregn_middel(mu)
N=length(mu);	% Antall verdier
musum=sum(mu);
mumiddel=musum/N;% Middelverdi av mu
% Standardavvik og standardfeil i mu
kvadratavvik=sum((mu-mumiddel).^2);
deltamu=sqrt(kvadratavvik/(N-1));
deltamumiddel=deltamu/sqrt(N);
