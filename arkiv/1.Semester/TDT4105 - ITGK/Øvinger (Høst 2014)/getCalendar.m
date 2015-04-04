function calendar = getCalendar( year, month )

    startDay = getMonthStartDay( year, month );
    numDays = daysInMonth( year, month );
    
    calendar = zeros( 6, 7 );
    
    date = 0;
    
    for week = 1:6
        
       for day = 1:7
           
            if ( date == 0 )

                if ( week == 1 && day == startDay )
                    date = 1;
                end
            
            else

                if ( date < numDays )
                    date = date + 1;
                else
                    date = 0;
                end
                
            end
            
            calendar(week, day) = date;

       end
       
    end
    
end