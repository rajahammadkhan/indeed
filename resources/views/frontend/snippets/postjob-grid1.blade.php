<fieldset id="personal_information" class="">
    <div class="form-group ms-0  accInfoStl thrAccInfo w-100 bg-white text-dark p-5 my-4">
        <legend>Add compensation
        </legend>
    </div>
    <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
        <label for="job_title" class="col-12 control-label p-0">What is the pay? </label>
        <div class="mainPay">
            <!-- <div class="showPayMain"><label for="showPay" class="showPayLb">Show pay by</label>
                <div class=" showPaySelect">
                    <select aria-invalid="false" id="showPay" name="showPay"
                        class="showPaySelectMain selectPkr">
                        <option label="Range" value="RANGE">Range</option>
                        <option label="Starting amount" value="STARTING_AT">Starting amount</option>
                        <option label="Maximum amount" value="UP_TO">Maximum amount</option>
                        <option label="Exact amount" value="EXACT_RATE">Exact amount</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                        fill="currentColor" viewBox="0 0 24 24" class=" css-25kbax eac13zx0">
                        <path
                            d="M18.002 9.888c.2-.2.204-.521.008-.716l-.707-.708a.506.506 0 00-.716.01L12 13.06 7.413 8.474a.507.507 0 00-.716-.01l-.708.707a.507.507 0 00.01.717l5.647 5.648c.1.1.234.148.367.143a.491.491 0 00.34-.144h.001l.008-.008 5.64-5.64z">
                        </path>
                    </svg>
                </div>
            </div> -->


            <div class="uptoMain upto"><label for="uptoLb" class="uptoMainLb"><span
                            class="minSal minimumSalary">Minimum</span></label><span
                        class=" css-1dplimc e6fjgti1"><span class="css-tm7u9k e6fjgti0"><span
                                aria-hidden="false" id="JobSalaryInputIcon1217"
                                class="css-1kq7m22 e1wnkr790">PKR</span></span><input id="uptoLb"
                                                                                      name="minimum_pay" autocomplete="off" class="css-1u34eqe e1jgz0i3" value=""
                                                                                      aria-describedby="job-salary-input-error"></span></div>
            <span class="css-1j80wc6 e1wnkr790 strat to">to</span>
            <div class="uptoMain strat"><label for="minAmt" class="uptoMainLb"><span
                            id="JobSalaryInputLabel1220"
                            class="minSal minimumSalary">Maximum</span></label><span
                        class=" css-1dplimc e6fjgti1"><span class="css-tm7u9k e6fjgti0"><span
                                aria-hidden="false" id="JobSalaryInputIcon1219"
                                class="css-1kq7m22 e1wnkr790">PKR</span></span><input aria-invalid="true"
                                                                                      id="minAmt" name="maximum_pay"
                                                                                      aria-labelledby="JobSalaryInputLabel1220 JobSalaryInputIcon1219"
                                                                                      aria-required="false" data-testid="job-salary-maximum" autocomplete="off"
                                                                                      class="css-mrb7ky e1jgz0i3" aria-describedby="job-salary-input-error"></span>
            </div>
            <div class="css-tl71gl e1ttgm5y0"><label for="local.temp-salary.period"
                                                     class="showPayLb">Rate</label>
                <div class=" showPaySelect"><select aria-invalid="false" id="local.temp-salary.period"
                                                    name="pay_rate" class="showPaySelectMain">
                        <option label="per hour" value="hour">per hour</option>
                        <option label="per day" value="day">per day</option>
                        <option label="per week" value="week">per week</option>
                        <option label="per month" value="week">per c</option>
                        <option label="per year" value="year">per year</option>
                    </select><svg xmlns="http://www.w3.org/2000/svg" focusable="false" role="img"
                                  fill="currentColor" viewBox="0 0 24 24" class=" css-25kbax eac13zx0">
                        <path
                                d="M18.002 9.888c.2-.2.204-.521.008-.716l-.707-.708a.506.506 0 00-.716.01L12 13.06 7.413 8.474a.507.507 0 00-.716-.01l-.708.707a.507.507 0 00.01.717l5.647 5.648c.1.1.234.148.367.143a.491.491 0 00.34-.144h.001l.008-.008 5.64-5.64z">
                        </path>
                    </svg></div>
            </div>
        </div>
    </div>

    <div class="form-group ms-0 accInfoStl w-100 bg-white text-dark p-5 my-4">
        <label for="job_loc" class="col-12 control-label">Start Date
            <span class="text-danger"> *</span></label>
        <div class="col-12 p-0">
            <input type="date" min="" class="form-control w-100 mb-2" id="datefield" name="start_date"
                   placeholder="">
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
        <a class="btn btn-primary next sandc">Save and continue</a>
    </div>
</fieldset>
