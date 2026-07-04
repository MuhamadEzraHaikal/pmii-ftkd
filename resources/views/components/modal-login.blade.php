<div id="loginModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/60 p-4">
    <div class="w-full max-w-lg rounded-3xl bg-white p-6 shadow-xl">
        <div class="flex items-center justify-between mb-5">
            <h2 class="text-xl font-semibold">Login</h2>
            <button onclick="document.getElementById('loginModal').classList.add('hidden')" class="text-slate-500 hover:text-slate-900">×</button>
        </div>
        <form>
            <label class="block text-sm font-medium text-slate-700">Email</label>
            <input type="email" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3" />

            <label class="mt-4 block text-sm font-medium text-slate-700">Password</label>
            <input type="password" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3" />

            <button type="submit" class="mt-6 w-full rounded-2xl bg-slate-900 px-4 py-3 text-white">Sign in</button>
        </form>
    </div>
</div>
