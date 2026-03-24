@extends('layouts.app')

@section('content')
    <div class="bg-[#020617] min-h-screen text-white p-10 font-sans">

        <div class="flex justify-between items-center mb-12 border-b-2 border-slate-900 pb-8">
            <div>
                <h1 class="text-4xl font-black italic uppercase tracking-tighter">System_Overwatch_v1</h1>
                <p class="text-teal-500 font-mono text-xs mt-2">ROLE: SUPER_ADMIN // STATUS: ENCRYPTED_SESSION</p>
            </div>
            <div class="flex gap-4">
                <div class="px-6 py-2 border-2 border-slate-800 rounded-full text-[10px] font-black uppercase">Server_Load: 14%</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="px-6 py-2 bg-red-600 rounded-full text-[10px] font-black uppercase">Terminate_Session</button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="border-2 border-slate-900 p-8 rounded-[2rem] bg-slate-950">
                <span class="text-slate-500 text-[10px] font-black uppercase">Total_Nodes</span>
                <div class="text-5xl font-black italic mt-2">{{ $total_companies }}</div>
            </div>
            <div class="border-2 border-slate-900 p-8 rounded-[2rem] bg-slate-950 border-teal-500/50">
                <span class="text-teal-500 text-[10px] font-black uppercase">Pending_Approvals</span>
                <div class="text-5xl font-black italic mt-2">{{ $pending_approvals }}</div>
            </div>
            <div class="border-2 border-slate-900 p-8 rounded-[2rem] bg-slate-950">
                <span class="text-slate-500 text-[10px] font-black uppercase">Monthly_Revenue</span>
                <div class="text-5xl font-black italic mt-2">€ 12,450</div>
            </div>
        </div>

        <div class="border-2 border-slate-900 rounded-[2.5rem] bg-white text-slate-950 overflow-hidden">
            <div class="bg-slate-900 text-white p-6 flex justify-between items-center">
                <h3 class="font-black italic uppercase text-sm">Latest_Financial_Transmissions</h3>
                <a href="#" class="text-[10px] font-black underline hover:text-teal-400">VIEW_ALL_INVOICES</a>
            </div>
            <table class="w-full text-left">
                <thead class="bg-slate-50 border-b-2 border-slate-900">
                <tr>
                    <th class="p-6 text-[10px] font-black uppercase">Company_Entity</th>
                    <th class="p-6 text-[10px] font-black uppercase">Plan_ID</th>
                    <th class="p-6 text-[10px] font-black uppercase">Amount</th>
                    <th class="p-6 text-[10px] font-black uppercase text-right">Action</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                @foreach($latest_payments as $payment)
                    <tr>
                        <td class="p-6 font-bold uppercase italic text-sm">{{ $payment->company->name }}</td>
                        <td class="p-6"><span class="px-3 py-1 bg-slate-900 text-white text-[9px] font-black rounded-full">#PLAN_{{ $payment->plan_id }}</span></td>
                        <td class="p-6 font-black text-teal-600">€ {{ $payment->amount }}</td>
                        <td class="p-6 text-right">
                            <button class="bg-slate-100 p-2 rounded-lg hover:bg-teal-500 hover:text-white transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2"/></svg>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
