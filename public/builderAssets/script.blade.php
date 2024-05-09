$( document ).ready(function() {
    $(document).foundation();
    $("form").parsley();

// get elements ------------------------------

// Events ------------------------------

    $(document).on('click',".icon i[class='fas fa-trash']", function(){
        $(this).closest(".cv__info").remove();
    });

    $(document).on('mouseenter','.cv__info:has(.btn-block)', function(){
        $(this).find(".btn-block").css('opacity',1);
    });

    $(document).on('mouseleave','.cv__info:has(.btn-block)', function(){
            $(this).find(".btn-block").css('opacity',0);
    });


// functions ----------------------------------
    function generateDelBtn() {

        // <button class="icon"><i class="fas fa-trash"></i></button>
        let i = document.createElement("i");
        let button = document.createElement("button");
        button.append(i);

        button.classList.add("icon");
        i.classList.add("fas");
        i.classList.add("fa-trash");

        return button
    }

    function generateEditBtn() {

        // <button class="icon"><i class="fas fa-paint-brush"></i></button>
        let i = document.createElement("i");
        let button = document.createElement("button");
        button.append(i);

        button.classList.add("icon");
        i.classList.add("fas");
        i.classList.add("fa-paint-brush");

        return button
    }

    function generateBtnBlock() {
        // <div class="btn-block">...</div>
        let divTag = document.createElement("div");
        divTag.append(generateEditBtn());
        divTag.append(generateDelBtn());

        divTag.classList.add("btn-block");

        return divTag
    }

        function addInfo(inputName) {
        $('#' + inputName).parsley().on('field:success', function() {
            // In here, `this` is the parlsey instance of #some-input
            let to = document.getElementById('cv__' + inputName);
            if (to) {
                to.textContent = this.value;
            } else {
                // append first element
                let ddTag = document.createElement("dd");
                ddTag.classList.add('cv__info'); 
                let iTag = document.createElement("i");
                iTag.classList.add("fas");

                if (inputName === "email") {
                    iTag.classList.add("fa-at");
                } else if (inputName === "phone") {
                    iTag.classList.add("fa-phone");
                }

                let spanTag = document.createElement("span");
                spanTag.textContent = this.value;

                ddTag.append(iTag);
                ddTag.append(spanTag);
                ddTag.append(generateBtnBlock());
                $(".sidebar__info").prepend(ddTag);

            }
        });
    }

    function addWebSite(inputName) {
        // get elements
        let input = document.getElementById("" + inputName);
        let button = document.getElementById("button-" + inputName + "_add");

        button.addEventListener("click", ($event) => {
            $event.preventDefault();
            if ($('#' + inputName).parsley().isValid() && input.value !== "" ) {

                let divTag = document.createElement("div");
                divTag.classList.add("cv__info"); 
                // create <i class="fas fa-globe-europe"></i>
                let iTag = document.createElement("i");
                iTag.classList.add("fas");
                iTag.classList.add("fa-globe-europe");

                // create link tag
                // get the element to write inside

                let linkTag = document.createElement("a");
                let linkText = document.createTextNode(input.value);

                linkTag.appendChild(linkText);
                linkTag.title = input.value;
                linkTag.href = input.value;
                let to = document.getElementById('cv__' + inputName);
                to.appendChild(divTag);
                divTag.appendChild(iTag);
                divTag.appendChild(linkTag);
                divTag.appendChild(generateBtnBlock());
            }
        });
    }

    function addSocialMedia(inputName) {
        // get elements
        let input = document.getElementById("" + inputName);
        let select = document.getElementById("select-" + inputName);
        let button = document.getElementById("button-" + inputName + "_add");

        button.addEventListener("click", ($event) => {
            $event.preventDefault();
            if ($('#' + inputName).parsley().isValid() && $('#select-' + inputName).parsley().isValid() && input.value !== "") {

                let divTag = document.createElement("div");
                divTag.classList.add("cv__info"); 

                // create <i class="fas"> &#x....; </i>
                let iTag = document.createElement("i");
                iTag.classList.add("fab");
                iTag.textContent = select.value;

                // create link tag
                let linkTag = document.createElement("a");
                let linkText = document.createTextNode(input.value);

                linkTag.appendChild(linkText);
                linkTag.title = input.value;
                linkTag.href = input.value;

                // get the element to write inside
                let to = document.getElementById('cv__' + inputName);
                divTag.appendChild(iTag);
                divTag.appendChild(linkTag);
                divTag.appendChild(generateBtnBlock());
                to.appendChild(divTag);
            }
        });
    }

    function addSkill(inputName) {
        // get elements
        let input = document.getElementById("" + inputName);
        let select = document.getElementById("select-" + inputName + "_level");
        let button = document.getElementById("button-" + inputName + "_add");

        button.addEventListener("click", ($event) => {
            console.log("Hey From Japan Eny");
            $event.preventDefault();
            if ( $('#' + inputName).parsley().isValid() && $('#select-' + inputName + "_level").parsley().isValid() && input.value !== "") {

                let divTag = document.createElement("div");
                divTag.classList.add("cv__info", "flex", "jcb", "aic");  
                // create <progress class="secondary float-right" max="100" value="85"></progress>
                let progressTag = document.createElement("progress");
                progressTag.classList.add("secondary");
                progressTag.classList.add("float-right");
                progressTag.max = 100;
                progressTag.value = select.value;

                // create <span> ... </span>
                let spanTag = document.createElement("span");
                spanTag.textContent = input.value;

                // get the element to write inside
                let to = document.getElementById('cv__' + inputName + "s");
                divTag.appendChild(spanTag);
                divTag.appendChild(generateBtnBlock());
                divTag.appendChild(progressTag);
                to.appendChild(divTag);
          
            }
        });
    }

    function addLanguage(inputName) {
        // get elements
        let input = document.getElementById("" + inputName);
        let select = document.getElementById("select-" + inputName + "_level");
        let button = document.getElementById("button-" + inputName + "_add");

        button.addEventListener("click", ($event) => {
            $event.preventDefault();
            // create <small> Level </small>
            if ( $('#' + inputName).parsley().isValid() && $('#select-' + inputName + "_level").parsley().isValid() && input.value !== "") {

                let smallTag = document.createElement("small");
                smallTag.textContent = " ( " + select.value + " ) ";

                // create <div> ... </div>
                let divTag = document.createElement("div");
                divTag.classList.add("cv__info" ); 
                divTag.textContent = input.value;

                // get the element to write inside
                let to = document.getElementById('cv__' + inputName + "s");
                divTag.appendChild(smallTag);
                divTag.appendChild(generateBtnBlock());
                to.appendChild(divTag);
            }
        });
    }

    function addInterest(inputName) {
        // get elements
        let input = document.getElementById("" + inputName);
        let button = document.getElementById("button-" + inputName + "_add");

        button.addEventListener("click", ($event) => {
            $event.preventDefault();
            if ( $('#' + inputName).parsley().isValid() && input.value !== "") {
                // create <div> ... </div>
                let divTag = document.createElement("div");
                divTag.classList.add("cv__info" ); 

                divTag.textContent = input.value;
                divTag.appendChild(generateBtnBlock());

                // get the element to write inside
                let to = document.getElementById('cv__' + inputName + "s");
                to.appendChild(divTag);
            }
        });
    }

    function addExperience(blockID) {
        // get elements
        let roleInput = document.getElementById(blockID + "_role");
        let companyInput = document.getElementById(blockID + "_company");
        let fromInput = document.getElementById(blockID + "_from");
        let toInput = document.getElementById(blockID + "_to");
        let descriptionInput = document.getElementById(blockID + "_description");
        let tagsInput = document.getElementById(blockID + "_tags");
        let button = document.getElementById("button-" + blockID + "_add");

        button.addEventListener("click", ($event) => {
            $event.preventDefault();
            if ( $("#" + blockID + " form").parsley().isValid()) {
                // create <h2> ... </h2>
                let h2Tag = document.createElement("h2");
                h2Tag.textContent = roleInput.value;

                // create <small> ... </small>
                let smallTag = document.createElement("small");
                smallTag.textContent = fromInput.value + " - "  + (toInput.value ===! "" ? toInput.value : "Current");
                h2Tag.appendChild(generateBtnBlock());
                h2Tag.appendChild(smallTag); // <h2> ... <small> ... </small> </h2>

                // create <h3> Company Name</h3>
                let h3Tag = document.createElement("h3");
                h3Tag.textContent = companyInput.value;

                // create <p> ... </p>
                let pTags = document.createElement("p");
                // create <div class="tags"> ... </div>
                let tagsBlock = document.createElement("div");
                pTags.textContent = descriptionInput.value;
                let tags  = tagsInput.value.split(",");
                tagsBlock.classList.add("tags");
                for (let i=0; i<tags.length; i++) {
                    // <span class="label">tag[i]</span>
                    let spanTag = document.createElement("span");
                    spanTag.classList.add("label");
                    if (tags[i]) {
                        spanTag.textContent = tags[i];
                        tagsBlock.appendChild(spanTag);
                    }
                }

                // create <div class="cv__..." > ... </div>
                let divTag = document.createElement("div");
                divTag.classList.add("cv__info", "pd-3");
                divTag.classList.add("cv__" + blockID); 
                divTag.appendChild(h2Tag);
                divTag.appendChild(h3Tag);
                divTag.appendChild(pTags);
                divTag.appendChild(tagsBlock);

                // get the element to write inside
                let to = document.getElementById('cv__' + blockID + "s");
                to.appendChild(divTag);
            } else {
                $("#" + blockID + " form").parsley().validate();
            }
        });
    }

    function addProject(blockID) {
        // get elements
        let nameInput = document.getElementById(blockID + "_name");
        let linkInput = document.getElementById(blockID + "_link");
        let fromInput = document.getElementById(blockID + "_from");
        let toInput = document.getElementById(blockID + "_to");
        let descriptionInput = document.getElementById(blockID + "_description");
        let tagsInput = document.getElementById(blockID + "_tags");
        let button = document.getElementById("button-" + blockID + "_add");

        button.addEventListener("click", ($event) => {
            $event.preventDefault();
            console.log($("#" + blockID + " div"));

            if ( $("#" + blockID + " form").parsley().isValid()) {

                // create <h2> ... </h2>
                let h2Tag = document.createElement("h2");
                h2Tag.textContent = nameInput.value;
                h2Tag.appendChild(generateBtnBlock());

                // create <small> ... </small>
                let smallTag = document.createElement("small");
                smallTag.textContent = fromInput.value + " - " + (toInput.value ===! "" ? toInput.value : "Current");
                h2Tag.appendChild(smallTag); // <h2> ... <small> ... </small> </h2>

                // create <h3> ... </h3>
                let h3Tag = document.createElement("h3");
                h3Tag.textContent = linkInput.value;

                // create <p> ... </p>
                let pTags = document.createElement("p");
                pTags.textContent = descriptionInput.value;

                // create <div class="tags"> ... </div>
                let tagsBlock = document.createElement("div");
                tagsBlock.classList.add("tags");
                let tags = tagsInput.value.split(",");
                for (let i = 0; i < tags.length; i++) {
                    // <span class="label">tag[i]</span>
                    let spanTag = document.createElement("span");
                    spanTag.classList.add("label");
                    if (tags[i]) {
                        spanTag.textContent = tags[i];
                        tagsBlock.appendChild(spanTag);
                    }
                }

                // create <div class="cv__..." > ... </div>
                let divTag = document.createElement("div");
                divTag.classList.add("cv__info", "pd-3"); 
                divTag.classList.add("cv__" + blockID);
                divTag.appendChild(h2Tag);
                divTag.appendChild(h3Tag);
                divTag.appendChild(pTags);
                divTag.appendChild(tagsBlock);

                // get the element to write inside
                let to = document.getElementById('cv__' + blockID + "s");
                to.appendChild(divTag);
            } else {
                $("#" + blockID + " form").parsley().validate();
            }
        });
    }

    function addEducation(blockID) {
        // get elements
        let degreeInput = document.getElementById(blockID + "_degree");
        let schoolInput = document.getElementById(blockID + "_school");
        let fromInput = document.getElementById(blockID + "_from");
        let toInput = document.getElementById(blockID + "_to");
        let descriptionInput = document.getElementById(blockID + "_description");
        let button = document.getElementById("button-" + blockID + "_add");

        button.addEventListener("click", ($event) => {
            $event.preventDefault();
            if ( $("#" + blockID + " form").parsley().isValid()) {
                // create <h2> ... </h2>
                let h2Tag = document.createElement("h2");
                h2Tag.textContent = degreeInput.value;
                h2Tag.appendChild(generateBtnBlock());

                // create <small> ... </small>
                let smallTag = document.createElement("small");

                smallTag.textContent = fromInput.value + " - "  + (toInput.value ===! "" ? toInput.value : "Current");
                h2Tag.appendChild(smallTag); // <h2> ... <small> ... </small> </h2>

                // create <h3> ... </h3>
                let h3Tag = document.createElement("h3");
                h3Tag.textContent = schoolInput.value;

                // create <p> ... </p>
                let pTags = document.createElement("p");
                pTags.textContent = descriptionInput.value;

                // create <div class="cv__..." > ... </div>
                let divTag = document.createElement("div");
                divTag.classList.add("cv__" + blockID);
                divTag.classList.add("cv__info", "pd-3");
                divTag.classList.add("pd-3");
                divTag.appendChild(h2Tag);
                divTag.appendChild(h3Tag);
                divTag.appendChild(pTags);

                // get the element to write inside
                let to = document.getElementById('cv__' + blockID + "s");
                to.appendChild(divTag);
            } else {
                $("#" + blockID + " form").parsley().validate();
            }
        });
    }

    function displayTheRequire(cssClassName) {
        let inputs = document.querySelectorAll("[required]");
        for (let i=0 ; i<inputs.length; i++) {
            let name = document.querySelector('label[for=' + inputs[i].id + ']');
            if ( name ) {
                let spanTag = document.createElement("span");
                spanTag.textContent = " * ";
                spanTag.classList.add(cssClassName);
                name.appendChild(spanTag);
            }
        }
    }

// events ----------------------------------
    addInfo("name");
    addInfo("job");
    addInfo("phone");
    addInfo("email");
    addInfo("resume");
    addWebSite("website");
    addSocialMedia("social-media");
    addSkill("skill");
    addLanguage("language");
    addInterest("interest");
    addExperience("experience");
    addProject("project");
    addEducation("education");
    displayTheRequire("text-danger");
});



 
$(function() { 
  $("form[name='registration']").validate({
     rules: {
        name: "required",
        email: "required",
        phone: "required",
      email: {
        required: true,
         email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
     messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
     submitHandler: function(form) {
      form.submit();
    }
  });
});




$('#parsley-div').find('button#submit').click(function() {
    $("#parsley-div").wrap("<form id='parsley-form'></form>");
    $('#parsley-form').parsley().validate();
    $("#parsley-div").unwrap();
    document.getElementById('form').submit()
});


var summaryBtn = document.getElementsByClassName("fillSummary");

for (var i=0; i < summaryBtn.length; i++) {
    summaryBtn[i].onclick = function(){ 
        document.getElementById('resume').value = this.parentNode.parentNode.querySelector('p')
            .innerText;
        document.getElementById('resume').focus();
    }
}; 













function addAnotherSkill(parent, app, item, itemParent) {
    itm = $(item + ':last-child').clone().html($(parent + ':last-child').val()).appendTo(itemParent); 
    $(parent + ':last-child').clone().val('').appendTo(app); 
};


function generateDelBtn() { 
    let i = document.createElement("i");
    let button = document.createElement("button");
    button.append(i); 
    button.classList.add("icon");
    i.classList.add("fas");
    i.classList.add("fa-trash"); 
    return button;
}

function generateEditBtn() {

    let i = document.createElement("i");
    let button = document.createElement("button");
    button.append(i);

    button.classList.add("icon");
    i.classList.add("fas");
    i.classList.add("fa-paint-brush");

    return button
}

function generateBtnBlock() {
    let divTag = document.createElement("div");
    divTag.append(generateEditBtn());
    divTag.append(generateDelBtn());

    divTag.classList.add("btn-block");

    return divTag
}


let skill = document.getElementById("button-skill_add");
let input = document.getElementById("skill");


button = document.getElementById('button-experience_add');
const addTags = async (id) => {


    var attr = id.getAttribute('data-element-id');

    var lol = document.querySelectorAll(`.cloneable[data-element-id="${attr}"]`);
    tagsInput = $(lol).find('.taggs').val()

    let element = Array.from(
        document.querySelectorAll(
            `.cv__experienceMain .mainExperience[data-element-id="${attr}"]`)
    ).pop();


    let tagsBlock = document.createElement("div");
    let tags = tagsInput.split(",");
    tagsBlock.classList.add("tags");
    for (let i = 0; i < tags.length; i++) {
        let spanTag = document.createElement("span");
        spanTag.classList.add("label");
        if (tags[i]) {
            spanTag.textContent = tags[i];
            tagsBlock.appendChild(spanTag);
        }
    }

    let divTag = element;
    divTag.appendChild(tagsBlock);
};
const addProjectTags = (id) => {


    var attr = id.getAttribute('data-element-id');

    var lol = document.querySelectorAll(`.projectParent .cloneable[data-element-id="${attr}"]`);
    tagsInput = $(lol).find('.taggs').val()
    console.log(tagsInput);

    let element = Array.from(
        document.querySelectorAll(
            `.cv__projectMain .mainExperience[data-element-id="${attr}"]`)
    ).pop();


    let tagsBlock = document.createElement("div");
    let tags = tagsInput.split(",");
    tagsBlock.classList.add("tags");
    for (let i = 0; i < tags.length; i++) {
        let spanTag = document.createElement("span");
        spanTag.classList.add("label");
        if (tags[i]) {
            spanTag.textContent = tags[i];
            tagsBlock.appendChild(spanTag);
        }
    }

    let divTag = element;
    divTag.appendChild(tagsBlock);
};





function updateDataByParent(val, parent, id) {
    var attr = parent.getAttribute('data-element-id');

    let doc = Array.from(
        document.querySelectorAll(
            `.cv__experienceMain .mainExperience[data-element-id="${attr}"]`)
    ).pop(); 
    try {
        doc.querySelector(id).querySelector('span').innerHTML = val;
        console.log("try");
    } catch (err) {
        doc.querySelector(id).innerHTML = val;
        console.log("catch");
    }
}

function updateProjectDataByParent(val, parent, id) {
    var attr = parent.getAttribute('data-element-id');

    let doc = Array.from(
        document.querySelectorAll(
            `.cv__projectMain .mainExperience[data-element-id="${attr}"]`)
    ).pop();

    //  console.log(doc.querySelector(id));
    //  console.log(val, parent, id);
    try {
        doc.querySelector(id).querySelector('span').innerHTML = val;
        console.log("try");
    } catch (err) {
        doc.querySelector(id).innerHTML = val;
        console.log("catch");
    }
}

function addSec(val, sec_id) { 
    var cloneVal = $(val).find('.mainSection .cloneable:last-child').clone();
    var cloneSec = $(sec_id).find('.mainExperience:last-child').clone();


    var attrVal = parseInt($(".mainSection .cloneable:last-child").attr('data-element-id')) + 1;
    var attrSec = parseInt($(".mainExperience:last-child").attr('data-element-id')) + 1;


    //  console.log(attrVal);
    cloneVal.attr('data-element-id', attrVal).appendTo('.mainSection')
    cloneSec.attr('data-element-id', attrSec).appendTo('.cv__experienceMain') 
}


function updateData(val, id) {
    try {
        document.querySelector(id).querySelector('span').innerHTML = val;
        console.log("try");
    } catch (err) {
        document.querySelector(id).innerHTML = val;
        console.log("catch");
    }
}function addAnotherSkill(parent, app, item, itemParent) {
    itm = $(item + ':last-child').clone().html($(parent + ':last-child').val()).appendTo(itemParent); 
    $(parent + ':last-child').clone().val('').appendTo(app); 
};


function generateDelBtn() { 
    let i = document.createElement("i");
    let button = document.createElement("button");
    button.append(i); 
    button.classList.add("icon");
    i.classList.add("fas");
    i.classList.add("fa-trash"); 
    return button;
}

function generateEditBtn() {

    let i = document.createElement("i");
    let button = document.createElement("button");
    button.append(i);

    button.classList.add("icon");
    i.classList.add("fas");
    i.classList.add("fa-paint-brush");

    return button
}

function generateBtnBlock() {
    let divTag = document.createElement("div");
    divTag.append(generateEditBtn());
    divTag.append(generateDelBtn());

    divTag.classList.add("btn-block");

    return divTag
}


let skill = document.getElementById("button-skill_add");
let input = document.getElementById("skill");


button = document.getElementById('button-experience_add');
const addTags = async (id) => {


    var attr = id.getAttribute('data-element-id');

    var lol = document.querySelectorAll(`.cloneable[data-element-id="${attr}"]`);
    tagsInput = $(lol).find('.taggs').val()

    let element = Array.from(
        document.querySelectorAll(
            `.cv__experienceMain .mainExperience[data-element-id="${attr}"]`)
    ).pop();


    let tagsBlock = document.createElement("div");
    let tags = tagsInput.split(",");
    tagsBlock.classList.add("tags");
    for (let i = 0; i < tags.length; i++) {
        let spanTag = document.createElement("span");
        spanTag.classList.add("label");
        if (tags[i]) {
            spanTag.textContent = tags[i];
            tagsBlock.appendChild(spanTag);
        }
    }

    let divTag = element;
    divTag.appendChild(tagsBlock);
};
const addProjectTags = (id) => {


    var attr = id.getAttribute('data-element-id');

    var lol = document.querySelectorAll(`.projectParent .cloneable[data-element-id="${attr}"]`);
    tagsInput = $(lol).find('.taggs').val()
    console.log(tagsInput);

    let element = Array.from(
        document.querySelectorAll(
            `.cv__projectMain .mainExperience[data-element-id="${attr}"]`)
    ).pop();


    let tagsBlock = document.createElement("div");
    let tags = tagsInput.split(",");
    tagsBlock.classList.add("tags");
    for (let i = 0; i < tags.length; i++) {
        let spanTag = document.createElement("span");
        spanTag.classList.add("label");
        if (tags[i]) {
            spanTag.textContent = tags[i];
            tagsBlock.appendChild(spanTag);
        }
    }

    let divTag = element;
    divTag.appendChild(tagsBlock);
};





function updateDataByParent(val, parent, id) {
    var attr = parent.getAttribute('data-element-id');

    let doc = Array.from(
        document.querySelectorAll(
            `.cv__experienceMain .mainExperience[data-element-id="${attr}"]`)
    ).pop(); 
    try {
        doc.querySelector(id).querySelector('span').innerHTML = val;
        console.log("try");
    } catch (err) {
        doc.querySelector(id).innerHTML = val;
        console.log("catch");
    }
}

function updateProjectDataByParent(val, parent, id) {
    var attr = parent.getAttribute('data-element-id');

    let doc = Array.from(
        document.querySelectorAll(
            `.cv__projectMain .mainExperience[data-element-id="${attr}"]`)
    ).pop();

    //  console.log(doc.querySelector(id));
    //  console.log(val, parent, id);
    try {
        doc.querySelector(id).querySelector('span').innerHTML = val;
        console.log("try");
    } catch (err) {
        doc.querySelector(id).innerHTML = val;
        console.log("catch");
    }
}

function addSec(val, sec_id) { 
    var cloneVal = $(val).find('.mainSection .cloneable:last-child').clone();
    var cloneSec = $(sec_id).find('.mainExperience:last-child').clone();


    var attrVal = parseInt($(".mainSection .cloneable:last-child").attr('data-element-id')) + 1;
    var attrSec = parseInt($(".mainExperience:last-child").attr('data-element-id')) + 1;


    //  console.log(attrVal);
    cloneVal.attr('data-element-id', attrVal).appendTo('.mainSection')
    cloneSec.attr('data-element-id', attrSec).appendTo('.cv__experienceMain') 
}


function updateData(val, id) {
    try {
        document.querySelector(id).querySelector('span').innerHTML = val;
        console.log("try");
    } catch (err) {
        document.querySelector(id).innerHTML = val;
        console.log("catch");
    }
}