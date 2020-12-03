require('./pagetitle.js');

let dates = [
    '01 Dec 2020 18:08:00 GMT+1',
    '01 Dec 2020 18:09:00 GMT+1',
    '01 Dec 2020 13:14:00 GMT+1',
    '30 Nov 2020 17:03:00 GMT+1',
    '30 Nov 2020 17:04:00 GMT+1',
    '30 Nov 2020 16:23:00 GMT+1',
    '30 Nov 2020 16:40:00 GMT+1'
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