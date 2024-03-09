@extends('layouts.app')

@section('title', 'Adventure Creator Form')

@section('content')
<div class="container">
    <h1>Create Adventure</h1>
    <form method="POST" action="{{ route('adventure.store') }}" id="adventure-form">
        @csrf
        <div>
            <label>Adventure Name:</label>
            <input type="text" name="adventure_name" required>
        </div>
        <div>
            <label>Order:</label>
            <input type="number" name="order" required>
        </div>
        <div id="prompts-container">
            <!-- Existing prompts HTML -->
        </div>
        <button type="button" onclick="addPrompt()" class="btn btn-primary">Add Prompt</button>
        <button type="submit" class="btn btn-success">Create Adventure</button>
    </form>
</div>
<script>
// Existing JavaScript functions...
function showOptions(selectElement, promptIndex) {
    const optionsContainer = document.getElementById(`options-container-${promptIndex}`);
    const addOptionButton = optionsContainer.nextElementSibling;

    if (selectElement.value === 'FREE_SELECT' || selectElement.value === 'MULTIPLE_CHOICE') {
        optionsContainer.style.display = 'block';
        addOptionButton.style.display = 'inline';
        optionsContainer.querySelectorAll('input').forEach(input => {
            input.required = true;
        });
    } else {
        optionsContainer.style.display = 'none';
        addOptionButton.style.display = 'none';
        optionsContainer.querySelectorAll('input').forEach(input => {
            input.required = false;
        });
    }
}

function addOption(promptIndex) {
    const optionsContainer = document.getElementById(`options-container-${promptIndex}`);
    const optionIndex = optionsContainer.querySelectorAll('.option').length;
    const optionHTML = `
        <div class="option">
            <span>${optionIndex}:</span>
            <input type="text" name="prompts[${promptIndex}][options][${optionIndex}]" placeholder="Enter text here" required>
        </div>
    `;
    optionsContainer.insertAdjacentHTML('beforeend', optionHTML);
}
function addPrompt() {
    const container = document.getElementById('prompts-container');
    const promptIndex = container.querySelectorAll('.prompt').length;
    const promptHTML = `
        <div class="prompt">
            <input type="text" name="prompts[${promptIndex}][text]" placeholder="Prompt text" required>
            <select name="prompts[${promptIndex}][type]" onchange="showOptions(this, ${promptIndex})" required>
                <option value="">Select a type</option>
                <option value="FREE_RESPONSE">Free Response</option>
                <option value="FREE_SELECT">Free Select</option>
                <option value="MULTIPLE_CHOICE">Multiple Choice</option>
            </select>
            <div id="options-container-${promptIndex}" class="options-container" style="display: none;">
                <label>Options:</label>
                <div class="option">
                    <span>0:</span>
                    <input type="text" name="prompts[${promptIndex}][options][0]" placeholder="Enter text here" required>
                </div>
            </div>
            <button type="button" style="display: none;" onclick="addOption(${promptIndex})">Add Option</button>
            <button type="button" onclick="deletePrompt(this, ${promptIndex})">Delete Prompt</button>
        </div>
    `;
    container.insertAdjacentHTML('beforeend', promptHTML);
}

function deleteOption(button, promptIndex, optionIndex) {
    const option = button.parentElement;
    option.remove();
    // Re-index options
    reindexOptions(promptIndex);
}

function deletePrompt(button, promptIndex) {
    const prompt = button.parentElement;
    prompt.remove();
    // Re-index prompts
    reindexPrompts();
}

function reindexOptions(promptIndex) {
    const optionsContainer = document.getElementById(`options-container-${promptIndex}`);
    let optionIndex = 0;
    optionsContainer.querySelectorAll('.option').forEach((option) => {
        option.querySelector('input[type=text]').setAttribute('name', `prompts[${promptIndex}][options][${optionIndex}]`);
        option.querySelector('span').textContent = `${optionIndex}:`;
        optionIndex++;
    });
}

function reindexPrompts() {
    let promptIndex = 0;
    document.querySelectorAll('.prompt').forEach((prompt) => {
        prompt.querySelectorAll('input, select').forEach((input) => {
            const name = input.getAttribute('name').replace(/\d+/, promptIndex);
            input.setAttribute('name', name);
        });
        const optionsContainer = prompt.querySelector('.options-container');
        if (optionsContainer) {
            optionsContainer.id = `options-container-${promptIndex}`;
            reindexOptions(promptIndex);
        }
        promptIndex++;
    });
}

// Existing JavaScript functions...
</script>
<style>
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        user-select: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active {
        background-color: #286090;
        border-color: #204d74;
    }

    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }

    .btn-success:hover,
    .btn-success:focus,
    .btn-success:active {
        background-color: #449d44;
        border-color: #398439;
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a;
    }

    .btn-danger:hover,
    .btn-danger:focus,
    .btn-danger:active {
        background-color: #c9302c;
        border-color: #ac2925;
    }
</style>
@endsection
