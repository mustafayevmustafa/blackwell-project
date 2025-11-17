<section class="formwrapppermain" id="formSection" style="display: none;">
    <div class="form-wrapper">
        <h1 class="form-wrapper-title">Get in touch with an expert. </h1>
        <form class="contact-form" id="expertContactForm">
            @csrf
            <div class="form-row">
                <div class="form-column">
                    <label for="firstName" class="form-label">First Name:</label>
                    <input type="text" id="firstName" name="first_name" placeholder="First Name" class="form-input" required>
                </div>
                <div class="form-column">
                    <label for="lastName" class="form-label">Last Name:</label>
                    <input type="text" id="lastName" name="last_name" placeholder="Last Name" class="form-input" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-column">
                    <label for="companyEmail" class="form-label">Company Email:</label>
                    <input type="email" id="companyEmail" name="email" placeholder="Company Email" class="form-input" required>
                </div>
                <div class="form-column">
                    <label for="companyName" class="form-label">Company Name:</label>
                    <input type="text" id="companyName" name="company_name" placeholder="Company Name" class="form-input" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-column">
                    <label for="phoneNumber" class="form-label">Phone Number:</label>
                    <input type="text" id="phoneNumber" name="phone" placeholder="Phone Number" class="form-input" required>
                </div>
                <div class="form-column">
                    <label for="country" class="form-label">Country/Territory:</label>

                    <select id="country" required name="country"
                            aria-labelledby="LblCountry_ge_og__c InstructCountry_ge_og__c"
                            class="mktoField mktoHasWidth mktoRequired mktoInvalid" aria-required="true">
                        <option value="">Select...</option>
                        <option value="UNITED STATES">UNITED STATES</option>
                        <option value="AFGHANISTAN">AFGHANISTAN</option>
                        <option value="ALAND ISLANDS">ALAND ISLANDS</option>
                        <option value="ALBANIA">ALBANIA</option>
                        <option value="ALGERIA">ALGERIA</option>
                        <option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                        <option value="ANDORRA">ANDORRA</option>
                        <option value="ANGOLA">ANGOLA</option>
                        <option value="ANGUILLA">ANGUILLA</option>
                        <option value="ANTARCTICA">ANTARCTICA</option>
                        <option value="ANTIGUA AND BARBUDA">ANTIGUA AND BARBUDA</option>
                        <option value="ARGENTINA">ARGENTINA</option>
                        <option value="ARMENIA">ARMENIA</option>
                        <option value="ARUBA">ARUBA</option>
                        <option value="AUSTRALIA">AUSTRALIA</option>
                        <option value="AUSTRIA">AUSTRIA</option>
                        <option value="AZERBAIJAN">AZERBAIJAN</option>
                        <option value="BAHAMAS">BAHAMAS</option>
                        <option value="BAHRAIN">BAHRAIN</option>
                        <option value="BANGLADESH">BANGLADESH</option>
                        <option value="BARBADOS">BARBADOS</option>
                        <option value="BELARUS">BELARUS</option>
                        <option value="BELGIUM">BELGIUM</option>
                        <option value="BELIZE">BELIZE</option>
                        <option value="BENIN">BENIN</option>
                        <option value="BERMUDA">BERMUDA</option>
                        <option value="BHUTAN">BHUTAN</option>
                        <option value="BOLIVIA, PLURINATIONAL STATE OF">BOLIVIA, PLURINATIONAL STATE OF</option>
                        <!-- Diğer ülkeleri buraya ekleyebilirsiniz -->
                    </select>
                </div>

            </div>

            <div class="form-row1">
                <div class="form-column1">
                    <label for="issue" class="form-label">Details About Your Request:</label>
                    <textarea id="issue" name="message" rows="1" class="form-textarea" required></textarea>
                </div>

            </div>
            <div class="mktoRadioList" aria-invalid="false">
                <!-- Yes Option -->
                <label for="opt_in_yes" id="label_opt_in_yes">
                    <input type="radio" name="Opt_In_ge_og__c" id="opt_in_yes" value="yes" aria-required="true"
                           aria-labelledby="label_opt_in_yes" checked>

                    Yes, please keep me informed of topics and innovations transforming my industry,
                    including special event invitations, surveys, newsletters, product and service
                    incentives, and new product announcements from Baker Hughes Company and its affiliated
                    companies (together “Baker Hughes”).
                </label>
                <!-- No Option -->
                <label for="opt_in_no" id="label_opt_in_no">

                    <input type="radio" name="Opt_In_ge_og__c" id="opt_in_no" value="no" aria-required="true"
                           aria-labelledby="label_opt_in_no">
                    No, please exclude me from marketing communications from Baker Hughes.
                </label>
            </div>

            <div class="field-wrap">
                <div class="info-text">
                    Detailed information about how the personal data you have supplied is collected,
                    stored, and processed can be found in the
                    <a href="https://www.bakerhughes.com/privacy" target="_blank">Baker Hughes Privacy Notice</a>.
                    If you have opted in to receive marketing communications, you can withdraw your consent
                    at any time by visiting the
                    <a href="https://site.bakerhughes.com/Preference-Center-Login-LP.html" target="_blank">
                        Baker Hughes Communications Preference Center
                    </a>, or by using the unsubscribe link found at the bottom of all emails from Baker Hughes.
                </div>




                <button type="submit" class="submit-button">Submit Request</button>
        </form>
        <button type="button" class="close-form" id="closeFormBtn" onclick="closeContact()"><i
                class="fa-solid fa-xmark"></i></button>


    </div>
</section>

<script>
document.getElementById('expertContactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const firstName = formData.get('first_name');
    const lastName = formData.get('last_name');

    // Combine first_name and last_name into name field
    formData.set('name', firstName + ' ' + lastName);
    formData.delete('first_name');
    formData.delete('last_name');

    fetch('{{ route("expert-contact.store") }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success(data.message);
            this.reset();
            closeContact();
        } else {
            toastr.error('Something went wrong. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        toastr.error('Something went wrong. Please try again.');
    });
});
</script>
