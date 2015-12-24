% Funksjon som finner losningen paa ligningen y=f(x) ved iterasjon
function x0=iter_los_plot(x0,max_error,max_iter,f)
% For aa visualisere prosessen, tar vi vare paa punktene underveis
X=x0;
F=0;
% Setter startverdi for feilen lik 1 slik at while-lokken garantert starter
err=1;
j=1;
while (err > max_error && j < max_iter)
       x1=f(x0);
       X(2*j)=x0;
       X(2*j+1)=x0;
       F(2*j)=x0;
       F(2*j+1)=x1;
       err=abs(x1-x0);
       x0=x1;
       j=j+1;
end
% Gi beskjed dersom vi har brukt opp max antall iterasjoner uten at feilen har blitt mindre enn max_error
if j==max_iter
	fprintf('Max antall iterasjoner brukt opp\n')
else
	fprintf('Losning funnet: x=%3.12f\n',x0)
	% Plotter x, f(x) og iterasjonsprosessen(stiplet)
	figure()
	interval=max(X)-min(X)
	x=linspace(min(X)-interval*.1,max(X)+interval*.1,100);
	hold on;
	plot(x,f(x))
	plot(X,F,'--k')
	plot(x,x,'r')
	legend('f(x)','iterasjoner','y=x','Location','southeast')
end
