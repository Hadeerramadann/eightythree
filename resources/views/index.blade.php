<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Ehightythree backend</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            /* .spinner {
                animation: rotate 2s linear infinite;
                z-index: 2;
                position: absolute;
                
                margin: -25px 0 0 -25px;

                width: 50px;
                height: 50px;
                
                & .path {
                    stroke: hsl(210, 70, 75);
                    stroke-linecap: round;
                    animation: dash 1.5s ease-in-out infinite;
                }
                
                }

                @keyframes rotate {
                100% {
                    transform: rotate(360deg);
                }
                }

                @keyframes dash {
                0% {
                    stroke-dasharray: 1, 150;
                    stroke-dashoffset: 0;
                }
                50% {
                    stroke-dasharray: 90, 150;
                    stroke-dashoffset: -35;
                }
                100% {
                    stroke-dasharray: 90, 150;
                    stroke-dashoffset: -124;
                }
                } */

                .la-ball-spin,
.la-ball-spin > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-ball-spin {
    display: block;
    font-size: 0;
    color: #fff;
}
.la-ball-spin.la-dark {
    color: #333;
}
.la-ball-spin > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-ball-spin {
    width: 32px;
    height: 32px;
}
.la-ball-spin > div {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 8px;
    height: 8px;
    margin-top: -4px;
    margin-left: -4px;
    border-radius: 100%;
    -webkit-animation: ball-spin 1s infinite ease-in-out;
       -moz-animation: ball-spin 1s infinite ease-in-out;
         -o-animation: ball-spin 1s infinite ease-in-out;
            animation: ball-spin 1s infinite ease-in-out;
}
.la-ball-spin > div:nth-child(1) {
    top: 5%;
    left: 50%;
    -webkit-animation-delay: -1.125s;
       -moz-animation-delay: -1.125s;
         -o-animation-delay: -1.125s;
            animation-delay: -1.125s;
}
.la-ball-spin > div:nth-child(2) {
    top: 18.1801948466%;
    left: 81.8198051534%;
    -webkit-animation-delay: -1.25s;
       -moz-animation-delay: -1.25s;
         -o-animation-delay: -1.25s;
            animation-delay: -1.25s;
}
.la-ball-spin > div:nth-child(3) {
    top: 50%;
    left: 95%;
    -webkit-animation-delay: -1.375s;
       -moz-animation-delay: -1.375s;
         -o-animation-delay: -1.375s;
            animation-delay: -1.375s;
}
.la-ball-spin > div:nth-child(4) {
    top: 81.8198051534%;
    left: 81.8198051534%;
    -webkit-animation-delay: -1.5s;
       -moz-animation-delay: -1.5s;
         -o-animation-delay: -1.5s;
            animation-delay: -1.5s;
}
.la-ball-spin > div:nth-child(5) {
    top: 94.9999999966%;
    left: 50.0000000005%;
    -webkit-animation-delay: -1.625s;
       -moz-animation-delay: -1.625s;
         -o-animation-delay: -1.625s;
            animation-delay: -1.625s;
}
.la-ball-spin > div:nth-child(6) {
    top: 81.8198046966%;
    left: 18.1801949248%;
    -webkit-animation-delay: -1.75s;
       -moz-animation-delay: -1.75s;
         -o-animation-delay: -1.75s;
            animation-delay: -1.75s;
}
.la-ball-spin > div:nth-child(7) {
    top: 49.9999750815%;
    left: 5.0000051215%;
    -webkit-animation-delay: -1.875s;
       -moz-animation-delay: -1.875s;
         -o-animation-delay: -1.875s;
            animation-delay: -1.875s;
}
.la-ball-spin > div:nth-child(8) {
    top: 18.179464974%;
    left: 18.1803700518%;
    -webkit-animation-delay: -2s;
       -moz-animation-delay: -2s;
         -o-animation-delay: -2s;
            animation-delay: -2s;
}
.la-ball-spin.la-sm {
    width: 16px;
    height: 16px;
}
.la-ball-spin.la-sm > div {
    width: 4px;
    height: 4px;
    margin-top: -2px;
    margin-left: -2px;
}
.la-ball-spin.la-2x {
    width: 64px;
    height: 64px;
}
.la-ball-spin.la-2x > div {
    width: 16px;
    height: 16px;
    margin-top: -8px;
    margin-left: -8px;
}
.la-ball-spin.la-3x {
    width: 96px;
    height: 96px;
}
.la-ball-spin.la-3x > div {
    width: 24px;
    height: 24px;
    margin-top: -12px;
    margin-left: -12px;
}
/*
 * Animation
 */
@-webkit-keyframes ball-spin {
    0%,
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    20% {
        opacity: 1;
    }
    80% {
        opacity: 0;
        -webkit-transform: scale(0);
                transform: scale(0);
    }
}
@-moz-keyframes ball-spin {
    0%,
    100% {
        opacity: 1;
        -moz-transform: scale(1);
             transform: scale(1);
    }
    20% {
        opacity: 1;
    }
    80% {
        opacity: 0;
        -moz-transform: scale(0);
             transform: scale(0);
    }
}
@-o-keyframes ball-spin {
    0%,
    100% {
        opacity: 1;
        -o-transform: scale(1);
           transform: scale(1);
    }
    20% {
        opacity: 1;
    }
    80% {
        opacity: 0;
        -o-transform: scale(0);
           transform: scale(0);
    }
}
@keyframes ball-spin {
    0%,
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
           -moz-transform: scale(1);
             -o-transform: scale(1);
                transform: scale(1);
    }
    20% {
        opacity: 1;
    }
    80% {
        opacity: 0;
        -webkit-transform: scale(0);
           -moz-transform: scale(0);
             -o-transform: scale(0);
                transform: scale(0);
    }
}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
             @yield('content')
            
        </div>
          @stack('after-scripts')

    </body>
</html>
