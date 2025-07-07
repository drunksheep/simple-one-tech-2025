<?php

require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function send_mail()
{
    $data = json_decode(file_get_contents('php://input'), true);

    if (empty($data)) {
        wp_send_json_error('Dados inválidos.');
    }

    try {
        $mail = new PHPMailer();

        $mail->CharSet = 'UTF-8';
        $mail->setFrom('contato@simpleonetech.com.br', 'Formulário');
        $mail->addAddress('contato@simpleonetech.com.br', 'Contato');
        $mail->addReplyTo($data['email'], $data['name']);

        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com.br';     
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@simpleonetech.com.br';
        $mail->Password = 'Dftqaweb#3033';          
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->isHTML(true);
        $mail->Subject = 'Formulário de contato do site';

        $body = '
            <table style="border: 1px solid; border-collapse: collapse; font-family: Helvetica, sans-serif;">
                <tr style="border: 1px solid #000;"><td style="font-weight: bold; padding: 10px;" >Nome:</td><td>' . esc_html($data['name']) . '</td></tr>
                <tr style="border: 1px solid #000;"><td style="font-weight: bold; padding: 10px;" >E-mail:</td><td>' . esc_html($data['email']) . '</td></tr>
                <tr style="border: 1px solid #000;"><td style="font-weight: bold; padding: 10px;" >Telefone:</td><td>' . esc_html($data['phone']) . '</td></tr>
                <tr style="border: 1px solid #000;"><td style="font-weight: bold; padding: 10px;" >Empresa:</td><td>' . esc_html($data['company']) . '</td></tr>
                <tr style="border: 1px solid #000;"><td style="font-weight: bold; padding: 10px;" >Área de Atuação:</td><td>' . esc_html($data['area']) . '</td></tr>
                <tr style="border: 1px solid #000;"><td style="font-weight: bold; padding: 10px;" >Mensagem:</td><td>' . nl2br(esc_html($data['message'])) . '</td></tr>
            </table>
        ';

        $mail->Body = $body;

        $mail->AltBody = $data['message'];

        if (!$mail->send()) {
            wp_send_json_error('Erro ao enviar o e-mail.');
        }

        wp_send_json_success('Mensagem enviada com sucesso.');
    } catch (Exception $e) {
        wp_send_json_error('Erro no servidor: ' . $e->getMessage());
    }
}

// Register WP AJAX hooks
add_action('wp_ajax_nopriv_send_mail', 'send_mail');
add_action('wp_ajax_send_mail', 'send_mail');
