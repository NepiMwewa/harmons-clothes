var modalToggle = false;
let modalListener = "";
 
//toggle menu open or closed
function toggleModal(modalString){
    let modalDiv = document.getElementById(modalString + "-modal");
    let modalButton = document.getElementById(modalString + "-button");
  if(!modalToggle){
    modalDiv.classList.toggle("open-modal");
    modalButton.ariaExpanded = true;
    modalToggle = true;
    document.body.classList.add("no-scroll");
    modalListener = modalString;

    modalButton.addEventListener('keydown', (event) => escapeFromModal(event));
    modalDiv.addEventListener('keydown', (event) => escapeFromModal(event));
  }else{
    modalDiv.classList.toggle("open-modal");
    modalButton.ariaExpanded = false;
    modalToggle = false;
    document.body.classList.remove("no-scroll");
    modalButton.removeEventListener('keydown', escapeFromModal);
    modalDiv.removeEventListener('keydown', escapeFromModal);
    modalListener = "";
  }
}

function escapeFromModal(event){
  if(event.key === "Escape" && modalToggle == true)
    {
      toggleModal(modalListener);
  }
}

window.onload = init;

// onload function
function init() {
}

