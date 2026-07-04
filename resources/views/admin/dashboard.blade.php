<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mondays Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-[#F8F9FA] text-slate-800 font-sans antialiased">

    <div class="flex min-h-screen">
        
        <aside class="w-64 bg-white border-r border-slate-100 p-6 flex flex-col justify-between hidden md:flex">
            <div>
                <div class="flex items-center gap-2 mb-8 px-2">
                    <span class="text-xl font-bold tracking-tight text-slate-900">Mondays</span>
                </div>

                <nav class="space-y-1">
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-slate-500 hover:text-slate-900 rounded-xl transition">
                        <i data-lucide="layout-dashboard" class="w-4 h-4"></i> Dashboard
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-slate-500 hover:text-slate-900 rounded-xl transition">
                        <i data-lucide="folder" class="w-4 h-4"></i> Projects
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-white bg-[#2563EB] rounded-xl transition shadow-sm shadow-blue-200">
                        <i data-lucide="check-square" class="w-4 h-4"></i> My Task
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-slate-500 hover:text-slate-900 rounded-xl transition">
                        <i data-lucide="message-square" class="w-4 h-4"></i> Chats
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-slate-500 hover:text-slate-900 rounded-xl transition">
                        <i data-lucide="file-text" class="w-4 h-4"></i> Documents
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-slate-500 hover:text-slate-900 rounded-xl transition">
                        <i data-lucide="receipt" class="w-4 h-4"></i> Receipts
                    </a>
                </nav>

                <div class="mt-8">
                    <div class="flex items-center justify-between px-3 mb-3">
                        <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Projects</span>
                        <button class="text-slate-400 hover:text-slate-600"><i data-lucide="plus" class="w-4 h-4"></i></button>
                    </div>
                    <div class="space-y-1">
                        <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                            <span class="w-2.5 h-2.5 rounded bg-purple-400"></span> Event Planning
                        </a>
                        <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl">
                            <span class="w-2.5 h-2.5 rounded bg-emerald-400"></span> Breakfast Plan
                        </a>
                    </div>
                </div>
            </div>

            <div class="space-y-1 border-t border-slate-100 pt-4">
                <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-slate-500 hover:text-slate-900 rounded-xl">
                    <i data-lucide="settings" class="w-4 h-4"></i> Settings
                </a>
                <a href="#" class="flex items-center justify-between px-3 py-2 text-sm font-medium text-slate-500 hover:text-slate-900 rounded-xl">
                    <span class="flex items-center gap-3">
                        <i data-lucide="help-circle" class="w-4 h-4"></i> Help & Support
                    </span>
                    <span class="bg-emerald-100 text-emerald-700 text-xs px-2 py-0.5 rounded-full font-bold">8</span>
                </a>
            </div>
        </aside>

        <main class="flex-1 p-6 lg:p-8 max-w-7xl mx-auto w-full overflow-y-auto">
            
            <header class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div class="relative w-full max-w-md">
                    <i data-lucide="search" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input type="text" placeholder="Search or type a command" class="w-full bg-white border border-slate-200 pl-10 pr-12 py-2 rounded-xl text-sm focus:outline-none focus:border-blue-500 transition shadow-sm">
                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-xs text-slate-400 border border-slate-200 px-1.5 py-0.5 rounded bg-slate-50 font-mono">⌘ F</span>
                </div>
                
                <div class="flex items-center gap-3 justify-between sm:justify-end">
                    <button class="bg-[#2563EB] text-white text-sm font-medium px-4 py-2 rounded-xl hover:bg-blue-700 transition shadow-sm flex items-center gap-2">
                        <i data-lucide="plus" class="w-4 h-4"></i> New Project
                    </button>
                    <div class="flex items-center gap-2">
                        <button class="p-2 text-slate-400 hover:text-slate-600 bg-white border border-slate-200 rounded-xl shadow-sm">
                            <i data-lucide="bell" class="w-4.5 h-4.5"></i>
                        </button>
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Avatar" class="w-9 h-9 rounded-full border-2 border-white shadow-sm object-cover">
                    </div>
                </div>
            </header>

            <section class="mb-8">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                    <div>
                        <p class="text-xs font-medium text-slate-400 mb-1">Thursday, 20th February</p>
                        <h1 class="text-3xl font-bold text-slate-900 tracking-tight">Good Evening! John,</h1>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="flex items-center gap-1.5 px-3 py-1.5 bg-white border border-slate-200 rounded-lg text-xs font-medium text-slate-600 hover:bg-slate-50 transition shadow-sm">
                            <i data-lucide="share-2" class="w-3.5 h-3.5"></i> Share
                        </button>
                        <button class="flex items-center gap-1.5 px-3 py-1.5 bg-white border border-slate-200 rounded-lg text-xs font-medium text-slate-600 hover:bg-slate-50 transition shadow-sm">
                            <i data-lucide="plus" class="w-3.5 h-3.5"></i> Add Task
                        </button>
                    </div>
                </div>

                <div class="inline-flex flex-wrap items-center bg-white border border-slate-100 rounded-2xl p-1.5 shadow-sm gap-1">
                    <div class="flex items-center gap-2 px-4 py-2 text-xs font-medium text-slate-600">
                        <i data-lucide="clock" class="w-4 h-4 text-slate-400"></i>
                        <span><strong class="text-slate-900 font-bold">12hrs</strong> Time Saved</span>
                    </div>
                    <div class="h-4 w-px bg-slate-200 hidden sm:block"></div>
                    <div class="flex items-center gap-2 px-4 py-2 text-xs font-medium text-slate-600">
                        <i data-lucide="check-circle-2" class="w-4 h-4 text-slate-400"></i>
                        <span><strong class="text-slate-900 font-bold">24</strong> Projects Completed</span>
                    </div>
                    <div class="h-4 w-px bg-slate-200 hidden sm:block"></div>
                    <div class="flex items-center gap-2 px-4 py-2 text-xs font-medium text-slate-600">
                        <i data-lucide="hourglass" class="w-4 h-4 text-slate-400"></i>
                        <span><strong class="text-slate-900 font-bold">7</strong> Projects In-progress</span>
                    </div>
                </div>
            </section>

            <section class="bg-white border border-slate-100 rounded-2xl shadow-sm mb-6 overflow-hidden">
                <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <h2 class="font-bold text-slate-900 flex items-center gap-2">
                            <i data-lucide="list" class="w-4 h-4 text-slate-400"></i> My Projects
                        </h2>
                        <button class="text-xs bg-slate-50 border border-slate-200 text-slate-600 px-2.5 py-1 rounded-lg font-medium flex items-center gap-1 hover:bg-slate-100 transition">
                            This Week <i data-lucide="chevron-down" class="w-3 h-3"></i>
                        </button>
                    </div>
                    <button class="text-xs font-medium text-slate-500 hover:text-slate-800 bg-slate-50 px-3 py-1.5 rounded-lg transition">See All</button>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/70 border-b border-slate-100 text-xs font-semibold text-slate-400 uppercase tracking-wider">
                                <th class="py-3 px-5">Task Name</th>
                                <th class="py-3 px-5">Assign</th>
                                <th class="py-3 px-5">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 text-sm text-slate-600">
                            <tr class="hover:bg-slate-50/50 transition">
                                <td class="py-3.5 px-5 font-medium text-slate-800">
                                    <div class="flex items-center justify-between max-w-xs">
                                        <span>Help DStudio get more customers</span>
                                        <div class="flex items-center gap-3 text-xs text-slate-400 font-normal">
                                            <span class="flex items-center gap-1"><i data-lucide="message-square" class="w-3.5 h-3.5"></i> 7</span>
                                            <span class="flex items-center gap-1"><i data-lucide="paperclip" class="w-3.5 h-3.5"></i> 2</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 px-5">
                                    <div class="flex items-center gap-2">
                                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=80&q=80" class="w-6 h-6 rounded-full object-cover" alt="User">
                                        <span class="text-xs font-medium text-slate-700">Phoenix Winters</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-5">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700">In Progress</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 transition">
                                <td class="py-3.5 px-5 font-medium text-slate-800">
                                    <div class="flex items-center justify-between max-w-xs">
                                        <span>Plan a trip</span>
                                        <div class="flex items-center gap-3 text-xs text-slate-400 font-normal">
                                            <span class="flex items-center gap-1"><i data-lucide="message-square" class="w-3.5 h-3.5"></i> 10</span>
                                            <span class="flex items-center gap-1"><i data-lucide="paperclip" class="w-3.5 h-3.5"></i> 3</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 px-5">
                                    <div class="flex items-center gap-2">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&q=80" class="w-6 h-6 rounded-full object-cover" alt="User">
                                        <span class="text-xs font-medium text-slate-700">Cohen Merritt</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-5">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-purple-100 text-purple-700">Pending</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 transition">
                                <td class="py-3.5 px-5 font-medium text-slate-800">
                                    <div class="flex items-center justify-between max-w-xs">
                                        <span>Return a package</span>
                                        <div class="flex items-center gap-3 text-xs text-slate-400 font-normal">
                                            <span class="flex items-center gap-1"><i data-lucide="message-square" class="w-3.5 h-3.5"></i> 5</span>
                                            <span class="flex items-center gap-1"><i data-lucide="paperclip" class="w-3.5 h-3.5"></i> 8</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 px-5">
                                    <div class="flex items-center gap-2">
                                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&q=80" class="w-6 h-6 rounded-full object-cover" alt="User">
                                        <span class="text-xs font-medium text-slate-700">Lukas Juarez</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-5">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-blue-100 text-blue-700">Completed</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                
                <div class="lg:col-span-7 bg-white border border-slate-100 rounded-2xl shadow-sm p-5">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="font-bold text-slate-900 flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4 text-slate-400"></i> Schedule
                        </h2>
                        <button class="text-slate-400 hover:text-slate-600"><i data-lucide="more-horizontal" class="w-4 h-4"></i></button>
                    </div>

                    <div class="grid grid-cols-7 text-center gap-1 mb-6 border-b border-slate-50 pb-4">
                        <div><p class="text-[10px] font-medium text-slate-400 mb-1">Mo</p><p class="text-xs font-bold text-slate-700 p-1.5 rounded-lg">15</p></div>
                        <div><p class="text-[10px] font-medium text-slate-400 mb-1">Tu</p><p class="text-xs font-bold text-slate-700 p-1.5 rounded-lg">16</p></div>
                        <div><p class="text-[10px] font-medium text-slate-400 mb-1">We</p><p class="text-xs font-bold text-white p-1.5 rounded-xl bg-purple-500 shadow-sm shadow-purple-100">17</p></div>
                        <div><p class="text-[10px] font-medium text-slate-400 mb-1">Th</p><p class="text-xs font-bold text-slate-700 p-1.5 rounded-lg">18</p></div>
                        <div><p class="text-[10px] font-medium text-slate-400 mb-1">Fr</p><p class="text-xs font-bold text-slate-700 p-1.5 rounded-lg">19</p></div>
                        <div><p class="text-[10px] font-medium text-slate-400 mb-1">Sa</p><p class="text-xs font-bold text-slate-700 p-1.5 rounded-lg">20</p></div>
                        <div><p class="text-[10px] font-medium text-slate-400 mb-1">Su</p><p class="text-xs font-bold text-slate-700 p-1.5 rounded-lg">14</p></div>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start justify-between p-3 rounded-xl hover:bg-slate-50 transition border border-transparent hover:border-slate-100">
                            <div class="flex gap-3">
                                <div class="w-1 h-10 rounded bg-emerald-400 mt-0.5"></div>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-800">Kickoff Meeting</h4>
                                    <p class="text-xs text-slate-400 mt-0.5">01:00 PM to 02:30 PM</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="flex -space-x-1.5 overflow-hidden">
                                    <img class="inline-block h-5 w-5 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80" alt="">
                                    <img class="inline-block h-5 w-5 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80" alt="">
                                </div>
                                <button class="text-slate-400 hover:text-slate-600"><i data-lucide="more-horizontal" class="w-4 h-4"></i></button>
                            </div>
                        </div>
                        <div class="flex items-start justify-between p-3 rounded-xl hover:bg-slate-50 transition border border-transparent hover:border-slate-100">
                            <div class="flex gap-3">
                                <div class="w-1 h-10 rounded bg-blue-500 mt-0.5"></div>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-800">Create Wordpress website for event Registration</h4>
                                    <p class="text-xs text-slate-400 mt-0.5">04:00 PM to 02:30 PM</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="flex -space-x-1.5 overflow-hidden">
                                    <img class="inline-block h-5 w-5 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80" alt="">
                                    <img class="inline-block h-5 w-5 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=80" alt="">
                                </div>
                                <button class="text-slate-400 hover:text-slate-600"><i data-lucide="more-horizontal" class="w-4 h-4"></i></button>
                            </div>
                        </div>
                        <div class="flex items-start justify-between p-3 rounded-xl hover:bg-slate-50 transition border border-transparent hover:border-slate-100">
                            <div class="flex gap-3">
                                <div class="w-1 h-10 rounded bg-purple-400 mt-0.5"></div>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-800">Create User flow for hotel booking</h4>
                                    <p class="text-xs text-slate-400 mt-0.5">05:00 PM to 02:30 PM</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="flex -space-x-1.5 overflow-hidden">
                                    <img class="inline-block h-5 w-5 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80" alt="">
                                    <img class="inline-block h-5 w-5 rounded-full ring-2 ring-white object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80" alt="">
                                </div>
                                <button class="text-slate-400 hover:text-slate-600"><i data-lucide="more-horizontal" class="w-4 h-4"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 bg-white border border-slate-100 rounded-2xl shadow-sm p-5">
                    <h2 class="font-bold text-slate-900 flex items-center gap-2 mb-6">
                        <i data-lucide="file-text" class="w-4 h-4 text-slate-400"></i> Notes
                    </h2>

                    <div class="space-y-5">
                        <div class="flex items-start gap-3">
                            <input type="checkbox" class="mt-1 rounded-full border-slate-300 text-blue-600 focus:ring-blue-500 w-4 h-4">
                            <div>
                                <h4 class="text-sm font-semibold text-slate-800">Landing Page For Website</h4>
                                <p class="text-xs text-slate-400 mt-1 leading-relaxed">To get started on a landing page, could you provide a bit more detail about its purpose?</p>
                            </div>
                        </div>
                        <div class="h-px bg-slate-100"></div>
                        <div class="flex items-start gap-3">
                            <input type="checkbox" class="mt-1 rounded-full border-slate-300 text-blue-600 focus:ring-blue-500 w-4 h-4">
                            <div>
                                <h4 class="text-sm font-semibold text-slate-800">Fixing icons with dark backgrounds</h4>
                                <p class="text-xs text-slate-400 mt-1 leading-relaxed">Use icons that are easily recognizable and straightforward. Avoid overly complex designs that might confuse users</p>
                            </div>
                        </div>
                        <div class="h-px bg-slate-100"></div>
                        <div class="flex items-start gap-3 bg-slate-50/50 p-2.5 rounded-xl border border-dashed border-slate-200">
                            <input type="checkbox" checked class="mt-1 rounded-full border-slate-300 text-blue-600 focus:ring-blue-500 w-4 h-4">
                            <div>
                                <h4 class="text-sm font-semibold text-slate-400 line-through">Discussion regarding userflow improvement</h4>
                                <p class="text-xs text-slate-400 mt-1 leading-relaxed">What's the main goal of the landing page? (e.g., lead generation, product )</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </main>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>