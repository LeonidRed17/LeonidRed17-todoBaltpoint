document.addEventListener("DOMContentLoaded", function() {
    //Инпуты
    let selectGroupInput = document.getElementById("groups_name");
    let groupNameInput = document.getElementById("group_name");
    let groupDescriptioninput = document.getElementById("group_description");
    let taskInput = document.getElementById("task_description");

    //Кнопка сброса формы
    const resetButton = document.querySelector(".reset_button");

    //Значения для плейсхолдера по умолчанию
    const groupNameInputDefaultPlaceholder = "Работа";
    const groupDescriptionInputDefaultPlaceholder = "Мои задачи по работе";

    resetButton.addEventListener("click", resetFields);

    function resetFields() {
        groupNameInput.value = "";
        groupDescriptioninput.value = "";
        taskInput.value = "";
        selectGroupInput.value = "default";
        toggleFields();
    }

    function toggleFields() {
        if (selectGroupInput.value != "default") {
            groupNameInput.disabled = true;
            groupDescriptioninput.disabled = true;

            groupNameInput.value = "";
            groupDescriptioninput.value = "";

            groupDescriptioninput.placeholder = "";
            groupNameInput.placeholder = "";
        } else {
            groupNameInput.disabled = false;
            groupDescriptioninput.disabled = false;

            groupDescriptioninput.placeholder = groupDescriptionInputDefaultPlaceholder;
            groupNameInput.placeholder = groupNameInputDefaultPlaceholder;

        }
    }

    selectGroupInput.addEventListener("change", toggleFields);

    toggleFields(); // при загрузке сразу применить

});