<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <h1>Selamat Datang di Dashboard</h1>

    <p>
        Login sebagai:
        {{ session('role') }}
    </p>
@if (session('success'))
    <div
        id="success-notification"
        class="mb-5 p-4 bg-green-100 border border-green-300 text-green-700 rounded-lg"
    >
        ✓ {{ session('success') }}
    </div>

    <script>
        setTimeout(function () {
            const notification = document.getElementById('success-notification');

            if (notification) {
                notification.style.display = 'none';
            }
        }, 3000);
    </script>
@endif
</body>
</html>