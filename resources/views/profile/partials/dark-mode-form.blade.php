<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Appearance Settings') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Toggle dark mode for your dashboard.') }}
        </p>
    </header>

    <form class="mt-6 space-y-6">
        <div>
            <x-input-label :value="__('Dark Mode')" />
            
            <button 
                type="button"
                @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)" 
                class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded">
                <span x-text="darkMode ? 'Switch to Light Mode' : 'Switch to Dark Mode'"></span>
            </button>
        </div>
    </form>
</section>
