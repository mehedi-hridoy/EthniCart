import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// // Import Tailwind CSS plugin
// import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        // // Add Tailwind CSS plugin
        // tailwindcss(),
    ],
});
