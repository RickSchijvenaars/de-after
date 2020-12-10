require('./pagetitle.js');

let dates = [
    '10 Dec 2020 16:00:00 GMT+1',
    '10 Dec 2020 16:01:00 GMT+1',
    '10 Dec 2020 16:02:00 GMT+1',
    '10 Dec 2020 16:03:00 GMT+1',
    '10 Dec 2020 16:04:00 GMT+1',
    '10 Dec 2020 16:05:00 GMT+1',
    '10 Dec 2020 16:06:00 GMT+1'
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
    document.querySelector("")
}