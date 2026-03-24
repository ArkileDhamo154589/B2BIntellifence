@extends('layouts.admin')

@section('content')
    <div class="max-w-7xl mx-auto">

        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-800 tracking-tight">Dashboard</h1>
            <p class="text-slate-500 text-sm mt-1">Στατιστικά στοιχεία και πρόσφατη δραστηριότητα.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    </div>
                    <span class="text-xs font-bold text-teal-500 bg-teal-50 px-2 py-1 rounded">+12.5%</span>
                </div>
                <p class="text-2xl font-bold text-slate-900 leading-none">1,248</p>
                <p class="text-xs font-bold text-slate-400 uppercase mt-2 tracking-wider">Παραγγελίες Μήνα</p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm border-l-4 border-l-orange-400">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 bg-orange-50 text-orange-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                </div>
                <p class="text-2xl font-bold text-slate-900 leading-none">42</p>
                <p class="text-xs font-bold text-slate-400 uppercase mt-2 tracking-wider">Σε Αναμονή</p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1v2H9V7zm0 4h1v2H9v-2z"/></svg>
                    </div>
                </div>
                <p class="text-2xl font-bold text-slate-900 leading-none">156</p>
                <p class="text-xs font-bold text-slate-400 uppercase mt-2 tracking-wider">Εταιρείες Δικτύου</p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 bg-teal-50 text-teal-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                </div>
                <p class="text-2xl font-bold text-slate-900 leading-none">89</p>
                <p class="text-xs font-bold text-slate-400 uppercase mt-2 tracking-wider">Active Feeds</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="px-8 py-5 border-b border-slate-100 flex items-center justify-between">
                <h3 class="font-bold text-slate-800 text-sm uppercase tracking-wider">Πρόσφατες Παραγγελίες</h3>
                <button class="text-xs font-bold text-blue-600 hover:underline">Προβολή όλων</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-50 text-slate-400 text-[10px] font-bold uppercase tracking-widest">
                    <tr>
                        <th class="px-8 py-4">ID</th>
                        <th class="px-8 py-4">Εταιρεία</th>
                        <th class="px-8 py-4">Ποσό</th>
                        <th class="px-8 py-4">Κατάσταση</th>
                        <th class="px-8 py-4 text-right">Ενέργεια</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-5 text-xs font-mono font-bold text-slate-400">#8842</td>
                        <td class="px-8 py-5 text-sm font-bold text-slate-700 uppercase tracking-tight">Φαρμακείο Γεωργίου</td>
                        <td class="px-8 py-5 text-sm font-black text-slate-900">€ 120.50</td>
                        <td class="px-8 py-5">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-orange-50 text-orange-600 uppercase">Pending</span>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <button class="p-2 hover:bg-slate-100 rounded-lg transition text-slate-400 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-5 text-xs font-mono font-bold text-slate-400">#8841</td>
                        <td class="px-8 py-5 text-sm font-bold text-slate-700 uppercase tracking-tight">Medica AE</td>
                        <td class="px-8 py-5 text-sm font-black text-slate-900">€ 450.00</td>
                        <td class="px-8 py-5">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-teal-50 text-teal-600 uppercase">Completed</span>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <button class="p-2 hover:bg-slate-100 rounded-lg transition text-slate-400 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
