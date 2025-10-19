<script src="https://allpanlexch.com/assets/exchange/socket.io.js"></script>
<script>

      var base_url = 'https://allpanlexch.com/';
        // var socket = io.connect('https://nginxx.operator.buzz:4040/');
        var socket = io('https://nginxx.operator.buzz:4040/', {
            transports: ['websocket'],
            rememberUpgrade: false
        });

        socket.on("connect_error", () => {
            setTimeout(() => {
                socket.connect();
            }, 1000);
        });
</script>