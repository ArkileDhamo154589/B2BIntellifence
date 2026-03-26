@extends('layouts.app')

@section('title', 'Επικοινωνία | PharmaIntel')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <div class="contact-wrapper">

        {{-- ── HERO ───────────────────────────────────────────────────────────── --}}
        <section class="contact-hero relative z-10 px-6 sm:px-10 lg:px-20 py-20 lg:py-28">
            <div class="max-w-7xl mx-auto relative z-10">

                <div class="a-badge w-fit mb-7">
                    <span class="a-badge-dot"></span>
                    Είμαστε εδώ για εσάς
                </div>

                <h1 class="a-h1 mb-6">
                    Μιλήστε μαζί μας,<br>
                    <span class="a-h1-accent">είμαστε κοντά.</span>
                </h1>

                <p class="a-lead max-w-xl mb-14">
                    Για ερωτήματα, τεχνική υποστήριξη ή αιτήματα συνεργασίας — η ομάδα μας ανταποκρίνεται εντός 24 ωρών τις εργάσιμες ημέρες.
                </p>

                {{-- Contact Info Cards --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-0">

                    <a href="mailto:info@pharmaintel.gr" class="contact-info-card a-reveal">
                        <div class="ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <div class="ci-title">Email</div>
                            <div class="ci-value">info@pharmaintel.gr</div>
                            <div class="ci-sub">Απάντηση εντός 24ω</div>
                        </div>
                    </a>

                    <a href="tel:+302101234567" class="contact-info-card a-reveal">
                        <div class="ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <div class="ci-title">Τηλέφωνο</div>
                            <div class="ci-value">+30 210 123 4567</div>
                            <div class="ci-sub">Δευ–Παρ 09:00–18:00</div>
                        </div>
                    </a>

                    <div class="contact-info-card a-reveal">
                        <div class="ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <div class="ci-title">Διεύθυνση</div>
                            <div class="ci-value">Λεωφ. Κηφισίας 44</div>
                            <div class="ci-sub">Μαρούσι, Αθήνα 15125</div>
                        </div>
                    </div>

                    <div class="contact-info-card featured a-reveal">
                        <div class="ci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        </div>
                        <div>
                            <div class="ci-title">Υποστήριξη</div>
                            <div class="ci-value">support@pharmaintel.gr</div>
                            <div class="ci-sub">Τεχνική βοήθεια 24/7</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- ── MAIN CONTENT: Form + Sidebar ──────────────────────────────────── --}}
        <section class="px-6 sm:px-10 lg:px-20 py-16 lg:py-24" style="background:var(--surface); border-top:1px solid var(--border);">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-start">

                {{-- Left: Contact Form --}}
                <div class="lg:col-span-3">
                    <div class="a-eyebrow mb-3">Φόρμα Επικοινωνίας</div>
                    <h2 class="a-h2 mb-3">Στείλτε μας<br>μήνυμα.</h2>
                    <p class="a-body mb-8">Συμπληρώστε τα στοιχεία σας και η ομάδα μας θα επικοινωνήσει μαζί σας σύντομα.</p>

                    <div class="form-card a-reveal">
                        <div class="form-card-header">
                            <div class="form-card-title">Νέο Μήνυμα</div>
                            <div class="form-card-sub">Όλα τα πεδία με * είναι υποχρεωτικά.</div>
                        </div>

                        <div class="p-8 sm:p-10 grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="f-label" for="c_name">Ονοματεπώνυμο *</label>
                                <input class="f-input" type="text" id="c_name" name="name" placeholder="π.χ. Γιάννης Παπαδόπουλος">
                            </div>
                            <div>
                                <label class="f-label" for="c_email">Διεύθυνση Email *</label>
                                <input class="f-input" type="email" id="c_email" name="email" placeholder="email@εταιρεια.gr">
                            </div>
                            <div>
                                <label class="f-label" for="c_phone">Τηλέφωνο</label>
                                <input class="f-input" type="tel" id="c_phone" name="phone" placeholder="+30 210 0000000">
                            </div>
                            <div>
                                <label class="f-label" for="c_subject">Θέμα *</label>
                                <select class="f-input" id="c_subject" name="subject">
                                    <option value="">Επιλέξτε θέμα...</option>
                                    <option value="info">Γενικές Πληροφορίες</option>
                                    <option value="demo">Αίτημα Demo</option>
                                    <option value="support">Τεχνική Υποστήριξη</option>
                                    <option value="partnership">Συνεργασία</option>
                                    <option value="billing">Τιμολόγηση / Πληρωμές</option>
                                    <option value="other">Άλλο</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <label class="f-label" for="c_company">Εταιρεία</label>
                                <input class="f-input" type="text" id="c_company" name="company" placeholder="Επωνυμία εταιρείας">
                            </div>
                            <div class="sm:col-span-2">
                                <label class="f-label" for="c_message">Μήνυμα *</label>
                                <textarea class="f-input" id="c_message" name="message" rows="5" placeholder="Γράψτε το μήνυμά σας εδώ..."></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <button type="submit" class="btn-submit" id="contactBtn">
                                    Αποστολή Μηνύματος
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: Map + Hours --}}
                <div class="lg:col-span-2 flex flex-col gap-6" style="position:sticky; top:96px;">

                    {{-- Map Card --}}
                    <div class="map-card a-reveal">
                        <div class="map-topbar">
                            <div class="m-dots">
                                <span class="m-dot m-r"></span>
                                <span class="m-dot m-y"></span>
                                <span class="m-dot m-g"></span>
                            </div>
                            <span class="map-label">Τοποθεσία</span>
                        </div>
                        <div class="map-visual">
                            <div class="map-pin">
                                <div class="map-pin-dot"></div>
                                <div class="map-pin-label">PharmaIntel HQ</div>
                            </div>
                        </div>
                        <div class="map-footer">
                            <span class="map-addr">Λεωφ. Κηφισίας 44, Μαρούσι</span>
                            <a class="map-link" href="https://maps.google.com" target="_blank" rel="noopener">
                                Οδηγίες
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </a>
                        </div>
                    </div>

                    {{-- Business Hours --}}
                    <div class="hours-card a-reveal">
                        <div class="hours-topbar">
                            <div class="t-dot t-r"></div>
                            <div class="t-dot t-y"></div>
                            <div class="t-dot t-g"></div>
                        </div>
                        <div class="hours-body">
                            <div class="hours-row">
                                <span class="hours-day" id="day-mon">Δευτέρα</span>
                                <span class="hours-time">09:00 – 18:00</span>
                            </div>
                            <div class="hours-row">
                                <span class="hours-day" id="day-tue">Τρίτη</span>
                                <span class="hours-time">09:00 – 18:00</span>
                            </div>
                            <div class="hours-row">
                                <span class="hours-day" id="day-wed">Τετάρτη</span>
                                <span class="hours-time">09:00 – 18:00</span>
                            </div>
                            <div class="hours-row">
                                <span class="hours-day" id="day-thu">Πέμπτη</span>
                                <span class="hours-time">09:00 – 18:00</span>
                            </div>
                            <div class="hours-row">
                                <span class="hours-day" id="day-fri">Παρασκευή</span>
                                <span class="hours-time">09:00 – 17:00</span>
                            </div>
                            <div class="hours-row">
                                <span class="hours-day">Σάββατο</span>
                                <span class="hours-time closed">Κλειστό</span>
                            </div>
                            <div class="hours-row">
                                <span class="hours-day">Κυριακή</span>
                                <span class="hours-time closed">Κλειστό</span>
                            </div>
                            <div class="hours-status-bar" id="hoursStatus">
                                <span class="hours-status-dot"></span>
                                <span id="hoursText">Ελέγχουμε ώρες...</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- ── FAQ ────────────────────────────────────────────────────────────── --}}
        <section class="px-6 sm:px-10 lg:px-20 py-20 lg:py-28">
            <div class="max-w-3xl mx-auto">
                <div class="a-eyebrow text-center mb-3">Συχνές Ερωτήσεις</div>
                <h2 class="a-h2 text-center mb-12">Έχετε απορίες;<br>Έχουμε απαντήσεις.</h2>

                <div class="a-reveal">

                    <details class="faq-item">
                        <summary class="faq-q">
                            Πόσο χρόνο παίρνει η ενσωμάτωση;
                            <span class="faq-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></span>
                        </summary>
                        <p class="faq-a">Η βασική ενσωμάτωση ολοκληρώνεται σε λιγότερο από μία εργάσιμη ημέρα. Η ομάδα μας αναλαμβάνει την εισαγωγή του καταλόγου σας και την παραμετροποίηση του λογαριασμού σας χωρίς κόπο για εσάς.</p>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-q">
                            Υπάρχει δοκιμαστική περίοδος;
                            <span class="faq-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></span>
                        </summary>
                        <p class="faq-a">Ναι, προσφέρουμε 30 ημέρες δωρεάν δοκιμή χωρίς πιστωτική κάρτα. Κατά τη διάρκεια αυτής της περιόδου έχετε πλήρη πρόσβαση σε όλες τις λειτουργίες της πλατφόρμας.</p>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-q">
                            Τι συμβαίνει με τα δεδομένα μου;
                            <span class="faq-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></span>
                        </summary>
                        <p class="faq-a">Τα δεδομένα σας αποθηκεύονται σε servers εντός ΕΕ και υπόκεινται σε GDPR. Δεν κοινοποιούμε δεδομένα σε τρίτους. Εφαρμόζουμε κρυπτογράφηση end-to-end σε όλες τις μεταφορές δεδομένων.</p>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-q">
                            Παρέχετε εκπαίδευση στο προσωπικό;
                            <span class="faq-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></span>
                        </summary>
                        <p class="faq-a">Φυσικά. Κάθε νέος συνεργάτης λαμβάνει ολοκληρωμένη εκπαίδευση (onboarding session) μέσω βιντεοκλήσης. Διαθέτουμε επίσης εκτεταμένη βάση γνώσεων και βίντεο-οδηγούς στα ελληνικά.</p>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-q">
                            Πώς λειτουργεί η τεχνική υποστήριξη;
                            <span class="faq-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></span>
                        </summary>
                        <p class="faq-a">Η τεχνική μας ομάδα είναι διαθέσιμη 24/7 μέσω email (support@pharmaintel.gr) και chat. Για επείγοντα θέματα, οι χρήστες Premium έχουν πρόσβαση σε τηλεφωνική υποστήριξη κατά τις εργάσιμες ώρες.</p>
                    </details>

                </div>
            </div>
        </section>

    </div>
@endsection

@push('scripts')
    <script>
        (function () {

            // ── Reveal on scroll ──────────────────────────────────────────────
            const reveals = document.querySelectorAll('.a-reveal');
            const ro = new IntersectionObserver((entries) => {
                entries.forEach((e, i) => {
                    if (e.isIntersecting) {
                        setTimeout(() => e.target.classList.add('visible'), i * 80);
                        ro.unobserve(e.target);
                    }
                });
            }, { threshold: 0.1 });
            reveals.forEach(el => ro.observe(el));

            // ── Highlight today in hours table ────────────────────────────────
            const dayIds = ['day-sun', 'day-mon', 'day-tue', 'day-wed', 'day-thu', 'day-fri', 'day-sat'];
            const todayIndex = new Date().getDay();
            const todayEl = document.getElementById(dayIds[todayIndex]);
            if (todayEl) todayEl.classList.add('today');

            // ── Open / closed status ──────────────────────────────────────────
            const hoursText = document.getElementById('hoursText');
            const hoursStatus = document.getElementById('hoursStatus');
            const now = new Date();
            const day = now.getDay();
            const hour = now.getHours();
            const minute = now.getMinutes();
            const timeNum = hour * 60 + minute;
            const isWeekday = day >= 1 && day <= 5;
            const openTime = 9 * 60;
            const closeTimeMF = 18 * 60;
            const closeTimeFri = 17 * 60;
            const closeTime = day === 5 ? closeTimeFri : closeTimeMF;
            const isOpen = isWeekday && timeNum >= openTime && timeNum < closeTime;

            if (hoursText) {
                if (isOpen) {
                    hoursText.textContent = 'Είμαστε ανοιχτοί τώρα — γράψτε μας!';
                } else if (isWeekday && timeNum < openTime) {
                    hoursText.textContent = 'Ανοίγουμε σήμερα στις 09:00';
                } else {
                    hoursText.textContent = 'Κλειστά — απαντάμε την επόμενη εργάσιμη';
                    if (hoursStatus) {
                        hoursStatus.style.background = 'rgba(248,113,113,0.07)';
                        hoursStatus.style.borderColor = 'rgba(248,113,113,0.18)';
                        hoursStatus.style.color = '#f87171';
                        const dot = hoursStatus.querySelector('.hours-status-dot');
                        if (dot) dot.style.background = '#f87171';
                    }
                }
            }

            // ── Form submit ───────────────────────────────────────────────────
            const btn = document.getElementById('contactBtn');
            if (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    this.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" style="width:14px;height:14px;stroke-width:2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Το μήνυμά σας στάλθηκε';
                    this.style.background = '#059669';
                    this.disabled = true;
                });
            }

        })();
    </script>
@endpush
