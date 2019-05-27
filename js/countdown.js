Countdown();

function Countdown(){

    var CurrentDate = new Date();
    var CountToDate = new Date('3 June 2019'); // Insert here the date to reach


    var seconds = (CountToDate - CurrentDate) / 1000; // Transform result in miliseconds to seconds

    var days = Math.floor(seconds / (60 * 60 * 24));
    seconds -= days * 60 * 60 * 24;

    var hours = Math.floor(seconds / (60 * 60));
    seconds -= hours * 60 * 60;

    var minutes = Math.floor(seconds / 60);
    seconds -= minutes * 60;

    if(CurrentDate < CountToDate){

        document.getElementById("date").innerHTML = days + ' days, ' + hours + ' hours, ' + minutes + ' minutes, ' + Math.floor(seconds) + ' secondes';
    }
}

setInterval(Countdown, 1000);