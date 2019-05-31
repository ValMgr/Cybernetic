if(document.getElementById("date") !=null){
    Countdown();
}

if(document.getElementById("timer") !=null){
    Countdown2();
}

function Countdown(){
    
        var CurrentDate = new Date();
        var CountToDate = new Date('3 June 2019'); // Insert here the date to reach - Date: Salon 3 Juin


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

function Countdown2(){
        var CurrentDate = new Date();
        var CountToDate = new Date('5 July 2019'); // Date: fin de stage


        var seconds = (CountToDate - CurrentDate) / 1000; // Transform result in miliseconds to seconds

        var days = Math.floor(seconds / (60 * 60 * 24));
        seconds -= days * 60 * 60 * 24;

        var hours = Math.floor(seconds / (60 * 60));
        seconds -= hours * 60 * 60;

        var minutes = Math.floor(seconds / 60);
        seconds -= minutes * 60;

        if(CurrentDate < CountToDate){

            document.getElementById("timer").innerHTML = days + ' days, ' + hours + ' hours, ' + minutes + ' minutes, ' + Math.floor(seconds) + ' secondes';
        }
}

if(document.getElementById("date") !=null){
    setInterval(Countdown, 1000);
}

if(document.getElementById("timer") !=null){
    setInterval(Countdown2, 1000);
}