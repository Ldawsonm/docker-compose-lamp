document.addEventListener('DOMContentLoaded', function() {
    initializeSlidesList();
});

function initializeSlidesList() {
    let slides = document.querySelectorAll('#slidesList li');
    slides.forEach(slide => {
        slide.addEventListener('dragstart', handleDragStart, false);
        slide.addEventListener('dragover', handleDragOver, false);
        slide.addEventListener('drop', handleDrop, false);
        slide.addEventListener('dragend', handleDragEnd, false);
        slide.addEventListener('click', loadSlideIntoEditor, false);
    });
}

function addSlide() {
    const slidesList = document.getElementById('slidesList');
    const slideIndex = slidesList.children.length;
    const li = document.createElement('li');
    li.setAttribute('data-slide-index', slideIndex);
    li.setAttribute('draggable', true);
    li.innerHTML = `<span class="slide-title">Untitled Slide</span><input type="hidden" name="slides[${slideIndex}][order]" value="${slideIndex}" />`;
    li.addEventListener('dragstart', handleDragStart, false);
    li.addEventListener('dragover', handleDragOver, false);
    li.addEventListener('drop', handleDrop, false);
    li.addEventListener('dragend', handleDragEnd, false);
    li.addEventListener('click', loadSlideIntoEditor, false);
    slidesList.appendChild(li);
}

function handleDragStart(e) {
    // Implement drag start logic
}

function handleDragOver(e) {
    if (e.preventDefault) {
        e.preventDefault(); // Necessary. Allows us to drop.
    }
    e.dataTransfer.dropEffect = 'move';  // See the section on the DataTransfer object.
    return false;
}

function handleDrop(e) {
    // Implement drop logic
}

function handleDragEnd(e) {
    // Implement drag end logic
}

function loadSlideIntoEditor(e) {
    // Implement logic to load the clicked slide into the editor
}

function updateSlideTitle(slideIndex, newTitle) {
    const slideItem = document.querySelector(`li[data-slide-index="${slideIndex}"] .slide-title`);
    if (slideItem) {
        slideItem.textContent = newTitle;
    }
}
