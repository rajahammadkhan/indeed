

$(document).ready(function () {
    setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 50);
    // Custom method to validate username
    // $.validator.addMethod("usernameRegex", function (value, element) {
    //     return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
    // }, "Username must contain only letters, numbers");
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    }, "Select an option");

    // configure your validation  
    $(".next").click(function () {
        var form = $("#myform");
        form.validate({
            errorElement: 'span',
            errorClass: 'help-block',
            highlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').addClass("has-error");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass("has-error");
            },
            rules: {
                SelectName: {
                    valueNotEquals: "null"
                },
                job_title: {
                    required: true,
                },
                // password: {
                //     required: true,
                // },
                // conf_password: {
                //     required: true,
                //     equalTo: '#password',
                // },
                job_loc: {
                    required: true,
                },
                pofhire: {
                    required: true,
                },
                // uptoLb: {
                //     required: true,
                // },
                // minAmt: {
                //     required: true,
                // },
                company: {
                    required: true,
                },
                url: {
                    required: true,
                },
                recName: {
                    required: true,
                },
                recEmail: {
                    required: true,
                },
                name: {
                    required: true,
                    minlength: 3,
                },
                datefield: {
                    required: true,
                    minlength: 3,
                },

                email: {
                    required: true,
                    minlength: 3,
                },
            },
            messages: {
                job_title: {
                    required: ` <svg xmlns="http://www.w3.org/2000/svg" class="errorIco" focusable="false" role="img" fill="currentColor" viewBox="0 0 18 18"  class="css-1bh9esk eac13zx0"><title>error</title><path fill-rule="evenodd" d="M9 2a7 7 0 100 14A7 7 0 009 2zm.65 10.75a.25.25 0 01-.25.25h-.8a.25.25 0 01-.25-.25v-1.5A.25.25 0 018.6 11h.8a.25.25 0 01.25.25v1.5zm0-4A.25.25 0 019.4 9h-.8a.25.25 0 01-.25-.25v-3.5A.25.25 0 018.6 5h.8a.25.25 0 01.25.25v3.5z" clip-rule="evenodd"></path></svg> Add a job title.`,
                },
                recName: {
                    required: ` <svg xmlns="http://www.w3.org/2000/svg" class="errorIco" focusable="false" role="img" fill="currentColor" viewBox="0 0 18 18"  class="css-1bh9esk eac13zx0"><title>error</title><path fill-rule="evenodd" d="M9 2a7 7 0 100 14A7 7 0 009 2zm.65 10.75a.25.25 0 01-.25.25h-.8a.25.25 0 01-.25-.25v-1.5A.25.25 0 018.6 11h.8a.25.25 0 01.25.25v1.5zm0-4A.25.25 0 019.4 9h-.8a.25.25 0 01-.25-.25v-3.5A.25.25 0 018.6 5h.8a.25.25 0 01.25.25v3.5z" clip-rule="evenodd"></path></svg> Recruiter Contact Name is Required.`,
                },
                recEmail: {
                    required: ` <svg xmlns="http://www.w3.org/2000/svg" class="errorIco" focusable="false" role="img" fill="currentColor" viewBox="0 0 18 18"  class="css-1bh9esk eac13zx0"><title>error</title><path fill-rule="evenodd" d="M9 2a7 7 0 100 14A7 7 0 009 2zm.65 10.75a.25.25 0 01-.25.25h-.8a.25.25 0 01-.25-.25v-1.5A.25.25 0 018.6 11h.8a.25.25 0 01.25.25v1.5zm0-4A.25.25 0 019.4 9h-.8a.25.25 0 01-.25-.25v-3.5A.25.25 0 018.6 5h.8a.25.25 0 01.25.25v3.5z" clip-rule="evenodd"></path></svg>  Recruiter Contact Email is Required.`,
                },
                // minAmt: {
                //     required: ` <svg xmlns="http://www.w3.org/2000/svg" class="errorIco" focusable="false" role="img" fill="currentColor" viewBox="0 0 18 18"  class="css-1bh9esk eac13zx0"><title>error</title><path fill-rule="evenodd" d="M9 2a7 7 0 100 14A7 7 0 009 2zm.65 10.75a.25.25 0 01-.25.25h-.8a.25.25 0 01-.25-.25v-1.5A.25.25 0 018.6 11h.8a.25.25 0 01.25.25v1.5zm0-4A.25.25 0 019.4 9h-.8a.25.25 0 01-.25-.25v-3.5A.25.25 0 018.6 5h.8a.25.25 0 01.25.25v3.5z" clip-rule="evenodd"></path></svg> Enter Maximum Amount.`,
                // },
                // uptoLb: {
                //     required: ` <svg xmlns="http://www.w3.org/2000/svg" class="errorIco" focusable="false" role="img" fill="currentColor" viewBox="0 0 18 18"  class="css-1bh9esk eac13zx0"><title>error</title><path fill-rule="evenodd" d="M9 2a7 7 0 100 14A7 7 0 009 2zm.65 10.75a.25.25 0 01-.25.25h-.8a.25.25 0 01-.25-.25v-1.5A.25.25 0 018.6 11h.8a.25.25 0 01.25.25v1.5zm0-4A.25.25 0 019.4 9h-.8a.25.25 0 01-.25-.25v-3.5A.25.25 0 018.6 5h.8a.25.25 0 01.25.25v3.5z" clip-rule="evenodd"></path></svg> Enter Minimum Amount.`,
                // },
                // password: {
                //     required: "Password required",
                // },
                // conf_password: {
                //     required: "Password required",
                //     equalTo: "Password don't match",
                // },
                job_loc: {
                    required: ` <svg xmlns="http://www.w3.org/2000/svg" class="errorIco" focusable="false" role="img" fill="currentColor" viewBox="0 0 18 18"  class="css-1bh9esk eac13zx0"><title>error</title><path fill-rule="evenodd" d="M9 2a7 7 0 100 14A7 7 0 009 2zm.65 10.75a.25.25 0 01-.25.25h-.8a.25.25 0 01-.25-.25v-1.5A.25.25 0 018.6 11h.8a.25.25 0 01.25.25v1.5zm0-4A.25.25 0 019.4 9h-.8a.25.25 0 01-.25-.25v-3.5A.25.25 0 018.6 5h.8a.25.25 0 01.25.25v3.5z" clip-rule="evenodd"></path></svg> Add a location.                    `,
                },
                datefield: {
                    required: ` <svg xmlns="http://www.w3.org/2000/svg" class="errorIco" focusable="false" role="img" fill="currentColor" viewBox="0 0 18 18"  class="css-1bh9esk eac13zx0"><title>error</title><path fill-rule="evenodd" d="M9 2a7 7 0 100 14A7 7 0 009 2zm.65 10.75a.25.25 0 01-.25.25h-.8a.25.25 0 01-.25-.25v-1.5A.25.25 0 018.6 11h.8a.25.25 0 01.25.25v1.5zm0-4A.25.25 0 019.4 9h-.8a.25.25 0 01-.25-.25v-3.5A.25.25 0 018.6 5h.8a.25.25 0 01.25.25v3.5z" clip-rule="evenodd"></path></svg> Select Starting Date.                    `,
                },
                pofhire: {
                    required: ` <svg xmlns="http://www.w3.org/2000/svg" class="errorIco" focusable="false" role="img" fill="currentColor" viewBox="0 0 18 18"  class="css-1bh9esk eac13zx0"><title>error</title><path fill-rule="evenodd" d="M9 2a7 7 0 100 14A7 7 0 009 2zm.65 10.75a.25.25 0 01-.25.25h-.8a.25.25 0 01-.25-.25v-1.5A.25.25 0 018.6 11h.8a.25.25 0 01.25.25v1.5zm0-4A.25.25 0 019.4 9h-.8a.25.25 0 01-.25-.25v-3.5A.25.25 0 018.6 5h.8a.25.25 0 01.25.25v3.5z" clip-rule="evenodd"></path></svg> Make an selection.`,
                },
                name: {
                    required: "Name required",
                },
                email: {
                    required: "Email required",
                },
            }
        });
        if (form.valid() === true) {
            if ($('#account_information').is(":visible")) {
                current_fs = $('#account_information');
                next_fs = $('#company_information');
            }
            else if ($('#company_information').is(":visible")) {
                current_fs = $('#company_information');
                next_fs = $('#personal_information');
            }
            else if ($('#personal_information').is(":visible")) {
                current_fs = $('#personal_information');
                next_fs = $('#textEditorDesc');
            }

            next_fs.show();
            current_fs.hide();
        }
    });

    $('.previous').click(function () {
        if ($('#company_information').is(":visible")) {
            current_fs = $('#company_information');
            next_fs = $('#account_information');
        } else if ($('#personal_information').is(":visible")) {
            current_fs = $('#personal_information');
            next_fs = $('#company_information');
        } else if ($('#textEditorDesc').is(":visible")) {
            current_fs = $('#textEditorDesc');
            next_fs = $('#personal_information');
        }
        next_fs.show();
        current_fs.hide();
    });

    //@naresh action dynamic childs
    var next_exp = 0;
    $("#add-more1").click(function (e) {
        e.preventDefault();
        var addto = "#fielda" + next_exp;
        var addRemove = "#fielda" + (next_exp);
        next_exp = next_exp + 1;
        var newInp = `<div id="fielda${next_exp}" name="field1${next_exp}">  <div class="col-12 my-3" id="">
        <p class="mb-2 p-0">Answers:</p>
        <input type="text" class="form-control w-100 mb-2" name="optional_question"
            placeholder="Type your question here...">
        <input type="text" class="form-control w-100 mb-2" name="optional_question"
            placeholder="Type your question here...">
    </div></div>`;
        var newInput = $(newInp);

        var removeBtn = '<button id="remove' + (next_exp - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field"><br>';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#fielda" + next_exp).attr('data-source', $(addto).attr('data-source'));
        $("#count").val(next_exp);

        $('.remove-me').click(function (e) {
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length - 1);
            var fieldID = "#fielda" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
        });
    });


    //@naresh action dynamic childs
    var nextedu = 0;
    $("#add-more").click(function (e) {
        e.preventDefault();
        var addto = "#field" + nextedu;
        var addRemove = "#field" + (nextedu);
        nextedu = nextedu + 1;
        var newIn = ' <div id="field' + nextedu + '" name="field' + nextedu + '"><div class="form-group"><label class="col-md-3">Education level</label><div class="col-md-7"><select class="form-control"  name="edu_level[]" ><option value="1">High school or equivalent</option><option value="2">Diploma</option><option value="3">Higher National Diploma</option><option value="4">Bachelos</option><option value="5">Masters</option><option value="6">Doctorate</option></select></div></div><br><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Field of Study</label><div class="col-md-7"><input type="text"  name="field_stu[]" id="field_stu" class="form-control" placeholder="e.g. Computer Science, Intellectual Property,Psychology." required> </div></div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">University</label><div class="col-md-7"><input type="text"  name="university[]" id="university" class="form-control" placeholder="" required></div></div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Time period</label><div class="col-md-8"><div class="col-md-3"><select class="form-control"  name="edu_from[]" ><option value="1995">    1995    </option><option value="1996">	1996	</option><option value="1997">	1997	</option><option value="1998">	1998	</option><option value="1999">	1999	</option><option value="2000">	2000	</option><option value="2001">	2001	</option><option value="2002">	2002	</option><option value="2003">	2003	</option><option value="2004">	2004	</option><option value="2005">	2005	</option><option value="2006">	2006	</option><option value="2007">	2007	</option><option value="2008">	2008	</option><option value="2009">	2009	</option><option value="2010">	2010	</option><option value="2011">	2011	</option><option value="2012">	2012	</option><option value="2013">	2013	</option><option value="2014">	2014	</option><option value="2015">	2015	</option><option value="2016">	2016	</option></select></div><div class="col-md-1"><label>To</label></div><div class="col-md-3"><select class="form-control"  name="edu_to[]" ><option value="1980">	1980	</option><option value="2000">	2000	</option><option value="2001">	2001	</option><option value="2002">	2002	</option><option value="2003">	2003	</option><option value="2004">	2004	</option><option value="2005">	2005	</option><option value="2006">	2006	</option><option value="2007">	2007	</option><option value="2008">	2008	</option><option value="2009">	2009	</option><option value="2010">	2010	</option><option value="2011">	2011	</option><option value="2012">	2012	</option><option value="2013">	2013	</option><option value="2014">	2014	</option><option value="2015">	2015	</option><option value="2016">	2016	</option><option value="2017">	2017	</option><option value="2018">	2018	</option><option value="2019">	2019	</option><option value="2020">	2020	</option></select></div></div></div> <br><hr></div>';
        var newInput = $(newIn);

        var removeBtn = '<button id="remove' + (nextedu - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + nextedu).attr('data-source', $(addto).attr('data-source'));
        $("#count").val(nextedu);

        $('.remove-me').click(function (e) {
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length - 1);
            var fieldID = "#field" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
        });
    });


});

$('input[type=checkbox]').on('change', function (e) {
    if (this.checked) {
        $(this).parent(".checkBoxesForm").addClass("checkedBoxesForm")
        $(this).parent(".checkBoxesForm").find(".check").attr("aria-hidden", "false");
        $(this).parent(".checkBoxesForm").find(".uncheck").attr("aria-hidden", "true");
    }
    else {
        $(this).parent(".checkBoxesForm").removeClass("checkedBoxesForm")
        $(this).parent(".checkBoxesForm").find(".check").attr("aria-hidden", "true");
        $(this).parent(".checkBoxesForm").find(".uncheck").attr("aria-hidden", "false");
    }
});
$('.selectPkr').on('change', function (e) {
    this.value === "STARTING_AT" && ($(".strat").css("display", "none"),
        $(".upto").css("display", "block"));
    this.value === "EXACT_RATE" && ($(".strat").css("display", "none"),
        $(".upto").css("display", "block"));
    this.value === "UP_TO" && ($(".strat").css("display", "block"),
        $(".upto").css("display", "none"),
        $(".to").css("display", "none"));
    this.value === "RANGE" && ($(".strat").css("display", "block"),
        $(".upto").css("display", "block"),
        $(".to").css("display", "block"));
});




$('#summernote').summernote({
    placeholder: 'Type Job Description Here...',
    tabsize: 2,
    height: 100,
    toolbar: [
        ['font', ['bold', 'italic']],
        ['para', ['ul']],
    ]
});
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();
if (dd < 10) { dd = '0' + dd } if (mm < 10) { mm = '0' + mm } today = yyyy + '-' + mm + '-' + dd;
document.getElementById("datefield").setAttribute("min", today);


$("#optQus").click(function () {
    $(this).addClass("showOptQss");
});