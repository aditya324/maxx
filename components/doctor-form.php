<div class="w-full max-w-md mx-auto lg:mx-0  h-fit
            bg-white border border-gray-100 
            rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.08)] 
            p-5 sm:p-6 lg:p-7">

    <h3 class="text-lg sm:text-xl font-semibold text-center text-[#D2691E] mb-4">
        Book An Appointment
    </h3>

    <form class="space-y-4 sm:space-y-5">

        <!-- Name -->
        <input
            type="text"
            placeholder="Full Name*"
            class="w-full h-11 sm:h-12 rounded-lg border border-gray-300 px-3 text-sm 
                   focus:border-[#F58220] focus:ring-1 focus:ring-[#F58220] outline-none" />

        <!-- Email -->
        <input
            type="email"
            placeholder="Email*"
            class="w-full h-11 sm:h-12 rounded-lg border border-gray-300 px-3 text-sm 
                   focus:border-[#F58220] focus:ring-1 focus:ring-[#F58220] outline-none" />

        <!-- Phone -->
        <div class="flex gap-2">
            <select
                class="w-[90px] sm:w-[110px] h-11 sm:h-12 rounded-lg border border-gray-300 px-2 text-sm 
                       focus:border-[#F58220] focus:ring-1 focus:ring-[#F58220] outline-none">
                <option value="+91">+91</option>
            </select>

            <input
                type="tel"
                placeholder="Mobile Number*"
                class="flex-1 h-11 sm:h-12 rounded-lg border border-gray-300 px-3 text-sm 
                       focus:border-[#F58220] focus:ring-1 focus:ring-[#F58220] outline-none" />
        </div>

        <!-- Consent -->
        <label class="flex items-start gap-2 text-xs text-gray-600 leading-tight">
            <input type="checkbox" class="mt-1 h-4 w-4 shrink-0" />
            <span>I consent max4 hospitals to contact me</span>
        </label>

        <!-- Button -->
        <button
            type="submit"
            class="w-full h-11 sm:h-12 rounded-lg bg-[#7B2626] text-white font-semibold text-sm 
                   shadow hover:brightness-110 transition">
            Book Now
        </button>

    </form>
</div>