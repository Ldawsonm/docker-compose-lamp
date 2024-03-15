@extends('layouts.template')

@if(isset($adventure))
    @section('title', 'Adventure Editor')
@else
    @section('title', 'Adventure Creator')
@endif

@section('content')
<div class="container">
    <h1>{{ isset($adventure) ? 'Edit' : 'Create' }} Adventure</h1>
    <form method="POST" id="adventureForm" action="{{ isset($adventure) ? route('adventure.update', $adventure->id) : route('adventure.store') }}">
        @csrf
        @if(isset($adventure))
            @method('PUT')
        @endif

        <!-- Adventure Title and Description -->
        <input type="text" name="title" value="{{ $adventure->title ?? '' }}" placeholder="Adventure Title" required>
        <textarea name="description" placeholder="Adventure Description">{{ $adventure->description ?? '' }}</textarea>

        <!-- Slides -->
        <h2>Slides List</h2>
        <div id="slidesListContainer">
            <ul id="slidesList">
                @foreach ($adventure->slides ?? [] as $slideIndex => $slide)
                    <li data-slide-index="{{ $slideIndex }}" draggable="true">
                        <span class="slide-title">{{ $slide->title ?? 'Untitled Slide' }}</span>
                        <input type="hidden" name="slides[{{ $slideIndex }}][order]" value="{{ $slideIndex }}" />
                    </li>
                @endforeach
            </ul>
            <button type="button" onclick="addSlide()">Add Slide</button>
        </div>

        <div id="slideEditorContainer">
            <!-- Slide editor will be loaded here -->
        </div>

        <!-- Submit Button -->
        <button type="submit">Save Adventure</button>
    </form>
</div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    // Assuming you have a JavaScript function to initialize CKEditor for new slides
    function initializeCKEditor(elementId) {
        CKEDITOR.replace(elementId);
    }

    /**
    function addSlide() {
        const slidesContainer = document.getElementById('slidesContainer');
        const slideIndex = slidesContainer.children.length;
        // Create slide element
        // You need to implement the details of this method
        const slideElement = createSlideElement(slideIndex);
        slidesContainer.appendChild(slideElement);
        initializeCKEditor(`editor-${slideIndex}`);
    }*/
    function onSlideIndexChange() {

    }

    function createSlideElement(slideIndex) {
        // Create the slide container
        let slideContainer = document.createElement('div');
        slideContainer.className = 'slide';
        slideContainer.setAttribute('data-slide-index', slideIndex);
        slideContainer.id = `slide-${slideIndex}`;

        // create a top div
        let topDiv = document.createElement('div');

        // Create an input for the slide title
        let titleInput = document.createElement('input');
        titleInput.type = 'text';
        titleInput.required = true;
        titleInput.name = `slides[${slideIndex}][title]`;
        titleInput.placeholder = 'Untitled Slide';
        titleInput.addEventListener('input', function() {
            // Call updateSlideTitle whenever the input's value changes
            index = slideContainer.getAttribute('data-slide-index');
            updateSlideTitle(index, titleInput.value);
        });
        topDiv.appendChild(titleInput);

        // Add delete button
        let deleteSlideButton = document.createElement('button');
        deleteSlideButton.type = 'button';
        deleteSlideButton.textContent = 'Delete Slide';
        deleteSlideButton.onclick = function() {
            const userResponse = confirm('Are you sure you want to delete this slide?');
            if (userResponse) {
                index = slideContainer.getAttribute('data-slide-index');
                // Destroy the CKEditor instance
                editorId = `editor-${index}`;
                if (CKEDITOR.instances[editorId]) {
                    CKEDITOR.instances[editorId].destroy();
                }

                slideListElement = document.querySelector(`li[data-slide-index="${index}"]`);
                slideListElement.remove();

                slideContainer.remove();
                reIndexSlides();
            }
        };
        topDiv.appendChild(deleteSlideButton);

        slideContainer.appendChild(topDiv);

        // Create a textarea for CKEditor
        let textarea = document.createElement('textarea');
        textarea.name = `slides[${slideIndex}][content]`;
        textarea.id = `editor-${slideIndex}`;
        slideContainer.appendChild(textarea);

        // Initialize CKEditor for the new textarea
        

        // Create a container for Add Prompt button
        let addPromptContainer = document.createElement('div');
        // Add button for adding prompts
        let addPromptButton = document.createElement('button');
        addPromptButton.type = 'button';
        addPromptButton.textContent = 'Add Prompt';
        addPromptButton.onclick = function() { addPrompt(slideContainer); };
        addPromptContainer.appendChild(addPromptButton);
        

        // Create a container for prompts
        let promptsContainer = document.createElement('div');
        promptsContainer.className = 'prompts-container';
        promptsContainer.id = `prompts-container-${slideIndex}`;
        slideContainer.appendChild(promptsContainer);
        slideContainer.appendChild(addPromptContainer);

        // Append the slide container to the slides container
        document.getElementById('slideEditorContainer').appendChild(slideContainer);

        CKEDITOR.replace(`editor-${slideIndex}`);

        
        // Call addPrompt to add an initial prompt section for the slide
        //addPrompt(slideIndex);

        return slideContainer;
    }

    
    function addPrompt(slideContainer) {
        slideIndex = slideContainer.getAttribute('data-slide-index');
        const promptsContainer = document.getElementById(`prompts-container-${slideIndex}`);
        const promptIndex = promptsContainer.getElementsByClassName('prompt').length;

        // Create prompt container
        let promptContainer = document.createElement('div');
        promptContainer.className = 'prompt';
        promptContainer.id = `slide-${slideIndex}-prompt-${promptIndex}`;
        promptContainer.setAttribute(`data-prompt-index`, promptIndex);

        // Add top div
        let topDiv = document.createElement('div');


        // Add input for prompt text
        let promptTextInput = document.createElement('input');
        promptTextInput.type = 'text';
        promptTextInput.className = 'promptTextInput';
        promptTextInput.name = `slides[${slideIndex}][prompts][${promptIndex}][text]`;
        promptTextInput.placeholder = 'Prompt Text';
        promptTextInput.required = true;
        topDiv.appendChild(promptTextInput);

        

        

        // Add select for prompt type
        let promptTypeSelect = document.createElement('select');
        promptTypeSelect.name = `slides[${slideIndex}][prompts][${promptIndex}][type]`;
        promptTypeSelect.className = 'promptTypeSelect';
        ['Free Response', 'Free Select', 'Multiple Choice'].forEach(type => {
            const option = document.createElement('option');
            option.value = type;
            option.textContent = type;
            promptTypeSelect.appendChild(option);
        });

        topDiv.appendChild(promptTypeSelect);

        // Add delete button
         
        let deletePromptButton = document.createElement('button');
        deletePromptButton.type = 'button';
        deletePromptButton.textContent = 'Delete Prompt';
        deletePromptButton.onclick = function() {
            const userResponse = confirm('Are you sure you want to delete this prompt?');
            if (userResponse) {
                promptContainer.remove();
                // Set up reIndexPrompts() method
            }
        };
        topDiv.appendChild(deletePromptButton);


        promptContainer.appendChild(topDiv);
        
        // add container for options
        

        promptTypeSelect.addEventListener('change', (event) => {
            const selectedValue = event.target.value;
            if (selectedValue == 'Free Select' || selectedValue == 'Multiple Choice') {
                // only proceed if there is no options button
                if (promptContainer.querySelector('.addOptions')) {
                    return;
                }

                let optionsContainer = document.createElement('div');
                optionsContainer.className = 'options';
                promptContainer.appendChild(optionsContainer);

                // Add button for adding options (for Free Select and Multiple Choice)
                let addOptionButton = document.createElement('button');
                addOptionButton.className = 'addOptions';
                addOptionButton.type = 'button';
                addOptionButton.textContent = 'Add Option';
                addOptionButton.onclick = function() { addOption(slideContainer, promptContainer, optionsContainer); };
                promptContainer.appendChild(addOptionButton);
                addOption(slideContainer, promptContainer, optionsContainer);
            }
            else {
                promptContainer.querySelector('.addOptions').remove();
                options = promptContainer.querySelector('.options');
                while (options.firstChild) {
                    options.removeChild(options.firstChild);
                }
            }
        });

        

        // Append the prompt container to the prompts container
        promptsContainer.appendChild(promptContainer);
    }

    function addOption(slideContainer, promptContainer, optionsContainer) {
        slideIndex = slideContainer.getAttribute('data-slide-index');
        promptIndex = promptContainer.getAttribute('data-prompt-index');
        // Implement the logic to add options for the specified prompt
        console.log(`add option`);
        let option = document.createElement('div');
        optionIndex = optionsContainer.children.length;
        
        // text input element
        let optionText = document.createElement('input');
        optionText.type = 'text';
        optionText.placeholder = 'Option Text'
        optionText.required = true;
        optionText.name = `slide[${slideIndex}]prompt[${promptIndex}]option[${optionIndex}]text`;

        option.appendChild(optionText);
        
        // checkbox element
        let optionIsCorrect = document.createElement('input');
        optionIsCorrect.type = 'checkbox';
        optionIsCorrect.name = `slide[${slideIndex}]prompt[${promptIndex}]option[${optionIndex}]isCorrect`;
        optionIsCorrect.id = `slide-${slideIndex}-prompt-${promptIndex}-option-${optionIndex}`;
        isCorrectLabel = document.createElement('label');
        isCorrectLabel.for = optionIsCorrect.id;
        isCorrectLabel.textContent = 'Correct Answer';

        option.appendChild(optionIsCorrect);
        option.appendChild(isCorrectLabel);

        // correct answer text element
        optionIsCorrect.addEventListener('change', function(event) {
            if (this.checked) {
                let correctAnswerText = document.createElement('textarea');
                correctAnswerText.name = `slide[${slideIndex}]prompt[${promptIndex}]option[${optionIndex}]correctAnswerText`;
                correctAnswerText.className = 'correctAnswerText';
                correctAnswerText.placeholder = 'Enter Correct Answer Text';
                correctAnswerText.required = true;
                option.appendChild(correctAnswerText);
            }
            else {
                option.querySelector('.correctAnswerText').remove();
            }
        });

        // delete button
        deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.textContent = 'Delete Option';
        option.appendChild(deleteButton)
        deleteButton.onclick = function() {
            option.remove();
            // Set up reIndexOptions() method
        };
        

        optionsContainer.appendChild(option);
    }

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
        
        // Create an Edit button
        const editButton = document.createElement('button');
        editButton.type = 'button'
        editButton.textContent = 'Edit';
        editButton.onclick = function(event) {
            event.stopPropagation(); // Prevent li click event when clicking the button

            let parentSlide = this.parentNode;
            let currentIndex = parentSlide.getAttribute('data-slide-index');

            editSlide(currentIndex); // Function to handle edit logic
        };
        li.appendChild(editButton);
        
        li.addEventListener('dragstart', handleDragStart, false);
        li.addEventListener('dragover', handleDragOver, false);
        li.addEventListener('drop', handleDrop, false);
        li.addEventListener('dragend', handleDragEnd, false);
        //li.addEventListener('click', loadSlideIntoEditor, false);
        slidesList.appendChild(li);
        const slideElement = createSlideElement(slideIndex);
        changeSlideEditorto(slideIndex);
        //slideElement.appendChild(slideElement);
        //initializeCKEditor(`editor-${slideIndex}`);
        ///initializeCKEditor(`slideEditorContainer`);
    }

    let draggedElement = null;

    function handleDragStart(e) {
        //console.log('drag start');
        draggedElement = e.target; // Store the reference to the dragged element
        e.dataTransfer.setData('text/plain', null); // For Firefox compatibility
    }

    function handleDragOver(e) {
        //console.log('drag over');
        e.preventDefault(); // This is necessary to allow dropping
        e.dataTransfer.dropEffect = 'move';
    }

    function handleDrop(e) {
        //console.log('drop');
        e.preventDefault();
        //console.log(`dragged element is ${draggedElement}, e is ${e}`);
        //console.log(`${e.target.tagName}`);
        //console.log(`${e.target.id}`);
        //console.log(`${draggedElement.id}`);

        // Find the closest parent LI element from the target
        let targetElement = e.target;
        while (targetElement && targetElement.tagName !== 'LI') {
            targetElement = targetElement.parentNode;
        }

        if (targetElement && targetElement.tagName === 'LI' && targetElement !== draggedElement) {
            const list = document.getElementById('slidesList');
            // Determine the position to insert based on mouse position relative to the target center
            const targetRect = targetElement.getBoundingClientRect();
            const positionToInsert = e.clientY > targetRect.top + (targetRect.height / 2) ? 'afterend' : 'beforebegin';

            draggedIndex = draggedElement.getAttribute('data-slide-index');
            correspondingDraggedSlide = document.getElementById(`slide-${draggedIndex}`);

            targetIndex = targetElement.getAttribute('data-slide-index');
            correspondingTargetSlide = document.getElementById(`slide-${targetIndex}`);

            targetElement.insertAdjacentElement(positionToInsert, draggedElement);
            correspondingTargetSlide.insertAdjacentElement(positionToInsert, correspondingDraggedSlide);
        }
    }

    function handleDragEnd(e) {
        console.log('drag end');
        if (draggedElement) {
            console.log('dragged element is not null');
            // Reindex the IDs of the list elements
            reIndexSlides();
            draggedElement = null; // Reset the draggedElement reference
        }
    }

    function reIndexSlides() {
        const slidesList = document.querySelectorAll('#slidesList li');
        slidesList.forEach((slide, index) => {
            slide.setAttribute('data-slide-index', index);

            //slide.id = "slidelist-" + index;
        });

        // Update the slide container indexes
        const slideContainers = document.querySelectorAll('.slide');
        slideContainers.forEach((container, index) => {
            //container.setAttribute('data-slide-index', index);
            updateSlideInputElementNames(container, index);
        });
        // iterate through slide containers again to reinitialize ckeditor instances
        slideContainers.forEach((container, index) => {
            CKEDITOR.replace(`editor-${index}`);
        });
    }

    function editSlide(slideIndex) {
        // Implement the logic to edit the slide with the given slideIndex
        //console.log(`Editing slide ${slideIndex}`);
        changeSlideEditorto(slideIndex);
    }

    function updateSlideInputElementNames(container, newIndexValue) {
        oldIndexValue = container.getAttribute('data-slide-index');

        container.setAttribute('id', `slide-${newIndexValue}`);
        container.setAttribute('data-slide-index', newIndexValue);
        titleElement = container.querySelector(`input[name=slides\\[${oldIndexValue}\\]\\[title\\]]`);
        titleElement.setAttribute('name', `slides[${newIndexValue}][title]`);
        contentElement = container.querySelector(`textarea[name=slides\\[${oldIndexValue}\\]\\[content\\]]`);
        contentElement.setAttribute('name', `slides[${newIndexValue}][content]`);

        // Need to add in prompt and options-related updates
        promptContainer = document.getElementById(`prompts-container-${oldIndexValue}`);
        


        // Reinitialize the CKEditor
        editorId = `editor-${oldIndexValue}`;
        if (CKEDITOR.instances[editorId]) {
            CKEDITOR.instances[editorId].destroy();
        }

        newEditorId = `editor-${newIndexValue}`;
        document.getElementById(editorId).setAttribute('id', newEditorId);

        
        
    }

    function reindexPrompts(promptContainer) {
        prompts = promptContainer.children;
        for (let i = 0; i < prompts.length; i++) {
            prompt = prompts[i];
            prompt_index = prompt.getAttribute('data-prompt-index');
            prompt.setAttribute('id', `slide-${newIndexValue}-prompt-${prompt_index}`);
            //textInput = prompt.querySelector(`input[name=slides\\[${oldIndexValue}\\]\\[prompts\\]\\[${prompt_index}\\]\\[text\\]]`);
            textInput = prompt.querySelector('.promptTextInput');
            textInput.setAttribute('name', `slides[${newIndexValue}][prompts][${prompt_index}]`);

            optionsContainer = prompt.querySelector('.options');
            if (optionsContainer) {
                options = optionsContainer.children;
                for(let i = 0; i < options.length; i++) {
                    // Set Options here
                }
            }
            
        }
    }

    function changeSlideEditorto(slideToDisplay) {
        //console.log(`slide to display: ${slideToDisplay}`);
        const slidesList = document.getElementById('slidesList');
        const slidesLength = slidesList.children.length;
        //console.log(`there are ${slidesLength} slides`);
        for (let i = 0; i < slidesLength; i++) {
            //console.log(`i = ${i}`);
            if (i == slideToDisplay) {
                document.getElementById("slide-"+ i).hidden = false;
            } else {
                document.getElementById("slide-"+ i).hidden = true;
            }
        }
    }

    function updateSlideTitle(slideIndex, newTitle) {
        const slideItem = document.querySelector(`li[data-slide-index="${slideIndex}"] .slide-title`);
        if (slideItem) {
            slideItem.textContent = newTitle;
        }
    }

</script>
@endsection
