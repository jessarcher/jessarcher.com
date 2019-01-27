<form method="POST" name="contact" action="{{ $action }}" netlify netlify-honeypot="mobile">
    <div class="text-left">
        <div class="mb-4">
            <label class="block text-grey-dark text-sm font-bold mb-2" for="name">
                Your Name
            </label>
            <input
                class="
                    shadow
                    appearance-none
                    border
                    rounded
                    w-full
                    py-2
                    px-3
                    text-grey-darker
                    leading-tight
                    focus:outline-none
                    focus:shadow-outline
                "
                id="name"
                name="name"
                type="text"
                placeholder="Name"
            >
        </div>
        <div class="mb-4">
            <label class="block text-grey-dark text-sm font-bold mb-2" for="phone">
                Phone Number
            </label>
            <input
                class="
                    shadow
                    appearance-none
                    border
                    rounded
                    w-full
                    py-2
                    px-3
                    text-grey-darker
                    leading-tight
                    focus:outline-none
                    focus:shadow-outline
                "
                id="phone"
                name="phone"
                type="phone"
                placeholder="Phone"
            >
        </div>

        <div class="hidden">
            <label>Don’t fill this out if you're human:</label>
            <input type="text" name="mobile">
        </div>

        <div class="mb-4">
            <label class="block text-grey-dark text-sm font-bold mb-2" for="email">
                Email Address
            </label>
            <input
                class="
                    shadow
                    appearance-none
                    border
                    rounded
                    w-full
                    py-2
                    px-3
                    text-grey-darker
                    leading-tight
                    focus:outline-none
                    focus:shadow-outline
                "
                id="email"
                name="email"
                type="email"
                placeholder="Email"
            >
        </div>
        <div class="mb-6">
            <label class="block text-grey-dark text-sm font-bold mb-2" for="message">
                Message
            </label>
            <textarea
                class="
                    shadow
                    appearance-none
                    border
                    rounded
                    w-full
                    py-2
                    px-3
                    text-grey-darker
                    leading-tight
                    focus:outline-none
                    focus:shadow-outline
                "
                id="message"
                name="message"
                type="message"
                rows="5"
                placeholder="Your message..."
            ></textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-grey">
                Send Message
            </button>
        </div>
    </div>
</form>
