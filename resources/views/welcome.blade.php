@extends('layouts.app')

@section('title', 'PharmaIntel - B2B Είσοδος')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endpush

@section('content')
    <main class="main-content">

        <div class="hero-text">
            <h1>B2B Intelligence Hub</h1>
            <p>Η κεντρική πλατφόρμα διαχείρισης δικτύων φαρμακείων. Συνδεθείτε για να ελέγξετε τις παραγγελίες σας ή εγγραφείτε ως νέα εταιρεία B2B.</p>
        </div>

        <div class="action-cards">

            <div class="card login-card">
                <svg class="card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"></path>
                </svg>

                <h2>Σύνδεση στο Σύστημα</h2>
                <p>Εισέλθετε στο προσωπικό σας dashboard για την άμεση διαχείριση του δικτύου σας.</p>
                <a href="#" class="btn btn-primary">
                    Είσοδος
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <div class="card register-card">
                <svg class="card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1v2H9V7zm0 4h1v2H9v-2zm0 4h1v2H9v-2zm3-8h2v2h-2V7zm0 4h2v2h-2v-2zm0 4h2v2h-2v-2z"></path>
                </svg>

                <h2>Είστε B2B Εταιρεία;</h2>
                <p>Δημιουργήστε νέο εταιρικό λογαριασμό και ξεκινήστε να δέχεστε παραγγελίες.</p>
                <a href="#" class="btn btn-secondary">
                    Εγγραφή στο Σύστημα
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                </a>
            </div>

        </div>

        <section class="features-section">
            <h2 class="features-title">Πώς λειτουργεί το PharmaIntel;</h2>

            <div class="features-grid">
                <div class="feature-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <h3>Κεντρική Διαχείριση B2B</h3>
                    <p>Δημιουργήστε το εταιρικό σας προφίλ, οργανώστε τον κατάλογο προϊόντων σας και επικοινωνήστε απευθείας με το δίκτυο των συνεργατών σας.</p>
                </div>

                <div class="feature-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <h3>Λήψη Παραγγελιών</h3>
                    <p>Αυτοματοποιημένο σύστημα λήψης παραγγελιών από τα φαρμακεία, με real-time ενημερώσεις, ιστορικό και παρακολούθηση της κατάστασης (status).</p>
                </div>

                <div class="feature-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    <h3>Στατιστικά & Analytics</h3>
                    <p>Παρακολουθήστε την πορεία των πωλήσεών σας, αναλύστε τα δεδομένα του δικτύου σας και λάβετε έξυπνες επιχειρηματικές αποφάσεις.</p>
                </div>
            </div>
        </section>

    </main>
@endsection
