<?php
$secret = 'mustwill';

$headers = getallheaders();
if (isset($headers['X-Hub-Signature'])) {
    list($algo, $hash) = explode('=', $headers['X-Hub-Signature'], 2);
    $payload = file_get_contents('php://input');
    if (hash_hmac($algo, $payload, $secret) === $hash) {
        file_put_contents('/home/pasp5526/repositories/mustwill-project/deploy.log', "Webhook received and verified\n", FILE_APPEND);
        shell_exec('/home/pasp5526/repositories/mustwill-project/deploy.sh >> /home/pasp5526/repositories/mustwill-project/deploy.log 2>&1');
    } else {
        file_put_contents('/home/pasp5526/repositories/mustwill-project/deploy.log', "Webhook verification failed\n", FILE_APPEND);
    }
} else {
    file_put_contents('/home/pasp5526/repositories/mustwill-project/deploy.log', "No X-Hub-Signature header found\n", FILE_APPEND);
}
