<?php

if (!defined('ABSPATH')) {
    return;
}

$fields = [
    'name' => sanitize_text_field($_POST['name'] ?? ''),
    'email' => sanitize_email($_POST['email'] ?? ''),
    'phone' => sanitize_text_field($_POST['phone'] ?? ''),
    'company' => sanitize_text_field($_POST['company'] ?? ''),
    'area' => sanitize_text_field($_POST['area'] ?? ''),
    'message' => sanitize_textarea_field($_POST['message'] ?? ''),
];

if (!$fields['name'] || !$fields['email'] || !$fields['message']) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Campos obrigatórios ausentes.']);
    exit;
}

$body = <<<EOD
Nome: {$fields['name']}
Empresa: {$fields['company']}
Área: {$fields['area']}
Telefone: {$fields['phone']}
Email: {$fields['email']}

Mensagem:
{$fields['message']}
EOD;

$sent = wp_mail(
    get_option('admin_email'),
    "Novo contato: {$fields['name']}",
    $body,
    [
        'Reply-To: ' . $fields['email'],
        'Content-Type: text/plain; charset=UTF-8',
    ]
);

echo json_encode(['success' => $sent]);