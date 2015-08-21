%Tabell med tidspunkter
t=0:1:20;
%Tabell med posisjoner
r=0.00:0.01:1.00;
%Starttabell for f(r) med like mange elementer som tabellen for posisjonen r:
f = linspace(0,10,length(r));
%Neste linje setter EraseMode til xor, bra for "smooth animation", se
%http://nd.edu/~dtl/cheg258/notes/doc/tec2.5.html
p=plot(r,f,'-','EraseMode','xor');
%Sett aksegrenser [xmin xmax ymin ymax]:
axis([0 1 0 2]);
%Nodvendig med "hold on" for fortsatt bruk av samme figur:
hold on;
xlabel('Posisjonen r');
ylabel('Funksjonen f');
title('Animasjon av f(r,t)');
for i = 1 : length(t),
 for k = 1 : length(r),
  f(k) = sin(r(k)*t(i))^2;
 end
 %Plott f(r,t) for aktuelt tidspunkt:
 set(p,'XData',r,'YData',f)
 %Oppdaterer grafen i figuren:
 drawnow
 %Forsinker framvisningen i 0.2 s (juster etter behov):
 pause(0.2);
end
hold off;