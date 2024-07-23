<?php
// Secret yang sama dengan yang diatur di GitHub webhook
$secret = 'mustwill';

// Ambil header yang dikirimkan oleh GitHub
$headers = getallheaders();
if ($headers['X-Hub-Signature']) {
    // Verifikasi signature
    list($algo, $hash) = explode('=', $headers['X-Hub-Signature'], 2);
    $payload = file_get_contents('php://input');
    if (hash_hmac($algo, $payload, $secret) === $hash) {
        // Jalankan script deploy
        shell_exec('/path/repositories/pasang-ac-murah/deploy.sh');
    }
}
