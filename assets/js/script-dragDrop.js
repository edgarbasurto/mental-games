const draggableElements = document.querySelectorAll(".draggable");
const droppableElements = document.querySelectorAll(".droppable");

draggableElements.forEach(elem => {
    elem.addEventListener('dragstart', dragStart);
    elem.addEventListener('dragend', dragEnd);
});

droppableElements.forEach(elem => {
    elem.addEventListener('dragover', dragOver);
    elem.addEventListener('dragenter', dragEnter);
    elem.addEventListener('dragleave', dragLeave);
    elem.addEventListener('drop', dragDrop);
});

function dragStart(e) {
    e.dataTransfer.setData('text', e.target.id);
    this.className += ' hold';
    setTimeout(() => { this.className = 'invisible' }, 0);
}
function dragEnd() {
    this.className = 'dropped';
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter(e) {
    e.preventDefault();
    this.className += ' hovered';
}

function dragLeave() {
    this.className = 'droppable';
}

function dragDrop(e) {
    this.className = 'droppable';
    const id = e.dataTransfer.getData('text');
    const elemento = document.getElementById(id);
    const dropzone = e.target;
    dropzone.appendChild(elemento);
    e.dataTransfer.clearData();
}
