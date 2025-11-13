<!-- Overlay -->
<div class="quote-dark-overlay" id="quoteDarkOverlay" onclick="closeQuoteForm()"></div>

<!-- Get a Quote Form Section -->
<section class="quote-form-wrapper-main" id="quoteFormSection" style="display: none;">
    <div class="quote-form-wrapper">
        <h1 class="quote-form-title">Request a Quote</h1>
        <form class="quote-form">
            <div class="quote-form-row">
                <div class="quote-form-column">
                    <label for="quoteName" class="quote-label">Name:</label>
                    <input type="text" id="quoteName" placeholder="Your Name" class="quote-input" required>
                </div>
                <div class="quote-form-column">
                    <label for="quoteEmail" class="quote-label">Email:</label>
                    <input type="email" id="quoteEmail" placeholder="Your Email" class="quote-input" required>
                </div>
            </div>

            <div class="quote-form-row">
                <div class="quote-form-column">
                    <label for="quoteCompany" class="quote-label">Company:</label>
                    <input type="text" id="quoteCompany" placeholder="Company Name" class="quote-input">
                </div>
                <div class="quote-form-column">
                    <label for="quotePosition" class="quote-label">Position:</label>
                    <input type="text" id="quotePosition" placeholder="e.g. Project Manager, Engineer" class="quote-input">
                </div>
            </div>

            <div class="quote-form-row1">
                <div class="quote-form-column1">
                    <label for="quoteDetails" class="quote-label">Details:</label>
                    <textarea id="quoteDetails" rows="4" class="quote-textarea" placeholder="Tell us more..."
                              required></textarea>
                </div>
            </div>

            <button type="submit" class="quote-submit-button">Submit Quote Request</button>
        </form>
        <button type="button" class="quote-close-form" onclick="closeQuoteForm()">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
</section>

<!-- Fixed CTA Button -->
<div class="quote-cta-fixed" onclick="openQuoteForm()">
    <a class="cta-btn cta-btn--secondary" aria-label="Request a Quote">
        <span class="cta-btn__text">Get a Quote</span>
    </a>
</div>
