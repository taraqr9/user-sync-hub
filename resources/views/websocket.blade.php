<!DOCTYPE html>
<html>
    <body class="antialiased">
    </body>
    @vite('./resources/js/app.js')

    <script>
        // For pusher
        setTimeout(() => {
            window.Echo.channel('user-data')
                .listen('.App\\Events\\UserDataEvent', (e) => {
                    console.log(e);
                })
        }, 200)
    </script>
</html>
