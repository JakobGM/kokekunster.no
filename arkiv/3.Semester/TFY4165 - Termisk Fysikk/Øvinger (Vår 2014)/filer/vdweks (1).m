%%FY1005/TFY4165, Oving 10, eksempel.
%%Filnavn: vdweks.m
zmin=1;
zmax=5;
Deltaz=1;
%%z = vektor med verdier mellom zmin og zmax, intervall Deltaz
z=zmin:Deltaz:zmax;
xmin=0.1;
xmax=pi;
Nx=500;
%%x = vektor med verdier mellom xmin og xmax, i alt Nx verdier
x=linspace(xmin,xmax,Nx);
%%length(z) = antall elementer i vektoren z
%%Bruker for-loekke fra i=1 til i=length(z) til aa regne ut en 
%%funksjon y(x) for z-verdier z(1), z(2), ... , z(length(z))
for i = 1:length(z);
    y = sin(z(i).*x);
    fig = plot(x,y);
    %%y(x) for laveste z-verdi z(1): blaa kurve
    %%y(x) for hoeyeste z-verdi z(length(z)): roed kurve
    %%Mellomliggende kurver: gradvis mellom blaa og roed
    %%Tynne kurver, LineWidth = 1.0
    red=(i-1)/(length(z)-1);
    green = 0.0;
    blue=1-red;
    set(fig,'Color',[red green blue],'LineWidth',1.0);
    if i == 1;
        title('Noen harmoniske funksjoner','fontsize',18);
        xlabel('x','fontsize',18);
        ylabel('sin(zx)','fontsize',18);
        axis([0 xmax -1 1]);
        %%Kommandoen hold on; soerger for at paafoelgende 
        %%kurver tegnes i samme figur
        hold on;
        %%Vi plotter ogsaa funksjonen sin(0.9zx) for laveste 
        %%z-verdi, dvs for z(1)
        y2 = sin(0.9*z(i).*x);
        fig = plot(x,y2);
        %%Tykk blaa kurve for y2(x) ved z(1)
        set(fig,'LineWidth',1.5,'Color',[0 0 1]);
    end;
end;
hold off;
