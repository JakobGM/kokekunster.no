disttool

%Normal

niutval=91;
AntallUtval=100;
pauseint=0.05;
mu=179.8;
sigma=6.5;
for(i=1:AntallUtval)	
	utval=normrnd(mu,sigma, niutval,1);
	gjsnitt(i)=mean(utval);
	subplot(1,2,1);
	hist(utval);	
	gjsnitt(i)=mean(utval);	
	subplot(1,2,2);
	hist(gjsnitt(1:i));
	pause(pauseint)
end
subplot(1,2,1);
title('Utval')
subplot(1,2,2);
title('Fordelinga til gjennomsnittet')


%Normal, rask
figure
niutval=91;
AntallUtval=10000;
pauseint=0.05;
mu=179.8;
sigma=6.5;
utvalR=normrnd(mu,sigma, niutval,AntallUtval);
gjsnittR= mean(utvalR);
hist(gjsnittR);

%kontinuerleg uniform (0,1) 

niutval=30;
AntallUtval=100;
pauseint=0.05;
for(i=1:AntallUtval)
	%kontinuerleg uniform (0,1) 
	utval=rand(niutval,1);	
	gjsnitt(i)=mean(utval);
	subplot(1,2,1);
	hist(utval);
	subplot(1,2,2);
	hist(gjsnitt(1:i));
	pause(pauseint)
end

%Eksponensiell

niutval=30;
AntallUtval=200;
pauseint=0.05;
mu=3;
for(i=1:AntallUtval)	
	utval=exprnd(mu,niutval,1);	
	gjsnitt(i)=mean(utval);
	subplot(1,2,1);
	hist(utval);
	subplot(1,2,2);
	hist(gjsnitt(1:i));
	pause(pauseint)
end

%Binomisk

niutval=30;
AntallUtval=200;
pauseint=0.05;
n=5;
p=0.2;
for(i=1:AntallUtval)	
	utval=binornd(n,p, niutval,1);	
	gjsnitt(i)=mean(utval);
	subplot(1,2,1);
	hist(utval);
	subplot(1,2,2);
	hist(gjsnitt(1:i));
	pause(pauseint)
end


%Poisson

niutval=30;
AntallUtval=200;
pauseint=0.05;
mu=3;
for(i=1:AntallUtval)	
	utval=poissrnd(mu, niutval,1);	
	gjsnitt(i)=mean(utval);
	subplot(1,2,1);
	hist(utval);
	subplot(1,2,2);
	hist(gjsnitt(1:i));
	pause(pauseint)
end
