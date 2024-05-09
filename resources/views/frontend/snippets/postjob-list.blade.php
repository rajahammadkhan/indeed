<fieldset id="textEditorDesc" class="text-start">
    <div class="form-group ms-0  accInfoStl forAccInfo w-100 bg-white text-dark p-5 my-4">

        <legend>Describe the job

        </legend>

    </div>
    <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
        <label for="rec" class="col-12 control-label">Job description <span class="text-danger">
                                *</span></label>
        <div class="col-12">
            <div id="summernote" name="job_description"></div>
        </div>
    </div>
    <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
        <label for="rec" class="col-12 control-label fs-2">Recruiter Details </label>
        <div class="mainRec">
            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark my-4">
                <label for="recName" class="col-12 control-label">Contact Name <span
                            class="text-danger">
                                        *</span></label>
                <div class="col-12">
                    <input type="text" class="form-control w-100 mb-2" id="recName" name="contact_name"
                           placeholder="">
                </div>
            </div>
            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark my-4">
                <label for="recEmail" class="col-12 control-label">Contact Email <span
                            class="text-danger">
                                        *</span></label>
                <div class="col-12">
                    <input type="text" class="form-control w-100 mb-2" id="recEmail" name="contact_email"
                           placeholder="">
                </div>
            </div>
            <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark my-4">
                <label for="recTelephone" class="col-12 control-label">Contact Telephone </label>
                <div class="col-12">
                    <input type="text" class="form-control w-100 mb-2" id="recTelephone"
                           name="contact_telephone" placeholder="">
                </div>
            </div>
            <!-- <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark my-4">
                <label for="recURL" class="col-12 control-label">Video URL </label>
                <div class="col-12">
                    <input type="text" class="form-control w-100 mb-2" id="recURL" name="recURL"
                        placeholder="">
                </div>
            </div> -->
        </div>
    </div>
    <div class="form-group ms-0 btnz w-100 bg-white d-flex justify-content-between text-dark p-5 my-4">
        <a class="btn btn-primary previous sandc"><svg xmlns="http://www.w3.org/2000/svg"
                                                       focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24"
                                                       class=" css-xbwdtc eac13zx0">
                <path
                        d="M14.112 18.002c.2.2.52.204.716.008l.707-.707a.507.507 0 00-.009-.716L10.94 12l4.587-4.587c.2-.2.205-.521.01-.716l-.708-.708a.507.507 0 00-.716.01l-5.648 5.647c-.1.1-.148.234-.143.367.002.124.05.247.143.34l.001.001a.758.758 0 00.008.008l5.64 5.64z">
                </path>
            </svg> Back</a>
        <input type="submit" value="submit" class="btn btn-success next sandc">
    </div>
</fieldset>
