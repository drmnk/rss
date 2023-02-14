import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // Чтобы vite работал в сети и не бузил
    server: {
        host: "0.0.0.0",
        hmr: {
            host: "localhost",
        },
    },
});
