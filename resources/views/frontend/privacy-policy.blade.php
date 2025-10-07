@extends('frontend.layout.app')
@section('main-container')


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <h1 class="mb-4 text-center">Privacy Policy</h1>
            <p>Last updated: {{ date('F d, Y') }}</p>

            <p>Welcome to <strong>{{ config('app.name') }}</strong>. Your privacy is important to us. 
            This Privacy Policy explains how we collect, use, and protect your personal information when you visit our website or interact with our services.</p>

            <h4 class="mt-5">1. Information We Collect</h4>
            <p>We may collect the following types of information:</p>
            <ul>
                <li>Personal details (such as your name, email address, and phone number) that you provide through our contact forms or order pages.</li>
                <li>Non-personal data like browser type, device information, and IP address for analytics and site optimization.</li>
            </ul>

            <h4 class="mt-4">2. How We Use Your Information</h4>
            <p>Your data helps us to:</p>
            <ul>
                <li>Respond to your inquiries and process your orders.</li>
                <li>Improve our website, services, and user experience.</li>
                <li>Send promotional or informational updates (only if you consent).</li>
            </ul>

            <h4 class="mt-4">3. Cookies</h4>
            <p>Our site uses cookies to enhance your browsing experience. You can choose to disable cookies through your browser settings, 
            but some parts of the website may not function properly.</p>

            <h4 class="mt-4">4. Data Protection</h4>
            <p>We use appropriate technical and organizational measures to secure your personal data against unauthorized access, alteration, or disclosure.</p>

            <h4 class="mt-4">5. Third-Party Services</h4>
            <p>We may use third-party analytics or payment services that process data on our behalf in compliance with this Privacy Policy.</p>

            <h4 class="mt-4">6. Your Rights</h4>
            <p>You have the right to access, correct, or request deletion of your personal data. To do so, please contact us at 
            <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>.</p>

            <h4 class="mt-4">7. Changes to This Policy</h4>
            <p>We may update this Privacy Policy periodically. The latest version will always be available on this page with the updated date.</p>

            <h4 class="mt-4">8. Contact Us</h4>
            <p>If you have any questions about this Privacy Policy, you can contact us at:</p>
            <ul>
                <li>Email: <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                <li>Phone: +94 123 456 789</li>
                <li>Address: Colombo, Sri Lanka</li>
            </ul>
        </div>
    </div>
</div>
@endsection
