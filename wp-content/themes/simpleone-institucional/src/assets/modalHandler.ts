export default function setupModalHandler() {
  const modalOverlay = document.querySelector('.modal-overlay');
  const closeButton = modalOverlay?.querySelector('.close-modal');
  const triggers = document.querySelectorAll('.modal-trigger');

  if (!modalOverlay || !closeButton) return;

  const openModal = () => {
    modalOverlay.classList.add('is-active');
    document.body.style.overflow = 'hidden';
    document.documentElement.style.overflow = 'hidden';
  };

  const closeModal = () => {
    modalOverlay.classList.remove('is-active');
    document.body.style.overflow = '';
    document.documentElement.style.overflow = '';
  };

  triggers.forEach(trigger => {
    trigger.addEventListener('click', openModal);
  });

  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) closeModal();
  });

  closeButton.addEventListener('click', closeModal);
}
