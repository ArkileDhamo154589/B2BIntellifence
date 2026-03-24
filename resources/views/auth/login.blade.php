<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Είσοδος στο Σύστημα // PharmaCore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-slate-50 min-h-screen">

<div class="flex min-h-screen">
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white shadow-xl">
        <div class="max-w-md w-full">
            <div class="mb-10">
                <a href="/" class="text-teal-600 font-bold flex items-center gap-2 mb-6">
                    &larr; Επιστροφή στην αρχική
                </a>
                <h1 class="text-3xl font-bold text-slate-900">Καλώς ορίσατε</h1>
                <p class="text-slate-500 mt-2">Παρακαλώ εισάγετε τα στοιχεία σας για να συνδεθείτε στο Dashboard.</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Διεύθυνση</label>
                    <input type="email" name="email" required placeholder="π.χ. admin@company.gr"
                           class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition-all placeholder:text-slate-400 text-slate-700">
                </div>

                <div>
                    <div class="flex justify-between mb-2">
                        <label class="block text-sm font-semibold text-slate-700">Κωδικός Πρόσβασης</label>
                        <a href="#" class="text-xs text-teal-600 hover:underline">Ξεχάσατε τον κωδικό;</a>
                    </div>
                    <input type="password" name="password" required placeholder="••••••••"
                           class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition-all text-slate-700">
                </div>

                @if($errors->any())
                    <div class="p-4 bg-red-50 border border-red-100 rounded-xl text-red-600 text-sm">
                        {{ $errors->first() }}
                    </div>
                @endif

                <button type="submit"
                        class="w-full bg-teal-600 hover:bg-teal-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-teal-500/20 transition-all transform active:scale-[0.98]">
                    Σύνδεση στο Σύστημα
                </button>
            </form>

            <div class="mt-8 pt-8 border-t border-slate-100 text-center">
                <p class="text-sm text-slate-500">
                    Δεν έχετε λογαριασμό;
                    <a href="/register" class="text-teal-600 font-semibold hover:underline">Κάντε αίτηση εγγραφής</a>
                </p>
            </div>
        </div>
    </div>

    <div class="hidden lg:flex lg:w-1/2 bg-slate-100 items-center justify-center p-12">
        <div class="relative max-w-lg text-center">
            <div class="absolute -top-20 -left-20 w-64 h-64 bg-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>

            <div class="relative bg-white/60 backdrop-blur-xl p-10 rounded-[3rem] border border-white shadow-2xl">
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Ολοκληρωμένη Διαχείριση B2B</h3>
                <p class="text-slate-600 leading-relaxed">
                    Αποκτήστε τον πλήρη έλεγχο των feeds, των παραγγελιών και του δικτύου συνεργατών σας μέσα από ένα σύγχρονο και εύχρηστο περιβάλλον.
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
