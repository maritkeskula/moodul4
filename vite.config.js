import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/styles.css',
                'resources/js/index.js',
                'resources/js/contact.js',
                'resources/js/detail.js',
                'resources/js/shop.js',
            ],
            refresh: true,
        }),
    ],
});
