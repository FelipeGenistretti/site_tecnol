import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        // host: '0.0.0.0',
        // port: 5173,
        // https: true,
        // hmr: {
        //     //host: 'cuddly-news-enjoy.loca.lt',
        //     host: 'https://giant-olives-occur.loca.lt',
        //     protocol: 'wss',
        // },
    },
});
