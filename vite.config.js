import { defineConfig } from 'vite';
import laravel from 'vite-plugin-laravel';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/css/app.css'],
            refresh: true,
        }),
        vue(), // Make sure this line is present
    ],
});
