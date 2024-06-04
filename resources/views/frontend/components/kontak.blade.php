<div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-gray-200 p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="font-bold text-indigo-600 text-3xl mb-2">Kontak</h1>
        <p class="font-medium text-slate-500 mb-4">Welcome, Please enter your details</p>
        <form action="#" method="POST" autocomplete="off">
            <div class="mb-2">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                <input type="text" id="nama" name="nama" class="text-sm border border-gray-300 w-full rounded py-2 px-3 placeholder: opasitiy-50" autocomplete="off" required placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="text-sm border border-gray-300 w-full rounded py-2 px-3 placeholder: opasitiy-50" autocomplete="off" required placeholder="example@gmail.com">
            </div>
            <div class="mb-2">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                <textarea id="message" name="message" rows="4" class="text-sm border border-gray-300 w-full rounded py-2 px-3 placeholder: opasitiy-50" autocomplete="off" required placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 text-white font-bold">Send Message</button>
        </form>
    </div>
</div>
