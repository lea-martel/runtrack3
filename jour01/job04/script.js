var year = 2021;

function bisextile(year) 
{
    if ((year % 4 === 0 && year % 100 > 0) || (year % 400 === 0)) 
    {
    return true;
    
} else {
    
    return false;
    }
}

bisextile(year);