
<script src="js/vendor/moment.min.js"></script>
<script>
    function setServerTime() {
        document.getElementById('tx').innerHTML = "<b>Server Time: " + moment().format('h:mm:ss a') + "</b>";
        setTimeout(setServerTime, 1000);
    }

    document.addEventListener('DOMContentLoaded', function() {
        setServerTime();
    });
</script>