import Swal from "sweetalert2";

type ContactFormFields = {
    name: string;
    email: string;
    phone: string;
    company: string;
    area: string;
    message: string;
};

const submitURL = `${window.helpers?.ajax_url}?action=send_mail`;

export default async function submitEmail(e: SubmitEvent) {
    e.preventDefault();

    const form = e.currentTarget as HTMLFormElement;
    if (!form || !submitURL) return;

    const formData = new FormData(form);
    const data: ContactFormFields = {
        name: formData.get('name') as string,
        email: formData.get('email') as string,
        phone: formData.get('phone') as string,
        company: formData.get('company') as string,
        area: formData.get('area') as string,
        message: formData.get('message') as string,
    };


    const btn = form.querySelector('button');

    if (btn) {
        btn.disabled = true;
        btn.textContent = 'Enviando...'
    }

    try {

        const response = await fetch(submitURL, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });

        const json = await response.json();

        if (json.success) {
            Swal.fire({
                'icon': 'success',
                'title': "Sucesso!",
                'text': 'Sua mensagem foi enviada com sucesso.',
                background: '#0F1216',
                color: '#FFFFFF',
            })
            form.reset();
        } else {
            Swal.fire({
                'icon': 'error',
                'title': "Ops!",
                'text': 'Erro no envio de sua mensagem, tente novamente mais tarde ou entre em contato através do e-mail contato@simpleonetech.com.br',
                background: '#0F1216',
                color: '#FFFFFF',
            })
        }
    } catch (err) {
        console.error('Erro ao enviar o formulário:', err);
        Swal.fire({
            'icon': 'error',
            'title': "Ops!",
            'text': 'Erro no envio de sua mensagem, tente novamente mais tarde ou entre em contato através do e-mail contato@simpleonetech.com.br',
            background: '#0F1216',
            color: '#FFFFFF',
        })
    } finally {
        if (btn) {
            btn.disabled = false;
            btn.textContent = 'Enviar mensagem';
        }
    }
}
