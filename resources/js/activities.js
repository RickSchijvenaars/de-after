require('./pagetitle.js');

let dates = [
    '07 Dec 2020 13:15:00 GMT+1',
    '07 Dec 2020 13:17:00 GMT+1',
    '07 Dec 2020 13:19:00 GMT+1',
    '07 Dec 2020 13:21:00 GMT+1',
    '07 Dec 2020 13:23:00 GMT+1',
    '07 Dec 2020 13:25:00 GMT+1',
    '07 Dec 2020 13:27:00 GMT+1'
]

if (window.location.pathname == '/dashboard') {
    dates.forEach(date => {
        let time = new Date(Date.parse(date)).getTime();
        let now = new Date().getTime();
        let timeBetween = time - now;

        if (timeBetween > 0) {
            setTimeout(function() {
                displayActivity(dates.indexOf(date));
            }, timeBetween)
        } else {
            document.querySelector(".activity-" + dates.indexOf(date) + "-announcement").classList.toggle("d-none");
            document.querySelector(".activity-" + dates.indexOf(date)).classList.toggle("d-none");
        }
    });
}

function displayActivity(index) {
    const audio = new Audio('/media/alert.mp3');
    audio.play();

    pageTitleNotification.on("NIEUWE ACTIVITEIT!");

    window.alert("Tijd voor een nieuwe activiteit - Check de timetable!");

    $('#exampleModal').modal('show');
    document.querySelector(".activity-" + index + "-announcement").classList.toggle("d-none");
    document.querySelector(".activity-" + index).classList.toggle("d-none");
}