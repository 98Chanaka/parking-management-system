import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{  
                    clickboder: '#1e40af',    //click on boders (input field, radio button)
                light:{
                    background:'#ffffff',       //page background color, input field background color
                    icon:'#7F7E7E',         //sidebar icon color, primary buttons color  
                    boder:'#9bd4e4',        //input field boder, table lines, all boders         
                    hover:'#cfe1f0',        //sidebar hover, table row hover
                    title: '#0676a2',                // all page titles           
                    text: '#585858',            //font color
                    navbg: '#f0f9ff', 
                    hovicon: '#2563eb',
                    button: '#172554',
                    buttonhov: '#1e40af',              
                },
                dark:{
                    background:'#111827',
                    icon:'#d9d8df',
                    boder:'#1d4ed8',            //dark mode colors
                    hover:'#4b5158',
                    title: '#51a8cb',
                    text: '#d9d8df',        //change text colors
                    navbg: '#1f2937',
                    hovicon: '#83c1da',
                    button: '#7CABB2',
                    buttonhov: '#96bbc1',
                },
            },
        },
    },

    darkMode: 'class',

    plugins: [forms, require('flowbite/plugin')],
};
