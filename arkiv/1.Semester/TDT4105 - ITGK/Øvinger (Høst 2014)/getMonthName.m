function name = getMonthName( month )

    switch (month) 
        case 1 
            name = 'Januar';
        case 2 
            name = 'Februar';
        case 3 
            name = 'Mars';
        case 4 
            name = 'April';
        case 5 
            name = 'Mai';
        case 6 
            name = 'Juni';
        case 7 
            name = 'Juli';
        case 8 
            name = 'August';
        case 9 
            name = 'September';
        case 10 
            name = 'Oktober';
        case 11 
            name = 'November';
        case 12 
            name = 'Desember';
        otherwise
            name = 'Ikke en gyldig maaned';
    end
     
end