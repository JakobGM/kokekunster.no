function res = isLeapYear( year ) 
    if mod(year, 4) == 0
        % mod(a, b) gir resten dersom a deles på b.
        % Dersom mod(a,b) er 0, er dermed a delelig på b
        if mod(year, 100) == 0 
            if mod(year, 400) == 0
                res = true;
            else
                res = false;
            end
        else
            res = true;
        end
    else
        res = false;
    end
end
        