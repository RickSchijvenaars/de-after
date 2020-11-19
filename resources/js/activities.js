let dates = [
    '19 Nov 2020 22:40:00 GMT+1',
    '19 Nov 2020 22:46:00 GMT+1',
    '19 Nov 2020 22:53:00 GMT+1',
    '19 Nov 2020 23:04:00 GMT+1',
    '20 Nov 2020 02:45:00 GMT+1',
    '20 Nov 2020 03:45:00 GMT+1',
    '20 Nov 2020 04:45:00 GMT+1'
]

if (window.location.pathname == '/') {
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
    $('#exampleModal').modal('show');
    document.querySelector(".activity-" + index + "-announcement").classList.toggle("d-none");
    document.querySelector(".activity-" + index).classList.toggle("d-none");
}