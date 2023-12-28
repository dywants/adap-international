<a  {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center text-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-[16px] text-white uppercase tracking-widest hover:opacity-75 focus:opacity-75 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
