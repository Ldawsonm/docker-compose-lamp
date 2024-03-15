function open_form(id) {
    document.getElementById(id).style.display = "block";
    const badge_list = document.querySelectorAll('[id$="_badge"');
    badge_list.forEach((badge) => {
        badge.style.pointerEvents = "none"
    });
}

function close_form(id) {
    document.getElementById(id).style.display = "none";
    const badge_list = document.querySelectorAll('[id$="_badge"');
    badge_list.forEach((badge) => {
        badge.style.pointerEvents = "auto"
    });
    
} 

function get_answers(id) {
    let form = document.getElementById(id);
    const form_data = new FormData(form);
    const keys = form_data.keys();
    var data = {}
    for (const key of keys) {
        value = form_data.getAll(key);
        if (value.length === 1) {
            value = value[0];
        }
        data[key] = value;
    }
    console.log(JSON.stringify(data)) // TODO do something with this data
}
