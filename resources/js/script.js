console.log('JS OK');

const open_modal = document.getElementById('open-modal');
const modal_container = document.getElementById('modal-container');
const close_modal = document.getElementById('close-modal');

open_modal.addEventListener('click', () => modal_container.classList.add('show'));

close_modal.addEventListener('click', () => modal_container.classList.remove('show'));