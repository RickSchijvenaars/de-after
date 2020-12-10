const axios = require('axios').default;;

if (window.location.pathname.split("/")[1] == 'date') {
    document.querySelector('.navbar').classList.add('d-none');

    const dateId = window.location.pathname.split("/")[2];

    axios.get('/api/times').then(response => {
        let startTime = new Date(Object.values(response.data[0])[dateId]).getTime();
        let endTime = new Date(startTime + 900000)

        // Update the count down every 1 second
        let x = setInterval(function() {
            let now = new Date().getTime();
            let timeLeft = endTime - now;

            let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (timeLeft < 0) {
                clearInterval(x);
                location.reload();
            }
        }, 1000);
    });
}