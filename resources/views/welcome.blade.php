@extends('layouts.app')

@section('title', 'PharmaIntel - Σύστημα B2B Φαρμακείων')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endpush

@section('content')
    <main class="main-content">

        <div class="hero-text">
            <h1>Καλώς ήρθατε στο B2B Intelligence</h1>
            <p>Η κεντρική πλατφόρμα διαχείρισης παραγγελιών και δικτύων φαρμακείων. Επιλέξτε την ενέργεια που επιθυμείτε.</p>
        </div>

        <div class="action-cards">

            <div class="card login-card">
                <h2>Σύνδεση στο Σύστημα</h2>
                <p>Έχετε ήδη λογαριασμό; Συνδεθείτε στο dashboard για να διαχειριστείτε τις παραγγελίες και το δίκτυό σας.</p>
                <a href="#" class="btn btn-primary">Είσοδος Χρήστη</a>
            </div>

            <div class="card register-card">
                <h2>Είστε B2B Εταιρεία;</h2>
                <p>Δεν έχετε λογαριασμό; Κάντε εγγραφή στο σύστημα για να δημιουργήσετε το δικό σας δίκτυο φαρμακείων.</p>
                <a href="#" class="btn btn-secondary">Εγγραφή στο Σύστημα</a>
            </div>

        </div>

    </main>
@endsection
