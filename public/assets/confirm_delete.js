let button_delete = document.querySelectorAll("#delete");
let confirm_button = document.querySelectorAll('.confirm-button');
let cancel_button = document.querySelectorAll('.cancel-button');
let confim_delete_alert = document.querySelectorAll('.confirm-delete');
let body = document.querySelector('body');

// display confim delete alert when click on delete button
button_delete.forEach(button => {
  button.addEventListener('click', (e) => {
    let alert_id = e.target.getAttribute('data-id');
    let delete_alert = document.querySelector(`#confirm-delete-${alert_id}`);
    console.log(delete_alert);
    delete_alert.classList.remove('hidden');
  });
  // end foreach
});

// hide the delete alert when press cancel button 
cancel_button.forEach(button => {
  button.addEventListener('click', (e) => {
    let parent = e.target.parentElement.parentElement; // elert div for hide it 
    parent.classList.add('hidden');
  });
  // end foreach
});

// confim delete when click on confirm button and send request to server and wait it to redirect it to index
//  *** done with a form in blade template

