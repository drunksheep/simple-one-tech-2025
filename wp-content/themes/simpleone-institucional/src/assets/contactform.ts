type ContactFormFields = {
    name: string;
    email: string;
    phone: string;
    company: string;
    area: string;
    message: string;
};

const contactForm = document.querySelector<HTMLFormElement>('#contactForm');

contactForm?.addEventListener('submit', async (e) => {
    e.preventDefault();

    const form = e.currentTarget;

    if (!form) return

    const formData = new FormData(form);

    const data: ContactFormFields = {
        name: formData.get('name') as string,
        email: formData.get('email') as string,
        phone: formData.get('phone') as string,
        company: formData.get('company') as string,
        area: formData.get('area') as string,
        message: formData.get('message') as string,
    };

    try {
        const response = await fetch('/wp-content/themes/your-theme/includes/ajax/send-contact.php', {
            method: 'POST',
            body: new URLSearchParams(data as Record<string, string>),
        });

        const json: { success: boolean; error?: string } = await response.json();

        if (json.success) {
            alert('Mensagem enviada com sucesso!');
            form.reset();
        } else {
            alert(`Erro: ${json.error || 'Falha ao enviar.'}`);
        }
    } catch (err) {
        console.error('Erro ao enviar o formulário:', err);
        alert('Erro de rede ou servidor.');
    }
});