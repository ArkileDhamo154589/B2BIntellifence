@extends('layouts.app')

@section('title', 'Σχετικά με εμάς | PharmaIntel')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <div class="about-wrapper">

        <section class="about-hero relative z-10 px-6 sm:px-10 lg:px-20 py-20 lg:py-28">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20 items-center relative z-10">

                <div class="flex flex-col">
                    <div class="a-badge w-fit mb-7">
                        <span class="a-badge-dot"></span>
                        Ζωντανή Πλατφόρμα B2B
                    </div>

                    <h1 class="a-h1 mb-6">
                        Λειτουργίες<br>
                        <span class="a-h1-accent">σε πραγματικό</span><br>
                        χρόνο.
                    </h1>

                    <p class="a-lead mb-10 max-w-lg">
                        Το PharmaIntel γεφυρώνει τον προμηθευτή με το φαρμακείο. Μία ενιαία πλατφόρμα που διαχειρίζεται παραγγελίες, αποθέματα και συνεργασίες αυτόματα — 24 ώρες το εικοσιτετράωρο, κάθε μέρα.
                    </p>

                    <div class="flex flex-wrap gap-10">
                        <div>
                            <span class="a-stat-num">99.9%</span>
                            <span class="a-stat-label">Αξιοπιστία</span>
                        </div>
                        <div>
                            <span class="a-stat-num">2.1″</span>
                            <span class="a-stat-label">Ταχύτητα παραγγελίας</span>
                        </div>
                        <div>
                            <span class="a-stat-num">1.200+</span>
                            <span class="a-stat-label">Κωδικοί συγχρονισμένοι</span>
                        </div>
                    </div>
                </div>

                <div class="monitor-card a-reveal">
                    <div class="monitor-topbar">
                        <div class="m-dots">
                            <span class="m-dot m-r"></span>
                            <span class="m-dot m-y"></span>
                            <span class="m-dot m-g"></span>
                        </div>
                        <span class="monitor-label">Ζωντανή Ροή</span>
                    </div>

                    <div class="feed-viewport">
                        <div class="feed-track" id="feedTrack">

                            <div class="feed-item is-new">
                                <div class="feed-icon fi-teal">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Νέα Παραγγελία #4492</div>
                                    <div class="feed-sub">Φαρμακείο Η Υγεία · 24 προϊόντα</div>
                                </div>
                                <span class="feed-time is-now">Τώρα</span>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon fi-blue">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Ανανέωση Αποθέματος</div>
                                    <div class="feed-sub">Συγχρονισμός καταλόγου · 1.204 κωδικοί</div>
                                </div>
                                <span class="feed-time">2λ πριν</span>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon fi-purple">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Νέα Σύνδεση Συνεργάτη</div>
                                    <div class="feed-sub">PharmaGroup Logistics S.A.</div>
                                </div>
                                <span class="feed-time">12λ πριν</span>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon fi-amber">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Εβδομαδιαία Αναφορά</div>
                                    <div class="feed-sub">+18% πωλήσεις · 340 ενεργά φαρμακεία</div>
                                </div>
                                <span class="feed-time">1ω πριν</span>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon fi-teal">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Νέα Παραγγελία #4491</div>
                                    <div class="feed-sub">Φαρμακείο Μεσόγειος · 8 προϊόντα</div>
                                </div>
                                <span class="feed-time">2ω πριν</span>
                            </div>

                            <div class="feed-item">
                                <div class="feed-icon fi-blue">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div class="feed-body">
                                    <div class="feed-title">Αποστολή Επιβεβαιώθηκε</div>
                                    <div class="feed-sub">Παραγγελία #4488 · Παράδοση αύριο</div>
                                </div>
                                <span class="feed-time">3ω πριν</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="partners-strip px-0 py-10">
            <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-20">
                <p class="partners-label mb-7">Εμπιστεύονται την πλατφόρμα μας</p>
            </div>
            <div class="partners-carousel-wrapper py-2">
                <div class="partners-track">
                    <span class="partner-pill">ΦαρμαΔίκτυο Α.Ε.</span>
                    <span class="partner-pill">MediSupply S.A.</span>
                    <span class="partner-pill">HellasPharma</span>
                    <span class="partner-pill">PharmaGroup Logistics</span>
                    <span class="partner-pill">Βιτάμ Α.Ε.</span>
                    <span class="partner-pill">UniPharm</span>
                    <span class="partner-pill">MedNet Hellas</span>
                    <span class="partner-pill">Αθηναϊκή Φαρμακαποθήκη</span>
                    <span class="partner-pill">ΦαρμαΔίκτυο Α.Ε.</span>
                    <span class="partner-pill">MediSupply S.A.</span>
                    <span class="partner-pill">HellasPharma</span>
                    <span class="partner-pill">PharmaGroup Logistics</span>
                    <span class="partner-pill">Βιτάμ Α.Ε.</span>
                    <span class="partner-pill">UniPharm</span>
                    <span class="partner-pill">MedNet Hellas</span>
                    <span class="partner-pill">Αθηναϊκή Φαρμακαποθήκη</span>
                </div>
            </div>
        </div>

        <section class="px-6 sm:px-10 lg:px-20 py-20 lg:py-28">
            <div class="max-w-7xl mx-auto">
                <div class="a-eyebrow mb-3">Γιατί να μας επιλέξετε</div>
                <h2 class="a-h2 mb-4">Ό,τι χρειάζεστε,<br>σε ένα μέρος.</h2>
                <p class="a-body max-w-xl mb-14">Σχεδιάστηκε αποκλειστικά για τον κλάδο του φαρμακείου και της φαρμακευτικής διανομής στην Ελλάδα — χωρίς περιττή πολυπλοκότητα.</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                    <div class="why-card a-reveal">
                        <span class="a-card-num mb-5">01</span>
                        <div class="a-card-icon mb-5">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div class="a-card-title mb-3">Πλήρης Αυτοματοποίηση</div>
                        <p class="a-card-desc">Δεν χρειάζεστε πλέον τηλεφωνικές παραγγελίες, χειρόγραφες λίστες ή ατελείωτα email. Το σύστημα αναλαμβάνει τα πάντα, εξοικονομώντας ώρες εργασίας κάθε μέρα.</p>
                    </div>

                    <div class="why-card featured a-reveal">
                        <span class="a-card-num mb-5">02</span>
                        <div class="a-card-icon mb-5">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <div class="a-card-title mb-3">Απόθεμα σε Πραγματικό Χρόνο</div>
                        <p class="a-card-desc">Τα φαρμακεία βλέπουν ακριβώς τι έχετε διαθέσιμο — τη στιγμή που το χρειάζονται. Η άμεση ορατότητα αυξάνει τις πωλήσεις και εξαλείφει τα κενά στο απόθεμα.</p>
                    </div>

                    <div class="why-card a-reveal">
                        <span class="a-card-num mb-5">03</span>
                        <div class="a-card-icon mb-5">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <div class="a-card-title mb-3">Ανάπτυξη χωρίς Επιπλέον Κόστος</div>
                        <p class="a-card-desc">Διπλασιάστε το δίκτυο των φαρμακείων σας χωρίς να χρειαστεί να προσλάβετε επιπλέον προσωπικό. Η πλατφόρμα κλιμακώνεται μαζί με την επιχείρησή σας.</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="px-6 sm:px-10 lg:px-20 py-20 lg:py-28" style="background:var(--surface); border-top:1px solid var(--border); border-bottom:1px solid var(--border);">
            <div class="max-w-7xl mx-auto">
                <div class="a-eyebrow mb-3">Πώς λειτουργεί</div>
                <h2 class="a-h2 mb-14">Απλό για εσάς,<br>ισχυρό στο βάθος.</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

                    <div>
                        <div class="step-item a-reveal">
                            <div class="step-num">1</div>
                            <div>
                                <div class="step-title mb-2">Εγγραφή και Σύνδεση</div>
                                <p class="step-desc">Δημιουργείτε τον εταιρικό σας λογαριασμό σε λίγα λεπτά. Εισάγετε τον κατάλογο των προϊόντων σας, ορίζετε τις τιμές και είστε έτοιμοι.</p>
                            </div>
                        </div>
                        <div class="step-item a-reveal">
                            <div class="step-num">2</div>
                            <div>
                                <div class="step-title mb-2">Σύνδεση Φαρμακείων</div>
                                <p class="step-desc">Τα φαρμακεία-συνεργάτες βλέπουν το ενημερωμένο απόθεμά σας στη δική τους οθόνη και παραγγέλνουν με δύο κλικ — χωρίς τηλέφωνο.</p>
                            </div>
                        </div>
                        <div class="step-item a-reveal">
                            <div class="step-num">3</div>
                            <div>
                                <div class="step-title mb-2">Αυτόματη Επεξεργασία</div>
                                <p class="step-desc">Κάθε παραγγελία επιβεβαιώνεται, καταχωρείται και ενημερώνει το απόθεμα αυτόματα — χωρίς χειροκίνητη παρέμβαση.</p>
                            </div>
                        </div>
                        <div class="step-item a-reveal">
                            <div class="step-num">4</div>
                            <div>
                                <div class="step-title mb-2">Αναφορές και Έλεγχος</div>
                                <p class="step-desc">Παρακολουθείτε πωλήσεις, αποθέματα και δραστηριότητα φαρμακείων από ένα κέντρο ελέγχου — σε πραγματικό χρόνο, από οποιαδήποτε συσκευή.</p>
                            </div>
                        </div>
                    </div>

                    <div class="terminal-card a-reveal">
                        <div class="terminal-topbar">
                            <div class="t-dot t-r"></div>
                            <div class="t-dot t-y"></div>
                            <div class="t-dot t-g"></div>
                        </div>
                        <div class="terminal-body">
                            <div class="t-line">
                                <span class="t-prompt">→</span>
                                <span class="t-text">Παραγγελία <strong>#4492</strong> ελήφθη</span>
                            </div>
                            <div class="t-line">
                                <span class="t-prompt">→</span>
                                <span class="t-text">Έλεγχος αποθέματος: <span class="t-hi">διαθέσιμο</span></span>
                            </div>
                            <div class="t-line">
                                <span class="t-prompt">→</span>
                                <span class="t-text">Αυτόματη επιβεβαίωση αποστολής</span>
                            </div>
                            <div class="t-line">
                                <span class="t-prompt">→</span>
                                <span class="t-text">Ενημέρωση αποθέματος: <strong>−24 κωδικοί</strong></span>
                            </div>
                            <div class="t-line">
                                <span class="t-prompt">→</span>
                                <span class="t-text">Ειδοποίηση φαρμακείου: <span class="t-hi">Η Υγεία</span></span>
                            </div>
                            <div class="t-line">
                                <span class="t-prompt">→</span>
                                <span class="t-text">Καταχώρηση στο λογιστικό σύστημα</span>
                            </div>
                            <div class="t-status-bar">
                                <span class="t-status-dot"></span>
                                Ολοκλήρωση παραγγελίας σε 2.1 δευτερόλεπτα
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="numbers-section px-6 sm:px-10 lg:px-20 py-20 lg:py-28">
            <div class="max-w-7xl mx-auto">
                <div class="a-eyebrow mb-3" style="color:#14b8a6">Αριθμοί που μιλούν</div>
                <h2 class="a-h2 on-dark mb-0">Τα αποτελέσματα<br>μιλούν από μόνα τους.</h2>

                <div class="numbers-grid">
                    <div class="number-item">
                        <span class="number-big">1.200+</span>
                        <span class="number-label">Φαρμακευτικοί κωδικοί συγχρονισμένοι σε πραγματικό χρόνο</span>
                    </div>
                    <div class="number-item">
                        <span class="number-big">340+</span>
                        <span class="number-label">Φαρμακεία συνδεδεμένα σε όλη την Ελλάδα</span>
                    </div>
                    <div class="number-item">
                        <span class="number-big">98%</span>
                        <span class="number-label">Μείωση σφαλμάτων στις παραγγελίες μετά την υιοθέτηση</span>
                    </div>
                    <div class="number-item">
                        <span class="number-big">24/7</span>
                        <span class="number-label">Διαθεσιμότητα πλατφόρμας χωρίς καμία διακοπή</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-6 sm:px-10 lg:px-20 py-20 lg:py-28" id="partnership">
            <div class="max-w-2xl mx-auto">
                <div class="a-eyebrow text-center mb-3">Ξεκινήστε σήμερα</div>
                <h2 class="a-h2 text-center mb-4">Γίνετε Συνεργάτης</h2>
                <p class="a-body text-center mb-0">Στείλτε μας το αίτημά σας και η ομάδα μας θα επικοινωνήσει εντός 24 ωρών.</p>

                <div class="form-card a-reveal">
                    <div class="form-card-header">
                        <div class="form-card-title">Αίτημα Συνεργασίας</div>
                        <div class="form-card-sub">Συμπληρώστε τα στοιχεία σας και θα επικοινωνήσουμε σύντομα.</div>
                    </div>

                    <div class="p-8 sm:p-10 grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="f-label" for="name">Ονοματεπώνυμο</label>
                            <input class="f-input" type="text" id="name" name="name" placeholder="π.χ. Γιάννης Παπαδόπουλος">
                        </div>
                        <div>
                            <label class="f-label" for="email">Διεύθυνση Email</label>
                            <input class="f-input" type="email" id="email" name="email" placeholder="email@εταιρεια.gr">
                        </div>
                        <div>
                            <label class="f-label" for="phone">Τηλέφωνο Επικοινωνίας</label>
                            <input class="f-input" type="tel" id="phone" name="phone" placeholder="+30 210 0000000">
                        </div>
                        <div>
                            <label class="f-label" for="type">Είδος Επιχείρησης</label>
                            <select class="f-input" id="type" name="type">
                                <option value="">Επιλέξτε...</option>
                                <option value="pharma_company">Φαρμακευτική Εταιρεία</option>
                                <option value="warehouse">Φαρμακαποθήκη</option>
                                <option value="pharmacy">Φαρμακείο</option>
                                <option value="distributor">Διανομέας</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="f-label" for="company">Εταιρεία</label>
                            <input class="f-input" type="text" id="company" name="company" placeholder="Επωνυμία εταιρείας">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="f-label" for="message">Σύντομη Περιγραφή Αιτήματος</label>
                            <textarea class="f-input" id="message" name="message" rows="4" placeholder="Περιγράψτε τι θέλετε να πετύχετε με την πλατφόρμα μας..."></textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <button type="submit" class="btn-submit" id="formBtn">
                                Αποστολή Αιτήματος
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@push('scripts')
    <script>
        (function(){
            const reveals = document.querySelectorAll('.a-reveal');
            const ro = new IntersectionObserver((entries) => {
                entries.forEach((e, i) => {
                    if(e.isIntersecting){
                        setTimeout(() => e.target.classList.add('visible'), i * 80);
                        ro.unobserve(e.target);
                    }
                });
            }, { threshold: 0.1 });
            reveals.forEach(el => ro.observe(el));

            const track = document.getElementById('feedTrack');
            if(track){
                const clone = track.cloneNode(true);
                clone.removeAttribute('id');
                track.parentElement.appendChild(clone);

                const wrapper = document.createElement('div');
                wrapper.style.cssText = 'will-change:transform;';
                const vp = track.parentElement;
                while(vp.firstChild) wrapper.appendChild(vp.firstChild);
                vp.appendChild(wrapper);

                let y = 0;
                let paused = false;
                vp.addEventListener('mouseenter', () => paused = true);
                vp.addEventListener('mouseleave', () => paused = false);

                function tick(){
                    if(!paused){
                        y += 0.4;
                        if(y >= track.offsetHeight) y = 0;
                        wrapper.style.transform = 'translateY(-' + y + 'px)';
                    }
                    requestAnimationFrame(tick);
                }
                setTimeout(tick, 150);
            }

            const btn = document.getElementById('formBtn');
            if(btn){
                btn.addEventListener('click', function(e){
                    e.preventDefault();
                    this.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" style="width:14px;height:14px;stroke-width:2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Το αίτημά σας στάλθηκε';
                    this.style.background = '#059669';
                    this.disabled = true;
                });
            }
        })();
    </script>
@endpush
