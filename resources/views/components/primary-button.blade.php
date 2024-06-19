<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 dark:bg-botao border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-200 uppercase tracking-widest hover:bg-botaoHover dark:hover:bg-botaoHover focus:bg-gray-700 dark:focus:bg-segundaria active:bg-gray-900 dark:active:bg-segundaria focus:outline-none focus:ring-2 focus:ring-botao focus:ring-offset-2 dark:focus:ring-offset-botao transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
