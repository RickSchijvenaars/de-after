require('./pagetitle.js');

let dates = [
    '11 Dec 2020 22:45:00 GMT+1',
    '11 Dec 2020 23:45:00 GMT+1',
    '12 Dec 2020 00:45:00 GMT+1',
    '12 Dec 2020 01:45:00 GMT+1',
    '12 Dec 2020 02:45:00 GMT+1',
    '12 Dec 2020 03:45:00 GMT+1',
    '12 Dec 2020 04:45:00 GMT+1'
];

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
    pageTitleNotification.on("NIEUWE ACTIVITEIT!");

    const audio = new Audio('/media/alert.mp3');
    audio.play();

    $('#exampleModal').modal('show');
    document.querySelector(".activity-" + index + "-announcement").classList.toggle("d-none"); //hide time
    document.querySelector(".activity-" + index).classList.toggle("d-none");
    document.querySelector(".activity-" + index).classList.toggle("dashboard-timetable-item-bg-activity-active"); //show activity

    if (index != 0) {
        document.querySelector(".activity-" + (index - 1)).classList.remove("dashboard-timetable-item-bg-activity-active"); // remove active class
    }
    if (document.fullscreenElement) {
        window.alert("Tijd voor een nieuwe activiteit - Check de timetable!");
    }
}